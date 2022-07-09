@extends('layout.base')

@section('page-title')
    Home Page
@endsection

@section('page-content')
    @foreach ($comics as $comic)
        <div class="comic-card">
            <x-card-product :image="$comic['thumb']" :title="$comic['title']"/>
        </div>
    @endforeach
@endsection