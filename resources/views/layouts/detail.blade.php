@extends('layouts.app')

@section('title', $blog->title)

@section('content')
    <h2>{{ $blog->title }}</h2>
    <hr>
    <div class="blog-content">{!! $blog->content !!}</div>
    <hr>
@endsection
