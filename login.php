<?php


include "nav.php";

if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $lid = new lid();
    $lid->loginLid($username, $password);
}
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Inloggen</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <script src="https://kit.fontawesome.com/f2c75c26a9.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Neucha&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style_loginpage.css">
    <link rel="shortcut icon" type="image/png" href="images/favicon1.png">
  </head>
  <body class="hello">
      
  
 

<div class="login-box">
    <h1>Login</h1>
    <section id="pagina-form">
        <form action="login.php" method="post">
            <div class="textbox">
                <i class="fas fa-user"></i>
                <input type="text" name="username" placeholder="username">
            </div>

            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="text" name="password" placeholder="password">
             </div>
            
            <input class="btn btn-primary" type="submit" name="submit" value="submit">
            </div>
        </form>
    </section>


</body>
<?php
//include "footer.php";
?>