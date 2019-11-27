<?php

include "header.php";
//include "nav.php";
include 'processen/Connection.php';
include 'processen/lid.php';

if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $lid = new lid();
    $lid->loginLid($username, $password);
}
?>

<div class="login-box">
    <h1>Login</h1>
    <section id="pagina-form">
        <form action="login.php" method="post">
            <div class="textbox">
                <i class="fas fa-user"></i>
                <input type="text" name="username">
            </div>

            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="text" name="password">
             </div>
            
            <input class="btn btn-primary" type="submit" name="submit" value="submit">
            </div>
        </form>
    </section>



<?php
//include "footer.php";
?>