@extends('master')

@section('title','Category')
@section('content')
   <x-hero title="All Categories List"/>
  <div class="container">

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
   header {
       background-color: var(--primary-dark);
       color: var(--white);
       padding: 10px;
       text-align: center;
   }

   .container {
       max-width: 800px;
       margin: 20px auto;
       padding: 20px;
       background-color: var(--white);
       box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
   }

   table {
       width: 100%;
       border-collapse: collapse;
       margin-top: 20px;
   }

   th, td {
       border: 1px solid var(--light-gray);
       padding: 12px;
       text-align: left;
   }

   th {
       background-color: var(--primary-dark);
       color: var(--white);
   }

   tr:nth-child(even) {
       background-color: var(--light-gray);
   }
</style>