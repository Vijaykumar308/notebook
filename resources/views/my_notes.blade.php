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
        
        <div class="category-section">
            <h1>Category</h1>
            <ul>
                <li>All Notes</li>
                <li>Importance Notes</li>
                <li>Liked</li>
                <li>shared</li>
                <li>Saved</li>
                <li>Shayri</li>
            </ul>
        </div>
   </div>
@endsection
    