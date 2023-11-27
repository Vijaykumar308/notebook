<x-html_structure title="Login">
   <section class="main-wrapper"> 
        <div class="wrapper">
            <form action="">
                <h1>Login</h1>
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <div class="input-box">
                    <input type="text" placeholder="Username" value="mr.vijay.kumar308" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="password" value="123456" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me
                    </label>
                    <a href="#">Forgot password?</a>
                </div>
                <div style="display:flex; gap:2rem">
                    <button type="submit" class="btn">Login</button>
                    <a href="{{route('login.guest')}}">
                        <button type="button" class="btn">Login as Guest</button>
                    </a>
                </div>
                <div class="register-link">
                    <p>Dont't have an account? <a href="{{route('signup')}}">
                            Register
                    </a></p>
                </div>
                
            </form>
        </div>
   </section>
</x-html_structure>