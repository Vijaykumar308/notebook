<x-html_structure title="Login">
    <section class="main-wrapper"> 
         <div class="wrapper">
             <form action="">
                 <h1>Register</h1>
                 <div class="input-box">
                     <input type="text" placeholder="Full Name" required>
                     <i class='bx bxs-user'></i>
                 </div>

                 <div class="input-box">
                    <input type="text" placeholder="Username" required>
                    <i class='bx bxs-user'></i>
                </div>

                 <div class="input-box">
                     <input type="password" placeholder="password" required>
                     <i class='bx bxs-lock-alt'></i>
                 </div>

                <div class="input-box">
                    <input type="text" placeholder="Confirm Password" required>
                    <i class='bx bxs-user'></i>
                </div>
                 
                 <button type="submit" class="btn">Create Account</button>
                 <div class="register-link">
                     <p>Already have an account? <a href="/login">
                            Login
                         </a></p>
                 </div>
             </form>
         </div>
    </section>
 </x-html_structure>