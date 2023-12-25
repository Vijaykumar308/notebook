@extends('master')

@section('title','My Notes')

@section('content')
    <x-hero title="My Notes | Collections"/>

   <div class="container note_container"> 
        <div class="notes-group">
            @for ($i = 1; $i < 5; $i++)
                <x-note-card />
            @endfor
        </div>

        {{-- {{$categories}} --}}

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
    