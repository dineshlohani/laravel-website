<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/fav.png') }}">
    <title>Shinjiru Admin Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: url('https://wallpapers.com/images/hd/1920x1080-aesthetic-glrfk0ntspz3tvxg.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
        }

        .login-box {
            background: rgba(0, 0, 0, 0.75);
            padding: 40px;
            border-radius: 10px;
            text-align: center;
            width: 300px;
        }

        .login-box h2 {
            margin: 0 0 20px;
            color: #fff;
        }

        .login-box .user-box {
            position: relative;
        }

        .login-box .user-box input {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            background: transparent;
        }

        .login-box .user-box label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: 0.5s;
        }

        .login-box .user-box input:focus ~ label,
        .login-box .user-box input:valid ~ label {
            top: -20px;
            left: 0;
            color: #ff0057;
            font-size: 12px;
        }

        .login-box button {
            background: #ff0057;
            border: none;
            outline: none;
            color: white;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
            width: 100%;
            transition: background 0.3s ease;
        }

        .login-box button:hover {
            background: #ff3369;
        }

        .login-box .logo {
            background-color: #fff;
            padding: 15px;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .login-box .logo img {
            width: 200px;
        }

        .login-box .copyright {
            margin-top: 20px;
            font-size: 12px;
            color: #fff;
        }

        .back-home-button {
            display: block;
            background: #fff;
            color: #ff0057;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px;
            font-size: 16px;
            width: 150px;
            text-align: center;
            transition: background 0.3s ease;
        }

        .back-home-button:hover {
            background: #ff0057;
            color: #fff;
        }
    </style>
</head>
<body>

<a href="{{ url('/') }}" class="back-home-button">Back to Home</a>

<div class="login-box">
    <div class="logo">
        <img src="assets/images/logo/logo.png" alt="User Icon">
    </div>
    <h2>ADMIN LOGIN</h2>
    <form action="{{ route('admin.login') }}" method="POST">
        @csrf
        <div class="user-box">
            <input type="text" name="username" placeholder="" required="">
            <label>Username</label>
        </div>
        <div class="user-box">
            <input type="password" name="password" placeholder="" required="">
            <label>Password</label>
        </div>
        <button type="submit">Login</button>
        <div class="copyright">
            © 2024 Shinjiru educational. All rights reserved 
        </div>
    </form>
</div>

</body>
</html>
