<?php
session_start();
include "../admin/functions.php";
$conn = connect();
if(!empty($_POST)){
    $email = $_POST['email'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $phone = $_POST['phone'];
    $old = $_POST['oldmp'];
    $new = $_POST['nwmp'];
    $conf = $_POST['confmp'];
    if($new == $conf && $_SESSION['mp'] == $old){
        $requette = "UPDATE users SET nom = '$nom', prenom = '$prenom', phone = '$phone', mp = '$new' WHERE email = '$email'";
        $res = $conn->query($requette);
        echo '<div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Well done!</h4>
        <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
        <hr>
        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
      </div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="profile.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container light-style flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-4">
            Parametres de Profile
        </h4>
        <div class="card overflow-hidden">
            <div class="card-body">
                <form action="profile.php" method="post">
                    <div class="form-group">
                        <label class="form-label">E-mail</label>
                        <input type="email" class="form-control mb-1"  name="email" value="<?php echo $_SESSION['email']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Nom</label>
                        <input type="text" class="form-control mb-1" name="nom" value="<?php echo $_SESSION['nom']; ?>">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Prenom</label>
                        <input type="text" class="form-control" name="prenom" value="<?php echo $_SESSION['prenom']; ?>">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Phone</label>
                        <input type="text" class="form-control" name="phone" value="<?php echo $_SESSION['phone']; ?>">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Ancien mot de passe</label>
                        <input type="password" class="form-control mb-1" name="oldmp" >
                    </div>
                    <div class="form-group">
                        <label class="form-label">nouveau mot de passe</label>
                        <input type="password" class="form-control mb-1" name="nwmp" >
                    </div>
                    <div class="form-group">
                        <label class="form-label">confirmer mot de passe</label>
                        <input type="password" class="form-control mb-1" name="confmp" >
                    </div>
                    <div class="text-right mt-3">
                        <button type="submit" class="btn btn-primary">Sauvgarder</button>&nbsp;
                        <button type="reset" class="btn btn-default">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
        
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
