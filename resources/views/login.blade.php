<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #43cea2, #185a9d);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background: rgba(0, 0, 0, 0.3);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.3);
        }

        input {
            display: block;
            margin-bottom: 20px;
            padding: 10px;
            width: 100%;
            border: none;
            border-radius: 5px;
        }

        button {
            padding: 10px 20px;
            background-color: white;
            color: #185a9d;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #185a9d;
            color: white;
        }

        .error {
            color: yellow;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <h2>Login</h2>

        @if ($errors->any())
            <div class="error">{{ $errors->first() }}</div>
        @endif

        <label>Email:</label>
        <input type="email" name="email" required value="{{ old('email') }}">

        <label>Password:</label>
        <input type="password" name="password" required>

        <button type="submit">Sign In</button>
    </form>
</body>
</html>
