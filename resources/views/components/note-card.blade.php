<section class="note">
    <div class="note-image">
        <img src="{{asset('images/bg3.jpg')}}" alt="txt" srcset="">
    </div>
    <div class="note-content">
        <div>
            <h1 class="notes-title">Demo Project: Laravel Personal Blog </h1>
            <span class="created-on">2023-11-12</span>
        </div>
            <p class="note-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni voluptates facilis laboriosam, eveniet minima expedita blanditiis. Odit, quasi quia voluptatum magnam aliquid adipisci expedita nihil quis!</p>

        <div class="notes-options">
            {{-- <form action="/notes/laravel-project" class="operation-button"> --}}
            <a href="notes/laravel-project">
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