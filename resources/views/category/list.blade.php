@extends('master')
@section('title','Category')
@section('content')
   <x-hero title="All Categories List"/>
  <div class="container category-list-view">
    <div>
        <a href="{{route('category.create')}}">
            <button class="btn"> Add Category</button>
        </a>
    </div>
      <table>
          <thead>
              <tr>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Created At</th>
                  <th>Modified At</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
               <!-- Sample category data -->
               @foreach ($categories as $category)
               <tr>
                  <td>{{$category->id}}</td>
                  <td>{{$category->name}}</td>
                  <td>{{$category->created_at}}</td>
                  <td>{{$category->modified_at}}</td>
                  <td style="display: flex;gap:20px">
                     <a href="{{route('category.edit',['id' => $category->id])}}">
                        <i class="fa-solid fa-pen-to-square"></i>
                     </a>
                     
                     <form action="" method="get">
                        <i class="fa-solid fa-trash"></i>
                     </form>
                  </td>
              </tr>
               @endforeach

              <!-- Add more categories as needed -->
          </tbody>
      </table>
  </div>
  
@endsection
<style>
   
</style>