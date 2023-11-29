@extends('master')

@section('title','Category')
@section('content')
   <x-hero title="Categories your Notes"/>
   
   <div class="category container wrapper">
    <h1>Add a New Category</h1>
    <form class="category-form" action="{{route('category.store')}}" method="POST">
        @csrf
        <div class="form-group-category">
            <label for="categoryName">Category Name</label>
            <input type="text" id="categoryName" name="categoryName" required>
        </div>

        <div class="form-group-category">
            <label for="categoryDescription">Category Description</label>
            <textarea id="categoryDescription" name="categoryDescription" required></textarea>
        </div>

        <button type="submit">Add Category</button>
    </form>
</div>
@endsection