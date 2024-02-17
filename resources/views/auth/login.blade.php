<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #3498db;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <form action="{{route('login-user')}}" method="post">
        @if(Session::has('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div> 
        @endif 
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{Session::get('fail')}}</div> 
        @endif  
        @csrf
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" >
        <span class="text-danger">@error('email'){{$message}}@enderror</span>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span class="text-danger">@error('password'){{$message}}@enderror</span>

        <button type="submit">Login</button>
    </form>
</body>
</html>
