<style>
    .ck-editor__editable_inline {
        height: 40vh;
        resize: vertical;
    }
</style>
@extends('master')
@section('title','create')

@section('content')
    <x-hero title="Notebook++ | Create"/>

    <section class="container create-note">
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