<!-- resources/views/logout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout Successful</title>
    <style>
        body {
            background: linear-gradient(to right, #43cea2, #185a9d);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            background-color: rgba(0, 0, 0, 0.3);
            padding: 20px 40px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.25);
            font-size: 2em;
            text-align: center;
        }

        a {
            margin-top: 30px;
            text-decoration: none;
            background-color: white;
            color: #185a9d;
            padding: 10px 25px;
            border-radius: 8px;
            font-weight: bold;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        a:hover {
            background-color: #185a9d;
            color: white;
        }
    </style>
</head>
<body>
    <h1>You have successfully logged out.</h1>
    <a href="{{ route('login') }}">Log In</a>
</body>
</html>
