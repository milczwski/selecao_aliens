@extends('layout.app')

@section('title')
    {{'Novo Post - Aliens'}}
@endsection

@section('content')
    @include('layout.top_panel')
    @include('layout.new_post_form')
@endsection