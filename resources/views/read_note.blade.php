@extends('master')
@section('title','welcome')
@section('content')
    
<x-hero 
    title="Demo Project: Laravel Personal Blog" 
    blogDate="November 12, 2022 " 
    category="Category"
/>

<div class="blog">
    <div class="blog-featured-image">
        <img src="{{asset('images/bg1.jpg')}}" alt="" srcset="">
    </div>
    <p>
        This is a demo Laravel project aimed at junior developers to practice their skills. This is a task for the Beginner Level of the Laravel Roadmap, with the goal to implement as many of its topics as possible. This article contains both the task and its possible solution, with the repository link at the end.
        <br><br>
        First, I provide the task description, as it would appear on any job board like Upwork, from the client. I hope that you would take this description and try to create the project yourself, but then, later, you may take a look at our prepared repository, with comments, in the second half of this article.
    </p>
</div>
@endsection
