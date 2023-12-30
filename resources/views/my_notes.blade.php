@extends('master')

@section('title','My Notes')
@section('content')
    <x-hero title="My Notes | Collections"/>
   <div class="container note_container"> 
        <div class="notes-group">
            @foreach ($notes as $note)
                <x-note-card 
                    :title="$note['title']" 
                    :slug="$note['slug']"
                    :featured-image="$note['image']"
                    :body="$note['body']"
                    :created="$note['created_at']"
                />
            @endforeach
        </div>
        

        <div class="category-section">
            <h1>Category</h1>
            <ul>
               @foreach ($categories as $category)
                <input type="checkbox" name="{{$category->name}}" id="{{$category->name}}">
                <label for="{{$category->name}}">{{$category->name}}</label>
                <br>
                   {{-- <li>{{$category->name}}</li> --}}
               @endforeach
            </ul>
        </div>
   </div>
@endsection
    