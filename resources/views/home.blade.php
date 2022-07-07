@extends('layout.base')

@section('page-title')
    Home Page
@endsection

@section('page-content')
    @foreach ($comics as $comic)
        <div class="comic-card">
            <img src="{{$comic['thumb']}}" alt="">
            <p>{{$comic['title']}}</p>
        </div>
    @endforeach
@endsection