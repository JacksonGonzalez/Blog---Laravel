<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Tag;
use App\Article;
use App\Image;
use App\Http\Requests\ArticleRequest;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.articles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        $tags = Tag::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('admin.articles.create')
                ->with('categories', $categories)
                ->with('tags', $tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
           
        if($request->file('image')){
            //Manipulacion de imagenes
            $file = $request->file('image');
            //forma de cambiarle el nombre para que sea original
            $name = 'img_' . time() . '.'. $file->getClientOriginalExtension();
            //se establece la ruta para guardar la imagen en path
            $path = public_path() . '\images\articles';
            //codigo para mover la imagen a esa ruta
            $file->move($path, $name);
            // dd($path);
        }

        $article = new Article($request->all());
        $article->user_id = \Auth::user()->id;
        $article->save();
        // dd($article);

        //metodo sinc para llenar la tabla pivote 
        $article->tags()->sync($request->tags);

        $image = new Image();
        $image->name = $name;
        //esto es para hacer la referencia del article_id a la tabla images
        $image->article()->associate($article);
        $image->save();


        flash('Se ha creado el articulo ' . $article->title . ' de forma exitosa')->success();
        return redirect()->route('articles.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
