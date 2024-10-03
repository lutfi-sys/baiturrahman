<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
    <style>
        *{box-sizing: border-box}
        @keyframes rotate {
            100% {
                background-position: 15% 50%;
            }
        }
        :root{
            --color-primary: #014f55;
        }

        body{
            display: grid;
            place-items: center;
            margin: 0;
            height: 100vh;
            padding: 0 24px;
            background-color: var(--color-primary);
            background-image: url(bg_hp.png);
            background-repeat: no-repeat;
            background-size: cover;
            color: #f9f9f9;
            animation: rotate 6s infinite alternate linear;
        }
        
        .login-card {
            position: relative;
            z-index: 3;
            width: 100%;
            margin: 0 20px;
            padding: 70px 30px 44px ;
            border-radius: 20px;
            background: rgb(24 21 36 / 66%);
            backdrop-filter: blur(10px);
            text-align: center;
        }
        .login-card > h2 {
            font-size: 36px;
            font-weight: 400;
            margin: 0 0 12px;
        }
        .login-card > h3 {
            color: rgb(225 225 225 / 38%);
            margin: 0 0 48px;
            font-weight: 400;
            font-size: 16px;
            
        }
        .login-form{
            width: 100%;
            margin: 0;
            display: grid;
            gap: 16px;

        }
        .login-form > :is(input, button){
            height: 56px;
            border-radius: 6px;
            border: 0;
        } 
        .login-form > input {
            color: rgb(225 225 225 / 96%);
            background: rgb(225 225 225 / 8%);
            font-family: inherit;
            font-size: 16px;
            padding: 0 16px;
        }
        .login-form > input::placeholder{
            color: rgb(225 225 225 / 38%);
        }
        .login-form > button {
            cursor: pointer;
            height: 56px;
            padding: 0 16px;
            background: #014f55;
            color: #f9f9f9;
            border: 0;
            font-family: inherit; 
            font-size: 18px;
            font-weight: 400;
            text-align: center;
            transition: all 0.375s;
        }
        .login-form > a{
            color: var(--color-primary);
            font-size: 16px;
            text-align: left;
            text-decoration: none;
            margin-bottom: 30px;
        }

        @media(width >= 448px){
            .login-card {
                margin: 0;
                width: 70px;
                min-width: 400px;
            }
        }

        @media(width >= 628px){
            .login-card{
                position: fixed;
                top: 0;
                right: 0;
                bottom: 0;
                padding: 0 44px;
                width: 400px;
                max-width: 400px;
                min-width: auto;
                display: flex;
                border-radius: 0;
                flex-direction: column;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <div class="login-card">
        <h2>Administrator</h2>
        <h3>Masukkan Username dan Password</h3>

        @if(session('error'))
            <div class="alert alert-danger">
                <b>Opps!</b> {{session('error')}}
            </div>
            @endif

        <form action="{{ route('login') }}" class="login-form" method="post">
        @csrf
            <input type="email" name="email" class="form-control" placeholder="Email" required="">
            <input type="password" name="password" class="form-control" placeholder="Password" required="">
            <a href="#">Lupa kata sandi</a>
            <button type="submit"> Login</button>
        </form>
    </div>
</body>
</html>