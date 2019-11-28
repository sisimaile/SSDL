<?php

include 'processen/Connection.php';
include 'processen/lid.php';
include 'processen/ViewLid.php';

if (isset($_POST['liddelete'])){
    $lidgegevensID = $_POST['gegevensid'];

    $delete = new lid();
    $delete->deleteLid($lidgegevensID);
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