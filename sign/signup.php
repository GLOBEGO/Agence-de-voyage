<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="sign.css">
    <title>Sign UP</title>
</head>    
<body>
    <?php
    include "../admin/functions.php";
    if (!empty($_POST)){
        ajoutClient($_POST);
        
    }

    ?>
    <div class="sign-box">
        <h1>Sign Up</h1>
        <form action="signup.php" method="post" onsubmit="return checksubmit()">
            <label for="nom">Nom</label><br>
            <input type="text" name="nom" id="nom" required >
            <label for="prenom">Prenom</label>
            <input type="text" name="prenom" id="prenom" required >
            <label for="tel">Tel</label>
            <input type="text" name="tel" id="tel" maxlength="8" pattern="[0-9]{8}"><br>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="foulan.foulani@gmail.com" required ><br>
            <label for="password">Mot de passe</label><br>
            <input type="password" id="password" name="password" required minlength="6" ><br>
            <label for="conf">Confirmer Mot de Passe</label>
            <input type="password" id="conf" name="conf" required oninput="return check()" minlength="6">
            <p id="msg"></p><br>
            <input type="submit" value="Sign Up" id="sub"><br>
            <a href="../login/login.php">already have an account ?</a><br>
            <script src="sign.js"></script>
        </form>
    </div>
</body>
</html>