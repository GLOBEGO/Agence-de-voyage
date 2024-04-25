<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>Login</title>
</head>    
<body>
    <?php
        include "../admin/functions.php";
        $error ="";
        if(!empty($_POST)){
            $user = connectuser($_POST);
            if(count($user)>0){
                session_start();
                $_SESSION['nom'] = $user['nom'];
                $_SESSION['prenom'] = $user['prenom'];
                $_SESSION['phone'] = $user['phone'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['mp'] = $user['mp'];
                header('Location: ../home/home.html');
        }
        if(!$user){
           $error = "mot de passe ou email invalide";
        }
    }
    ?>
    <div class="login-box">
        <h1>Login</h1>
        <form action="login.php" method="post">
            <label for="email">Email</label><br>
            <input type="email" id="email" name="email" placeholder="foulan.foulani@gmail.com" required ><br>
            <label for="password">Mot de Passe</label><br>
            <input type="password" id="password" name="password" required ><br>
            <span style="color:crimson;" ><?php echo $error ?></span><br>
            <input type="submit" value="Login"><br>
            <a href="../motpasse oublie/oublie.php">Oublie Mot de Passe?</a><br>
            <p>Don't have an account? <a href="../sign/signup.php">Sign up</a></p>
        </form>
    </div>
</body>
</html>