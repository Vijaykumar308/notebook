<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@boxicons/css/boxicons.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .wrapper {
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            width: 100%;
            max-width: 500px; /* Set your preferred max-width */
        }

        form {
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333333;
        }

        .input-box {
            position: relative;
            margin-bottom: 20px;
        }

        input[type='text'], input[type='password'] {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #dddddd;
            border-radius: 4px;
            outline: none;
            font-size: 16px;
        }

        i {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            color: #666666;
        }

        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        label {
            margin-bottom: 0;
            font-size: 14px;
            color: #666666;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        .btn-container {
            display: flex;
            gap: 10px;
        }

        .btn {
            flex: 1;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            color: #ffffff;
        }

        .btn-primary {
            background-color: #007bff;
        }

        .btn-secondary {
            background-color: #28a745;
        }

        .register-link {
            text-align: center;
            color: #666666;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <form action="{{ route('loginAction') }}">
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
                <input type="text" placeholder="Username" name="username" value="mr.vijay.kumar308" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="password" value="123456" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox"> Remember me</label>
                <a href="#">Forgot password?</a>
            </div>
            <div class="btn-container">
                <button type="submit" class="btn btn-primary">Login</button>
                <a href="{{ route('login.guest') }}">
                    <button type="button" class="btn btn-secondary">Login as Guest</button>
                </a>
            </div>
            <div class="register-link">
                <p>Don't have an account? <a href="{{ route('signup') }}">Register</a></p>
            </div>
        </form>
    </div>
</body>
</html>
