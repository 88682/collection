<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
</head>
<body>
<h2>Register</h2>
<form action="register_process.php" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" required minlength="5"><br><br>

    <label for="password">Password:</label>
    <input type="password" name="password" required minlength="8"><br><br>

    <input type="submit" value="Register">
    <a href="login.php" target="_blank">OR Login</a>
</form>

<style>

    body, h1, h2, p, form, input {
        margin: 0;
        padding: 0;
    }


    body {
        background-color: #f2f2f2;
        font-family: Arial, sans-serif;
        padding: 20px;
    }


    h1, h2 {
        color: #333;
    }


    a {
        color: #007bff;
        text-decoration: none;
    }


    a:hover {
        text-decoration: underline;
    }

    .container {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        margin: 20px auto;
        max-width: 400px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        text-align: center;
    }


    form {
        margin: 20px 0;
    }

    input[type="text"], input[type="password"] {
        width: 10%;
        padding: 10px;
        margin: 10px 0;
        background-color: #ffffff;
        border: none;
        border-radius: 3px;
        color: #333;
    }

    input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }

</style>

</body>
</html>
