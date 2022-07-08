@extends('layout.base')

@section('page-title')
    Home Page
@endsection

@section('page-content')
    @foreach ($comics as $comic)
        <div class="comic-card">
            <div class="comic-cover">
                <img src="{{$comic['thumb']}}" alt="">
            </div>
            <p class="comic-title">{{$comic['title']}}</p>
        </div>
    @endforeach
@endsection