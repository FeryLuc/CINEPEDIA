@extends('templates.index')

@section('content')

<h2>Idée de film à voir</h2>

  
        <h1><a href="{{route('movies.show',['movie'=>$randMovie->id])}}">{{$randMovie->title}}</a></h1>
        <img src="{{$randMovie->posterUrl() ?$randMovie->posterUrl():$randMovie->title }}" alt="{{$randMovie->title}}">
    

<br/>
<h2>Films actuellement en salle</h2>
<ul>
    @foreach ($nowPlaying as $movie)
        <li><a href="{{route('movies.show',['movie'=>$movie->id])}}">{{$movie->title}}</a></li>
    @endforeach
</ul>
    
<br/>
<h2>Séries en cours de diffusion</h2>
<ul>
    @foreach ($tvShowOnAir as $tvShow)
        <li><a href="">{{$tvShow->name}}</a></li>
    @endforeach
</ul>
@endsection