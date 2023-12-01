@extends('master')

@section('title','Category')
@section('content')
   <x-hero title="All Categories List"/>
  <div class="container">
      <table id="categoryTable">
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
        <div class="pagination-block">
            {{$categories->links()}}
        </div>
  </div>
  
@endsection
<style>
    /*=============== Pagination Styles ====================*/
    .pagination-block {
        width: 100%;
        padding: 2rem 0;
    } 
    
    .pagination-block nav {
        display: flex;
        justify-content: space-between;
        position: relative;
    }
    /* previous button */
    .pagination-block nav > div:nth-child(1) {
        
    }

    .pagination-block nav > div:nth-child(1) span {
        padding: 10px;
        border-radius: 5px;
        background: #39b5f2;
        color: #fff;
        outline: none;
        box-shadow: none;
    }
    .pagination-block nav > div:nth-child(1) a {

    }

    /*  */
    .pagination-block nav > div:nth-child(2) > div:nth-child(2) {
        position: absolute;
        left: 50%;
        margin-top: 2rem;
        transform: translate(-50%,-50%);
    }
    /* All Pages numbers in one rows */
    .pagination-block nav > div span {
        position: relative;
        z-index: 0;
        display: inline-flex;
        /* gap: 2rem; */
    }
    .pagination-block nav > div > span a {
       
    }
    .pagination-block nav div a {
        border: 1px solid #000;
        padding: 10px;
        z-index: 22;
        font-weight: 600;
        color: #fff;
        background:var(--light-green);
    }

    .pagination-block nav div:nth-child(2) span span[aria-current="page"] {
        border: 1px solid #000;
        padding: 10px;
        z-index: 22;
        font-weight: 600;
        background:var(--light-gray);
    }

    /*=============== Pagination Styles Ends ====================*/
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


   /* sf */
   .relative-inline-flex {
    position: relative;
    display: inline-flex;
}

.relative-inline-flex .items-center {
    align-items: center;
}

.relative-inline-flex .px-4 {
    padding-left: 1rem;
    padding-right: 1rem;
}

.relative-inline-flex .py-2 {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
}

.relative-inline-flex .-ml-px {
    margin-left: -1px;
}

.relative-inline-flex .text-sm {
    font-size: 0.875rem; /* 14px */
}

.relative-inline-flex .font-medium {
    font-weight: 500;
}

.relative-inline-flex .text-gray-500 {
    color: #6b7280;
}

.relative-inline-flex .bg-white {
    background-color: #ffffff;
}

.relative-inline-flex .border {
    border-width: 1px;
}

.relative-inline-flex .border-gray-300 {
    border-color: #d1d5db;
}

.relative-inline-flex .cursor-default {
    cursor: default;
}

.relative-inline-flex .leading-5 {
    line-height: 1.25rem; /* 20px */
}

</style>