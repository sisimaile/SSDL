<<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Neucha&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style_testcardstyling.css">
    
</head>
  <body>
  </html>
    <div class="col-12">
        <h1>title</h1>
    </div>
</div>

<p>tekst</p>


<div class="row">
    <div class="col">
            <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
</div>


<!--UIT CLASS VIEW SPONSORS EN FUNCTION GET ALL SPONSORS-->$_POST
'<div class="container ">
                        <div class="row paddng my-4">
                            <div class="col-lg-6 text-center">
                            <img src="images/' . $sponsor['Lid_logo'] . '" alt="sponsor logo">
                            </div>
                            <div class="col-md-12 col-lg-6 text-center">
                                <h2>' . $value['Lid_gebruikersnaam'] . '</h2>
                                <p>' . $sponsor['Lid_tekst'] . '</p>
                                <br>
                                <form action="sponsorenpage.php" method="post">
                                    <input type="submit" class="btn btn-primary mx-2" name="deleteSponsor" value="delete sponsor">
                                    <input type="hidden" name="id" value="' . $value['Lidgegevens_ID'] . '"> 
                                </form>
                                <form action="sponsor_wijzigen.php" method="get">
                                    <input type="submit" class="btn btn-primary mx-2" name="wijzigSponsor" value="wijzig sponsor">
                                    <input type="hidden" name="id" value="' . $value['Lidgegevens_ID'] . '">
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    
    
<div class="card get-all-sponsors" style="width: 25rem;">
<img src="images/' . $sponsor['Lid_logo'] . '" alt="sponsor logo" class="card-img-top">
  <div class="card-body ">
    <h3 class="card-title get-all-sponsors-title">' . $value['Lid_gebruikersnaam'] . '</h3>
    <p class="card-text get-all-sponsors-p">' . $sponsor['Lid_tekst'] . '</p>
    <form action="sponsorenpage.php" method="post">
                                    <input type="submit" class="btn btn-primary mx-2" name="deleteSponsor" value="delete sponsor">
                                    <input type="hidden" name="id" value="' . $value['Lidgegevens_ID'] . '"> 
                                </form>
                                <form action="sponsor_wijzigen.php" method="get">
                                    <input type="submit" class="btn btn-primary mx-2" name="wijzigSponsor" value="wijzig sponsor">
                                    <input type="hidden" name="id" value="' . $value['Lidgegevens_ID'] . '">
    </form>
  </div>
</div>



<!--CLASS VIEW SPONSORFUNCTION VIEW ONE SPONSOR-->
'<div class="container content ">
                        <div class="row paddng my-4">
                            <div class="col-lg-6 view-one-sponsor-box">
                                <p>Naam: ' . $value['Lid_gebruikersnaam'] . ' </p> 
                                <p>Adres: ' . $sponsor['Lid_adres'] . ' </p>
                                <p>Plaats: ' . $sponsor['Lid_plaats'] . ' </p> 
                                <p>Email: ' . $sponsor['Lid_email'] . ' </p> 
                                <p>Telefoonnummer: ' . $sponsor['Lid_telefoonnummer'] . ' </p>
                                <p>Tekst: ' . $sponsor['Lid_tekst'] . ' </p>
                                <p>Logo: ' . $sponsor['Lid_logo'] . ' </p>
                            </div>
                        </div>
                    </div>



<!--ACTIVITEITEN PAGINA FUNCTIE SHOWACTIVITEITENPAGINA-->
<div class="row">
    <div class="col">
            <div class="card" style="width: 25rem;">
            <div class="card-body showactiviteitenpPagina">
            <h5 class="card-title showactiviteitenpPagina-h5">Card title</h5>
            
            <p class="card-text showactiviteitenpPagina-tekst">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
</div>


<!--SHOW ALL ACTIVITIES (op pagina viewActivity)-->

"<div class='col-md-3'>
                  <div class='card' style='width: 18rem;'>
                    <img src= 'images/" . $data['Activiteit_image'] . "' class='card-img-top' alt='...'>
                    <div class='card-body'>
                        <h5 class='card-title'>" . $data['Activiteit_Naam'] . "</h5>
                        <h6 class='card-subtitle mb-2 text-muted'>" . $data['Activiteit_Datum'] . "</h6>
                        <p class='card-text'>" . $data['Activiteit_Beschrijving'] . "</p>
                        <p class='card-text'>plaats: " . $data['Activiteit_Plaats'] . " - adres: " . $data['Activiteit_Straat'] . " " . $data['Activiteit_Huisnummer'] . " - Postcode: " . $data['Activiteit_Postcode'] . "</p>
                    </div>
                    <div>
                        <form action='activiteit-change.php' method='get'>
                            <input type='submit' value='change' name='activiteitupdate'>
                            <input type='hidden' name='id' value='" . $data['Activiteit_ID'] . "'>
                        </form>
                    </div>
                    <div>
                        <form action='activiteiten-overzichtpage.php' method='post'>
                            <input type='submit' value='delete' name='activiteitdelete'>
                            <input type='hidden' name='id' value='" . $data['Activiteit_ID'] . "'>
                        </form>
                    </div>
                    <div>
                        <form action='activiteiten-aanmelden.php' method='post'>
                            <input type='submit' value='aanmelden' name='aanmelden'>
                            <input type='hidden' name='id' value='" . $data['Activiteit_ID'] . "'>
                        </form>
                        "; $activiteitid = $data['Activiteit_ID'];
                            $aantaldeelnemers = $this->getallDeelnemers($activiteitid);
                            echo 'aantal deelnemers: ' . $aantaldeelnemers . "                  <!--ADD p TAG FOR STYLING-->
                    </div>
                    </div>
                </div>";



                <!--WHAT IS SHOULD BE-->$_POST
                <div class="card" style="width: 25rem;">
                    <div class="card-body">
                        <h5 class="card-title">" . $data['Activiteit_Naam'] . "</h5>
                        <h6 class="card-subtitle mb-2 text-muted">" . $data['Activiteit_Datum'] . "</h6>
                        <p class="card-text">" . $data['Activiteit_Beschrijving'] . "</p>
                        <p class="card-text">plaats: " . $data['Activiteit_Plaats'] . " - adres: " . $data['Activiteit_Straat'] . " " . $data['Activiteit_Huisnummer'] . " - Postcode: " . $data['Activiteit_Postcode'] . "</p>
                       <div class="activiteitupdaten">
                           <form action='activiteit-change.php' method='get'>
                            <input type='submit' value='change' name='activiteitupdate'>
                            <input type='hidden' name='id' value='" . $data['Activiteit_ID'] . "'>
                        </form>
                    </div>

                    <div class="activiteitdeleten">
                        <form action='activiteiten-overzichtpage.php' method='post'>
                                <input type='submit' value='delete' name='activiteitdelete'>
                                <input type='hidden' name='id' value='" . $data['Activiteit_ID'] . "'>
                            </form>
                    </div>

                    <div class="aanmeldenactiviteit">
                    <form action='activiteiten-aanmelden.php' method='post'>
                            <input type='submit' value='aanmelden' name='aanmelden'>
                            <input type='hidden' name='id' value='" . $data['Activiteit_ID'] . "'>
                        </form>
                    </div>

                        <div class="aantaldeelnemers">
                        $activiteitid = $data['Activiteit_ID'];
                            $aantaldeelnemers = $this->getallDeelnemers($activiteitid);
                            echo <p>'aantal deelnemers: ' . $aantaldeelnemers . " </p>  
                        </div>
                    </div>
                    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>



