<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<div class="center">
    <h1>Sign Up</h1>
    <form action="insert_data_signup.php" method="POST" enctype="multipart/form-data">
        <div class="txt_field">
            <input type="text" name="username" required>
            <span></span>
            <label>Username</label>
        </div>
        <div class="txt_field">
            <input type="email" name="email" required>
            <span></span>
            <label>Email</label>
        </div>
        <div class="txt_field">
            <input type="password" name="password" required>
            <span></span>
            <label>Passsword</label>
        </div>
        <input type="submit" name="signup" value="Sign Up">
    </form>
</div>
</body>
</html>
