@extends('templates.index')
@section('title')
    CinéPedia - {{$movie->title}}
@endsection
@section('content')
<h1>{{$movie->title}}</h1>
<img src="{{$movie->posterUrl()}}" alt="{{$movie->title}}">
@endsection