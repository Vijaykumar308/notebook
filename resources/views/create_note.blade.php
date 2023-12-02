<style>
    .ck-editor__editable_inline {
        height: 40vh;
        resize: vertical;
    }
    /* .toast-top-center {
        top: 38% !important;
        margin: 0 auto;
        left: 38%;
    } */
</style>
@extends('master')
@section('title','create')

@section('content')
    <x-hero title="Notebook++ | Create"/>
    <section class="container create-note">
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
        <form action="{{route('notes.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" name="title" placeholder="Type Title" class="input-title">
            </div>

            <div class="form-group">
                <textarea cols="5" rows="15" name="notesContent" id="editor"></textarea>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-view create-note-button" value="Create">
            </div>
        </form>
    </section>
@endsection
  <script>
    document.addEventListener('DOMContentLoaded', function () {
        ClassicEditor
            .create(document.querySelector('#editor'), {
               ckfinder: {
                uploadUrl:"{{route('ckeditor.upload',['_token'=>csrf_token()])}}",
               }
            })
            .catch(error => {
                console.error(error);
            });
    });
</script>

