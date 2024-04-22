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
        <form action="signup.php" method="post">
            <div class="sexe"><label for="M">MR</label>
            <input type="radio" id="M" name="sexe" value="M">
            <label for="F">MRS</label>
            <input type="radio" id="F" name="sexe" value="F"><br></div>
            <label for="nom">Nom</label><br>
            <input type="text" name="nom" id="nom" required >
            <label for="prenom">Prenom</label>
            <input type="text" name="prenom" id="prenom" required >
            <label for="tel">Tel</label>
            <input type="text" name="tel" id="tel" maxlength="10" required pattern="[0-9]{8}"><br>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="foulan.foulani@gmail.com" required ><br>
            <label for="password">Mot de passe</label><br>
            <input type="password" id="password" name="password" required ><br>
            <label for="conf">Confirmer Mot de Passe</label>
            <input type="password" id="conf" name="conf" required oninput="return check()" >
            <p id="msg"></p><br>
            <input type="submit" value="Sign Up" id="sub"><br>
            <a href="../login/login.php">already have an account ?</a><br>
            <script src="sign.js"></script>
        </form>
    </div>
</body>
</html>