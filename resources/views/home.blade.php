@extends('layout.base')

@section('page-title')
    Home Page
@endsection

@section('page-content')
    <section>
        @foreach ($comics as $comic)
            <img src="{{$comic['thumb']}}" alt="">
            <p>{{$comic['title']}}</p>
        @endforeach
    </section>
@endsection