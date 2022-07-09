@extends('layout.base')

@section('page-title')
    {{$comic['title']}}
@endsection

@section('page-content')
    <h1>{{$comic['title']}}</h1>
@endsection