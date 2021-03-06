@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"> @include('admin.template.partials.nav') </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    @include('flash::message')
                    @include('admin.template.partials.errors')
                    
                    @yield('formulario')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
