<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/app.min.css">
    <title>ADMIN</title>
</head>

<body>
    <h1>WELCOME</h1>
    <form method='post' action="inscription.php">
        <div>
            <label for="email">email</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label for="pseudo">pseudo</label>
            <input type="text" name="pseudo" required>
        </div>
        <div>
            <label for="password">mot de passe</label>
            <input type="password" name="password" required>
        </div>
        <div>
        <button type="submit">Envoyer</button>
        </div>
    </form>
</body>

</html>