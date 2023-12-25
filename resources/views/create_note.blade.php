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
    <section class="containersssss create-note">
        <form action="{{route('notes.store')}}" method="POST" class="flex awesome-form">
            @csrf
            <div class="left-side">
                @if(Session::has('message'))
                    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                    <script>
                        console.log('session working why pop not came');
                        toastr.options = {
                            "progressBar": true,
                            "closeButton": true
                        }
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr.success("{{ Session::get('message') }}",{timeOut:1000}); 
                    </script>
                @endif

                <div class="form-group">
                    <input type="text" name="title" placeholder="Type Title" class="input-title">
                </div>

                <div class="form-group">
                    <textarea cols="5" rows="15" name="notesContent" id="editor"></textarea>
                </div>      
            </div>
            <div class="right-side">
                <div class="publish-btn-container">
                    <input type="submit" class="btn btn-view create-note-button" value="Publish">
                </div>
                <div class="input-group">
                    <select class="select-category">
                        @if(!empty($categories))
                          <option value=""> </option>
                          <option value="1">All</option>
                        @else
                          @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option> 
                          @endforeach
                        @endif
                        
                    </select>
                    <label>Select Category</label>
                </div>
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

    document.addEventListener('DOMContentLoaded', function() {
  var inputElements = document.querySelectorAll('.awesome-form .input-group input');
  inputElements.forEach(function(input) {
    input.addEventListener('focusout', function() {
      var text_val = this.value;
      if (text_val === "") {
        this.classList.remove('has-value');
      } else {
        this.classList.add('has-value');
      }
    });
  });

  var selectElement = document.querySelector('.awesome-form .input-group select');
  selectElement.addEventListener('focusout', function() {
    var text_val = this.value;
    if (text_val === "") {
      this.classList.remove('has-value');
    } else {
      this.classList.add('has-value');
    }
  });
});
</script>

