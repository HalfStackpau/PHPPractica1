<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Register</h1>
    <a href="?url=home">Home</a>
    <a href="?url=login">Login</a>
    <a href="?url=perfil">Perfil</a>
    <a href="?url=register">Register</a>
    <a href="?url=dashboard">Dashboard</a>
    <div>
        <form action="?url=registerAction" method="POST">
            <input name="email" type="email" placeholder="email"/>
            <input name="password" type="text" placeholder="password"/>
            <input name="rol" type="text" placeholder="rol"/>
            <input type="submit"/>
        </form>
    </div>
</body>
</html>