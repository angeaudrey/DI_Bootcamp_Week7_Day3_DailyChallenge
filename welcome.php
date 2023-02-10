
<?php session_start();


//stocker la valeur de la variable de la session dans "username"
$username = $_SESSION['username'];

// Si le bouton de decconnexion est activé
if(isset($_POST['logout'])){
  // Detruire la session courante
  session_destroy();
  // Redirection vers la page login
  header("Location: login.php");
  exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h3>Welcome <?= $_SESSION["username"] ?> </h3>
</body>
</html>