<x-html_structure title="Login">
   <section class="main-wrapper"> 
        <div class="wrapper">
            <form action="">
                <h1>Login</h1>
                <div class="input-box">
                    <input type="text" placeholder="Username" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me
                    </label>
                    <a href="#">Forgot password?</a>
                </div>
                <div style="display:flex; gap:2rem">
                    <button type="submit" class="btn">Login</button>
                    <button type="submit" class="btn">Login with Guest</button>
                </div>
                <div class="register-link">
                    <p>Dont't have an account? <a href="/register">
                            Register
                    </a></p>
                </div>
                
            </form>
        </div>
   </section>
</x-html_structure>