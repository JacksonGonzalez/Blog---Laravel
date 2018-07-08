<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Article extends Model
{

    protected $table = 'articles';

    protected $fillable = ['title', 'content', 'category_id', 'user_id'];

    public function category(){
        return $this->belongsTo('App\Category'); //es la forma inversa de de has many
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function images(){
        return $this->hasMany('App\Image');
    }

    public function tags(){
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    public function scopeSearch($query, $title){
       return $query->where('title', 'LIKE', "%$title%");
    }
}
