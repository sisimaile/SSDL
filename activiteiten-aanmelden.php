<?php

include 'processen/Connection.php';
include 'processen/class_activiteit.php';
include_once 'processen/lid.php';

if (isset($_POST['submit'])){
    $naam = $_POST['naam'];
    $email = $_POST['email'];
    $telefoonnummer = $_POST['telefoonnummer'];
    $plaats = $_POST['plaats'];
    $adres = $_POST['adres'];
    $activiteitid = $_POST['activiteitid'];

    $lid = new lid();
    $lid->addDeelnemer($naam, $email, $telefoonnummer, $plaats, $adres, $activiteitid);
}

?>

<!doctype html>
<html lang="en">
<head>
    <title>aanmelden activiteit</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/f2c75c26a9.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Neucha&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style_activiteiten-aanmelden.css">
    <link rel="shortcut icon" type="image/png" href="images/favicon1.png">
</head>
<body>
<div class="container-fluid">

    <div class="aanmeld-box">
        <h1>Aanmelden</h1>
        <section id="aanmelden-activiteit">
            <form action="activiteiten-aanmelden.php" method="post">

                <div class="textbox-activiteit-aanmelden form-group">
                    <input type="text" name="naam" placeholder="naam">
                </div>

                <div class="textbox-activiteit-aanmelden form-group">
                    <input type="text" name="email" placeholder="emailadres">
                </div>

                <div class="textbox-activiteit-aanmelden form-group">
                    <input type="text" name="telefoonnummer" placeholder="telefoonnummer">
                </div>

                <div class="textbox-activiteit-aanmelden form-group">
                    <input type="text" name="adres" placeholder="adres (straat - huisnummer - postcode)">
                </div>

                <div class="textbox-activiteit-aanmelden form-group">
                    <input type="text" name="plaats" placeholder="woonplaats">
                </div>

                <input type="hidden" name="activiteitid" value="<?php echo $_POST['id']; ?>">

                <input class="btn btn-primary knop-lid-aanmelden-activiteit" id="lid-aanmelden" type="submit" name="submit">
            </form>
        </section>
    </div>

</div>

</body>