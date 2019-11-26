<?php

include_once 'processen/Pagina.php';

if (isset($_POST['submit'])){
    $titel = $_POST['titel'];
    $message = $_POST['tekst'];
    $image = $_POST['image'];

    $pagina = new Pagina();
    $pagina->addPaginas($titel, $message, $image);
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Pagina toevoegen</title>
</head>

<body>
<section id="pagina-form">
    <form action="pagina-toevoegen.php" method="post">
        Titel:<br>
        <input type="text" name="titel"><br>
        tekst:<br>
        <textarea name="tekst"></textarea><br>
        <input type="text" name="image"> <br><br>
        <input type="submit" value="Submit" name="submit">

    </form>
</section>
</body>
</html>
