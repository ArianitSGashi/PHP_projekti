<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            margin-bottom: 20px;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
        }

        .form-group .links {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .form-group .links a {
            color: #555;
            text-decoration: none;
        }

        .footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
        }

        .footer p {
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>Programming Training Company</h1>
    </div>
    <div class="container">
        <h2>Login</h2>
        <form action="/login" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <div class="links">
                    <a href="/forgot-password">Forgot Password?</a>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" value="Login">
                <div class="links">
                    <p>Don't have an account? <a href="/register">Register here</a></p>
                </div>
            </div>
        </form>
    </div>
    <div class="footer">
        <p>&copy; 2023 Programming Training Company. All rights reserved.</p>
    </div>
</body>

</html>