<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <style>
        .center-div {
            text-align: center;
        }
    </style>
</head>
<body bgcolor="green">
<div class="center-div">
<form action="game.php" method="POST">
    <h1>Please login in</h1>
    <p>If you don't have account message me here: yourmail@example.org</p>
    <p>  </p>
    <p>  </p>
    <h3>Username</h3>
    <input type="text" name="username" />
    <p> </p>
    <p> </p>
    <h3>Password</h3>
    <input type="password" name="pass" />
    <p> </p>
    <input type="submit" value="Login" />
</form>
</div>
</body>
</html>
