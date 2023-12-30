@extends('master')
@section('title','welcome')
@section('content')

<x-hero 
    :title="$note[0]['title']"
    :blogDate="$note[0]['created_at']" 
    :category="$note[0]['name']"
/>



<div class="blog">
    <div class="blog-featured-image">
        @if(!empty($note[0]['image']))
            <img src="{{$note[0]['image']}}" alt="" srcset="">
        @endif
    </div>
    <p>
        {!! $note[0]['body'] !!}
    </p>
</div>
@endsection
