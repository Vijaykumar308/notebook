@extends('master')

@section('title','Category')
@section('content')
   <x-hero title="Categories your Notes"/>
   
   <div class="category container wrapper">
    <h1>Update Category</h1>
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    <form class="category-form" action="{{route('category.update',['id' => $categoryRecord->id])}}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group-category">
            <label for="categoryName">Category Name</label>
            <input type="text" id="categoryName" name="name" value="{{$categoryRecord->name}}" required>
        </div>

        <div class="form-group-category">
            <label for="categoryDescription">Category Description</label>
            <textarea id="categoryDescription" name="description"required>{{$categoryRecord->description}}</textarea>
        </div>

        <button type="submit">Update Category</button>
    </form>
</div>
@endsection