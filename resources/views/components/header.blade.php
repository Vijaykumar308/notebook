<header class="header">
    <div class="logo">
        <a href="/home"><span>Notebook++</span></a>
    </div>
   
    <nav class="navigation">
        <ul>
            <li class={{request()->is('/') ? 'nav-active': ''}}><a href="{{route('/')}}" >Home</a></li>
            <li class={{request()->is('notes*') ? 'nav-active': ''}} ><a href="{{route('notes')}}">My Notes</a></li>
            <div class="logout">
                <form action="">
                    <input type="submit" value="Login">
                </form>
            </div> 

            <div class="logout">
                <form action="">
                    <input type="submit" value="Signup">
                </form>
            </div> 
            @auth
                <li class="circle"><a href="#"> + </a></li>
                <div class="logout">
                    <form action="">
                        <input type="submit" value="Logout">
                    </form>
                </div>      
            @endauth


        </ul>  
    </nav>
</header>