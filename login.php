<?php
    session_start(); // Demarrage de la session
    $submit = false;

    // soumission du formulaire
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $submit = true;
        if ($_POST["password"] == "012345" && $_POST["username"] == "ruisha") {
            $_SESSION["username"] = "ruisha";
            $_SESSION["passwsesord"] = "012345";

            var_dump("salut");

            // redirection de l'utilisateur
            header('Location: welcome.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1</title>
</head>
<body>
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="text" name="username" id="username" placeholder="username"> <br/>
        <input type="password" name="password" id="password" placeholder="password"> <br/>
        <input type="submit" value="Envohyer">
    </form>

    <!-- msg de connexion -->
    <?php if($submit): ?>
        <h3>Login incorrect </h3>
    <?php endif; ?>

</body>
</html>