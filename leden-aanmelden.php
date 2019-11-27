<?php

include 'processen/Connection.php';
include 'processen/lid.php';

if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $passwordcheck = $_POST['password-check'];
    $email = $_POST['email'];
    $telefoonnummer = $_POST['telefoonnummer'];
    $plaats = $_POST['plaats'];
    $adres = $_POST['adres'];

    $lid = new lid();
    $lid->addLid($username, $password, $passwordcheck, $email, $telefoonnummer, $plaats, $adres);
}

?>


<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>leden aanmelden</title>
</head>
</html>

<body>
<section id="leden-aanmaken">
    <form action="leden-aanmelden.php" method="post">

        <input type="text" name="username" placeholder="gebruikersnaam">
        <input type="text" name="password" placeholder="wachtwoord">
        <input type="text" name="password-check" placeholder="herhaal wachtwoord">
        <input type="text" name="email" placeholder="emailadres">
        <input type="text" name="telefoonnummer" placeholder="telefoonnummer">
        <input type="text" name="plaats" placeholder="woonplaats">
        <input type="text" name="adres" placeholder="adres">
        <input type="submit" name="submit">

    </form>
</section>
</body>
