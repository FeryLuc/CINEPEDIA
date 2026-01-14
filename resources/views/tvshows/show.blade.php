@extends('templates.index')
@section('title')
    CinéPedia - {{$tvShow->name}}
@endsection
@section('content')
    <div>{{$tvShow->name}}</div>
    <img src="{{$tvShow->posterUrl() ? $tvShow->posterUrl() : $tvShow->name}}" alt="{{$tvShow->name}}">
@endsection