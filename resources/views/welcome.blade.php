<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url(https://images.unsplash.com/photo-1581323463131-327617e6962c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80) no-repeat;
            background-size: cover;
            background-position: center;
        }

        span {
            color: #fff;
            font-size: large;
            display: flex;
            justify-content: center;
            padding: 10px 0 10px 0;
        }

        header {
            color: #fff;
            font-size: 30px;
            display: flex;
            justify-content: center;
            padding: 10px 0 10px 0;
        }

        .wrapper {
            width: 420px;
            box-shadow: rgba(255, 255, 255, .2);
            color: #0a0909;
            border-radius: 10px;
            padding: 30px 40px;
        }

            .wrapper h1 {
                font-size: 30px;
                text-align: center;
            }

            .wrapper .input-box {
                position: relative;
                width: 100%;
                height: 50px;
                margin: 30px 0;
            }

        .input-box input {
            width: 100%;
            height: 100%;
            color: #fff;
            border: none;
            outline: none;
            border-color: whitesmoke;
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.4);
            font-size: 16px;
            color: #030303;
            padding: 20px 45px 20px 20px;
        }

            .input-box input::placeholder {
                color: #080808;
            }

        .input-box i {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 20px;
            color:white;
        }

        .wrapper .btn {
            width: 100%;
            height: 45px;
            background: #490703;
            border: none;
            outline: none;
            border-radius: 40px;
            box-shadow: 0 0 10px rgba(255, 255, 255, .1);
            cursor: pointer;
            font-size: 16px;
            color: #ffffff;
            font-weight: 600;
        }

        </style>
</head>
    <!-------- Formulario --------------------------------->
    
    <body class="antialiased">
        <div class="wrapper">
            <form id="login-form">
                <div class="top-header">
                    <span>Bienvenido</span>
                    <header>Inicia sesion</header>
                </div>
                <div class="input-box">
                    <input type="text" id="user" placeholder="usuario" required>
                    <i class='bx bxs-user-pin'></i>
                </div>
                <div class="input-box">
                    <input type="password" id="password" placeholder="contraseña" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <button type="submit" id="login-button" class="btn">Acceder</button>
            </form>
        </div>
    </body>
</html>
