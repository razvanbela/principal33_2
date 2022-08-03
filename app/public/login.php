<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<div class="center">
    <h1>Login</h1>
    <form action="insert_data_login.php" method="POST" enctype="multipart/form-data">
        <div class="txt_field">
            <input type="email" name="email">
            <span></span>
             <label>Email</label>
        </div>
        <div class="txt_field">
            <input type="password" name="password">
            <span></span>
            <label>Passsword</label>
        </div>
            <input type="submit" value="Login">
        <div class="signup_link">
            <a href="signin.php">Sign In</a>
        </div>

    </form>
</div>
</body>
</html>