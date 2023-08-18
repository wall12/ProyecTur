@extends('adminlte::page')

@section('title', 'Turismo Encar')

@section('content_header')

<a class =" btn btn-secondary btn-sm float-right" href="{{route('admin.posts.create')}}">Nuevo Posts</a>
    <h1>Listado de Posts</h1>
@stop

@section('content')

@section('content')

    @if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}} </strong>
    </div>
        
    @endif
    
    @livewire('admin.posts-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
