<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="sign.css">
    <title>Sign UP</title>
</head>    
<body>
    <div class="sign-box">
        <h1>Sign Up</h1>
        <form action="/signup" method="post">
            <label for="nom">Nom</label><br>
            <input type="text" name="nom" id="nom" required>
            <label for="prenom">Prenom</label>
            <input type="text" name="prenom" id="prenom" required>
            <label for="tel">Tel</label>
            <input type="tel" name="tel" id="tel" required>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="foulan.foulani@gmail.com" required><br>
            <label for="password">Mot de passe</label><br>
            <input type="password" id="password" name="password" required><br>
            <label for="conf">Confirmer Mot de Passe</label>
            <input type="password" id="conf" name="conf" required>
            <input type="submit" value="Sign UP"><br>
            <a href="login.php">already have an account ?</a><br>
        </form>
    </div>
</body>
</html>