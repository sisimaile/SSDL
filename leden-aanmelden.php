<?php
include "header.php";
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
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12">


        </div>

        <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="aanmeld-box">
                    <h1>Aanmelden</h1>
                    <section id="leden-aanmaken">
                    <form action="leden-aanmelden.php" method="post">
                    
                    <div class="textbox form-group">
                        <input type="text" name="username" placeholder="gebruikersnaam">
                    </div>

                    <div class="textbox form-group">
                        <input type="text" name="password" placeholder="wachtwoord">
                    </div>

                    <div class="textbox form-group">
                        <input type="text" name="password-check" placeholder="herhaal wachtwoord">
                    </div>

                    <div class="textbox form-group">
                        <input type="text" name="email" placeholder="emailadres">
                    </div>

                    <div class="textbox form-group">
                        <input type="text" name="telefoonnummer" placeholder="telefoonnummer">
                    </div>

                    <div class="textbox form-group">
                        <input type="text" name="adres" placeholder="adres">
                    </div>

                    <div class="textbox form-group">
                        <input type="text" name="plaats" placeholder="woonplaats">
                    </div>

                    <input class="btn btn-primary" type="submit" name="submit">
                </div>
                </form>
            </section>

        </div>

        <div class="col-md-4 col-sm-4 col-xs-12">


        </div>


    </div>
</div>



</body>
