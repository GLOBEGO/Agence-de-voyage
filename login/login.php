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
        $user = false;
        include "../admin/functions.php";
        if(!empty($_POST)){
            $user = connectuser($_POST);
            if(count($user)>0){
                header('Location: ../index/index.html');
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
            <input type="checkbox" id="remember-me" name="remember-me">
            <label for="remember-me">Remember me</label><br>
            <input type="submit" value="Login"><br>
            <a href="#">Oublie Mot de Passe?</a><br>
            <p>Don't have an account? <a href="../sign/signup.php">Sign up</a></p>
        </form>
    </div>
</body>
</html>