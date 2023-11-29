<header class="header">
    <div class="logo">
        <a href="/"><span>Notebook++</span></a>
    </div>
    
    <nav class="navigation">
        <ul>
            @auth
            <li class={{request()->is('/') ? 'nav-active': ''}}><a href="{{route('/')}}" >Home</a></li>
            <li class={{request()->is('notes*') ? 'nav-active': ''}}><a href="{{route('notes')}}">My Notes</a></li>
            <li class={{request()->is('category*') ? 'nav-active': ''}}><a href="{{route('category.create')}}"> Category </a></li>
            <li class="circle"><a href="{{route('create_notes')}}"> + </a></li>

            <div class="logout">
                <form action="{{route('logout')}}">
                    <input type="submit" value="Logout">
                </form>
            </div> 
            @else
            <div class="logout">
                <a href="{{route('login')}}">
                    <input type="submit" value="Login">
                </a>
            </div> 
            
            <div class="logout">
                <a href="{{route('signup')}}">
                    <input type="submit" value="Signup">
                </a>
            </div> 
                     
            @endauth
        </ul>  
    </nav>
</header>