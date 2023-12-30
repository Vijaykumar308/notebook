@extends('master')
@section('title','welcome')
@section('content')
{{-- @php
    echo "<pre>";
        print_r($note);
    echo "</pre>";
@endphp --}}

<x-hero 
    :title="$note[0]['title']"
    :blogDate="$note[0]['created_at']" 
    {{-- :category="Category" --}}
/>


<div class="blog">
    <div class="blog-featured-image">
        <img src="{{$note[0]['image']}}" alt="" srcset="">
    </div>
    <p>
        {!! $note[0]['body'] !!}
    </p>
</div>
@endsection
