@extends('layout.base')

@section('page-title')
    Home Page
@endsection

@section('page-content')
    @foreach ($comics as $index => $comic)
        <div class="comic-card">
            <a href="{{route('comic', ['id' => $index])}}">
                <x-card-product :image="$comic['thumb']" :title="$comic['title']"/>
            </a>
        </div>
    @endforeach
@endsection