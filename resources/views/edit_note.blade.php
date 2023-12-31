@extends('master')
@section('title','create')

@section('content')
    <x-hero title="Notebook++ | Update"/>

    <section class="container create-note">
        <form action="" method="post">
            <div class="form-group">
                <input type="text" placeholder="Type Title" value="{{$note[0]->title}}" class="input-title">
            </div>

            <div class="form-group">
                <textarea cols="5" rows="15" id="editor">{{$note[0]->body}}</textarea>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-view create-note-button" value="Update">
            </div>
        </form>
    </section>

@endsection
  <script>
    document.addEventListener('DOMContentLoaded', function () {
        ClassicEditor
            .create(document.querySelector('#editor'), {
                height: '400px'
            })
            .catch(error => {
                console.error(error);
            });
    });
</script>