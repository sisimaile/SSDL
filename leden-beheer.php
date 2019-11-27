<?php

include 'processen/Connection.php';
include 'processen/lid.php';
include 'processen/ViewLid.php';

if (isset($_POST['liddelete'])){
    $lidID = $_POST['id'];
    $fk = $_POST['fk'];

    $delete = new lid();
    $delete->deleteLid($lidID, $fk);
}

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Leden beheer</title>
</head>
</html>

<body>
<section id="pagina-lijst">
    <?php
    $paginas = new ViewLid();
    $paginas->showAllLeden();
    ?>
</section>
</body>