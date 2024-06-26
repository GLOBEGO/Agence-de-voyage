<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="payement.css">
</head>
<body>
<h2>Payment</h2>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="#" method="post">
          <div class="col-50">
            <label for="fname">Carte Acceptés</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
            </div>
            <label for="nom_sur_carte">Nom sur Carte</label>
            <input type="text" id="nom_sur_carte" name="nom_sur_carte" placeholder="John More Doe">
            <label for="numero_carte">Numero de Carte</label>
            <input type="text" id="numero_carte" name="numero_carte" placeholder="xxxx-xxxx-xxxx-xxxx">
            <label for="exp_mois">Exp mois</label>
            <input type="text" id="exp_mois" name="exp_mois" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="exp_annee">Exp annee</label>
                <input type="text" id="exp_annee" name="exp_annee" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
        <input type="submit" value="Continue to checkout" name="btn" class="btn">
      </form>
    </div>
  </div>
</div>
<?php
// Connexion à la base de données
$mysqli = new mysqli("localhost", "root", "", "agence_de_voyage");

// Vérification de la connexion
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Vérification si les données POST sont présentes
if (!empty($_POST['nom_sur_carte']) && !empty($_POST['numero_carte']) && !empty($_POST['exp_mois']) && !empty($_POST['exp_annee']) && !empty($_POST['cvv'])) {
  // Récupération des données du formulaire
  $cardname = $_POST['nom_sur_carte'];
  $cardnumber = $_POST['numero_carte'];
  $expmonth = $_POST['exp_mois'];
  $expyear = $_POST['exp_annee'];
  $cvv = $_POST['cvv'];

  // Insertion des données dans la base de données
  $stmt = $mysqli->prepare("INSERT INTO paiment(nom_sur_carte, numero_carte, exp_mois, exp_annee, cvv) VALUES (?, ?, ?, ?, ?)");
  $stmt->bind_param("ssssi", $cardname, $cardnumber, $expmonth, $expyear, $cvv);
  $stmt->execute();

  // Fermeture de la connexion
  $stmt->close();
} else {
  // Afficher un message d'erreur ou effectuer une action appropriée si les données ne sont pas présentes ou sont vides
  if(isset($_POST['btn'])){
    echo "Tous les champs requis ne sont pas remplis.";}
}

$mysqli->close();
?>
<script>
document.addEventListener('DOMContentLoaded', function() {
  const form = document.querySelector('form');
  const nomCarte = document.getElementById('nom_sur_carte');
  const numeroCarte = document.getElementById('numero_carte');
  const expMois = document.getElementById('exp_mois');
  const expAnnee = document.getElementById('exp_annee');
  const cvv = document.getElementById('cvv');

  form.addEventListener('submit', function(event) {
    event.preventDefault(); // Empêche l'envoi du formulaire par défaut

    // Vérification du nom sur la carte
    if (nomCarte.value.trim() === '') {
      alert('Veuillez entrer le nom sur la carte');
      nomCarte.focus();
      return false;
    }

    // Vérification du numéro de carte
    const cardRegex = /^[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}$/;
    if (!cardRegex.test(numeroCarte.value.trim())) {
      alert('Veuillez entrer un numéro de carte valide');
      numeroCarte.focus();
      return false;
    }

    // Vérification de la date d'expiration
    const expMoisValue = expMois.value.trim();
    const expAnneeValue = expAnnee.value.trim();
    const currentDate = new Date();
    const currentYear = currentDate.getFullYear();
    const currentMonth = currentDate.getMonth() + 1; // Les mois sont indexés à partir de zéro
    if (parseInt(expAnneeValue) < currentYear || (parseInt(expAnneeValue) === currentYear && getMonthIndex(expMoisValue) < currentMonth)) {
      alert('La carte est expirée');
      expMois.focus();
      return false;
    }

    // Vérification du CVV
    if (cvv.value.trim().length !== 3) {
      alert('Veuillez entrer un code CVV valide');
      cvv.focus();
      return false;
    }

    // Si toutes les vérifications passent, le formulaire est soumis
    alert('Paiement réussi !');
    form.submit();
  });

  // Fonction pour obtenir l'index du mois
  function getMonthIndex(monthName) {
    const months = ['janvier', 'fevrier', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'decembre'];
    return months.indexOf(monthName.toLowerCase()) + 1;
  }
});
</script>
</body>
</html>


