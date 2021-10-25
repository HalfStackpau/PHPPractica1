<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dashboard</h1>
    <a href="?url=home">Home</a>
    <a href="?url=login">Login</a>
    <a href="?url=perfil">Perfil</a>
    <a href="?url=register">Register</a>
    <a href="?url=dashboard">Dashboard</a>
    <?= $_COOKIE['email']?>
    <?= $_COOKIE['rol']?>
</body>
</html>