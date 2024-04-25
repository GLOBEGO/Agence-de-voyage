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
        echo '<script language="javascript">';
        echo 'alert("message successfully sent")';
        echo '</script>';
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
            Account settings
        </h4>
        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list"
                            href="#account-general">General</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-change-password">Change password</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account-general">
                            <hr class="border-light m-0">
                            <div class="card-body">
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
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-change-password">
                            <div class="card-body pb-2">
                                <div class="form-group">
                                    <label class="form-label">Ancien mot de passe</label>
                                    <input type="password" class="form-control " name="oldmp" >
                                </div>
                                <div class="form-group">
                                    <label class="form-label">nouveau mot de passe</label>
                                    <input type="password" class="form-control " name="nwmp" >
                                </div>
                                <div class="form-group">
                                    <label class="form-label">confirmer mot de passe</label>
                                    <input type="password" class="form-control " name="confmp" >
                                </div>
                            </div>
                        </div>
                        
                        </div>
                        
                        </div>
                        
                        
                            </div>
                        </div>
                        <div class="text-right mt-3">
                            <button type="button" class="btn btn-primary">Save changes</button>&nbsp;
                            <button type="button" class="btn btn-default">Cancel</button>
                        </div>
                    </div>
        
    </div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">

    </script>
</body>

</html>
