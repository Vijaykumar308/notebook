<x-html_structure title="Login">
    <section class="main-wrapper"> 
         <div class="wrapper">
             <form action="{{route('register.submit')}}" method="POST">
                @csrf
                 <h1>Register</h1>
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
                     <input type="text" placeholder="Full Name" name="full_name" value="Vijay Kumar" required>
                     <i class='bx bxs-user'></i>
                 </div>

                 <div class="input-box">
                    <input type="text" placeholder="Username" name="username" value="mr.vijay.kumar308" required>
                    <i class='bx bxs-user'></i>
                </div>

                 <div class="input-box">
                     <input type="password" placeholder="password" value="123456" name="password" required>
                     <i class='bx bxs-lock-alt'></i>
                 </div>

                <div class="input-box">
                    <input type="text" placeholder="Confirm Password" value="123456" name="confirmPassword" required>
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