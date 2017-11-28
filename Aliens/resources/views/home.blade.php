@extends('layout.app')

@section('title')
    {{'Home - Aliens'}}
@endsection

@section('content')
    @include('layout.top_panel')
    @include('layout.posts',$posts)
@endsection
        


       
      

