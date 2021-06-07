@extends('layouts.main-layout')

@section('title',$post->title)

@section('content')
@include('includes.categories')
    <div class="container">
        <a href="{{ route('getPostsByCategory', $slug_category) }}" class="btn btn-outline-primary mb-4">Back</a>
        <article>
{{--            {{ $post->text }}--}}
            {!!  $post->text !!}
        </article>
    </div>

@endsection
