<section class="note">
    {{-- {{asset($featuredImage)}} --}}
    <div class="note-image">
        {{-- <img src="{{asset('images/bg3.jpg')}}" alt="txt" srcset=""> --}}
        @if (asset($featuredImage)!= "http://127.0.0.1:8000/")
            <img src="{{asset($featuredImage)}}" alt="full image" srcset="">
        @else
            <img src="http://127.0.0.1:8000/media/default_featured_image.png" alt="" srcset="">
        @endif
    </div>
    <div class="note-content">
        <div>
            {{-- <h1 class="notes-title">Demo Project: Laravel Personal Blog </h1> --}}
            <h1 class="notes-title">{{$title}}</h1>
            <span class="created-on">{{date('Y-m-d', strtotime($created))}}</span>
        </div>
            {{-- <p class="note-description">{{$body}}</p> --}}
            <p class="note-description">{!! html_entity_decode($body)!!}</p>

        <div class="notes-options">
            {{-- <form action="/notes/laravel-project" class="operation-button"> --}}
            {{-- <a href="notes/laravel-project"> --}}
            <a href="{{url('notes',$slug)}}">
                <button class="btn btn-view">
                    <i class="fa-solid fa-book-open"></i>
                    Read
                </button>
            </a>
            {{-- </form> --}}

            <a href="{{route('edit_notes')}}">
                <button class="btn btn-update">
                    <i class="fa-solid fa-pen-to-square"></i>
                    Edit
                </button>
            </a>

            <form action="/notes/laravel-project" method="POST">
                <button class="btn btn-delete">
                    <i class="fa-solid fa-trash"></i>
                    Delete</button>
            </form>
        </div>
    </div>
</section>