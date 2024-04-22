<?php
include ("functions.php");


?>

<?php
session_start();
$user= true;
if (isset($_SESSION['Name'])){

    
}

$user = true;
if (!empty($_POST)){ // click sur le button sauvgarder
$user = connectadmin($_POST);
if( is_array ($user)&&count($user) > 0 ){ // utilisateur connectee
Session_start();
$_SESSION['Name'] = $user['Name'];
$_SESSION['email'] = $user['email'];
$_SESSION['password'] = $user['password'];

header('location:home.php'); // redirection vers la page profile
}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>Admin</title>
    <link rel="stylesheet" href="login_style.css">

</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="home.php"  method="post">
                    <h2>Admin | Login</h2>
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="text"   name="Name" required>
                        <label>Username</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password"  required>
                        <label>Password</label>
                    </div>
                  
                    <button type="submit">Login</button>
                   
                </form>
            </div>
        </div>
    </section> 
   
</body>
</html>
<?php


?>