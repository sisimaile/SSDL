<?php

include 'processen/Connection.php';
include 'processen/Pagina.php';
include 'processen/ViewPagina.php';

$selectedPagina = new ViewPagina();
$selectedPagina->showOnePagina($_GET["id"]);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>BasePagina</title>
</head>
</html>

<body>
<section id="pagina-content">

</section>
</body>
