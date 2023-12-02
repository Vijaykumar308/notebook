@extends('master')

@section('title','Category')
@section('content')
   <x-hero title="Categories your Notes"/>
   
   <div class="category container wrapper">
    @if(Session::has('message'))
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        console.log('session working why pop not came');
        toastr.options = {
            "progressBar": true,
            "closeButton": true
        }
        toastr.options.positionClass = 'toast-top-center';
        toastr.success("{{ Session::get('message') }}",{timeOut:1000}); 
    </script>
@endif
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