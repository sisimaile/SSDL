<?php

include 'processen/Connection.php';
include 'processen/Pagina.php';
include 'processen/ViewPagina.php';


if (isset($_POST['paginachange'])){
    $paginaID = $_POST['id'];
    $paginatitel = $_POST['titel'];
    $paginatekst = $_POST['tekst'];
    $paginaimage = $_POST['image'];

    $change = new Pagina();
    $change->changepagina($paginaID, $paginatitel, $paginatekst, $paginaimage);
}

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Change Pagina</title>
</head>
</html>

<body>
<section id="pagina-content">
    <h3>Huidige gegevens</h3>
    <?php
        $selectedPagina = new ViewPagina();
        $selectedPagina->showOnePagina($_GET["id"]);
    ?>

    <h3>Nieuwe gegevens</h3>
    <?php
    echo "<form action='pagina-change.php' method='post'>
        Titel:<br>
        <input type='text' name='titel'><br>
        tekst:<br>
        <textarea name='tekst'></textarea><br>
        <input type='text' name='image'> <br><br>
        <input type='submit' value='change' name= 'paginachange'>
        <input type='hidden' value='" . $_GET['id'] . "' name='id'>
    </form>"
    ?>
</section>
</body>
