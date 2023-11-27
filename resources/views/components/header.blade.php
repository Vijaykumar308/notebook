<header class="header">
    <div class="logo">
        <a href="/"><span>Notebook++</span></a>
    </div>
    
    <nav class="navigation">
        <ul>
            <li class={{request()->is('/') ? 'nav-active': ''}}><a href="{{route('/')}}" >Home</a></li>
            <li class={{request()->is('notes*') ? 'nav-active': ''}} ><a href="{{route('notes')}}">My Notes</a></li>
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
            @auth
                <li class="circle"><a href="{{route('create_notes')}}"> + </a></li>
                <div class="logout">
                    <form action="">
                        <input type="submit" value="Logout">
                    </form>
                </div>      
            @endauth


        </ul>  
    </nav>
</header>