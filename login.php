<?php

include 'processen/Connection.php';
include 'processen/lid.php';

if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $lid = new lid();
    $lid->loginLid($username, $password);
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>login</title>
</head>

<body>
<section id="pagina-form">
    <form action="login.php" method="post">
        <input type="text" name="username">
        <input type="text" name="password">
        <input type="submit" name="submit" value="submit">
    </form>
</section>
</body>
</html>
