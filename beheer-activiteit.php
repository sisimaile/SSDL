<?php 
include "processen/Connection.php";
require("processen/class_activiteit.php");
//include "test/viewActivity.php";
include "header.php";
//include "nav.php";


if(isset($_POST["activiteittoevoegen"])) {
    //validate entries
    $validation = new ActivityValidator ($_POST);
    $errors = $validation->validateForm();
    
}
?>

<!--ACTIVITEIT TOEVOEGEN-->

<div class="content container">
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
        <div class="form-group ">
            <label for="titelactiveit">titel activiteit</label>
            <input type="text" class="form-control" id="titelactiviteit" name="titelactiviteit" placeholder="Sponsorloop 2020" >
            <div class="error">
                <?php echo $errors['titelactiviteit'] ?? '' ?>
            </div>
        </div>
       
        <div class="form-group">
                <label for="datum">datum activiteit</label>
                <input type="date" class="form-control" id="datumactiviteit" name="datumactiviteit">
                <div class="error">
                    <?php echo $errors['datumactiviteit'] ?? '' ?>
                 </div>
        </div>
        
        <div class="form-row">
            <div class=" form-group col-md-6">
                <label for="straat">Straat</label>
                <input type="text" class="form-control" id="straat" name="straatactiviteit" placeholder="Europalaan">
                <div class="error">
                    <?php echo $errors['straatactiviteit'] ?? '' ?>
                 </div>
            </div>
            <div class="form-group col-md-6">
                <label for="huisnummer">Huisnummer</label>
                <input type="text" class="form-control" id="huisnummer" name="huisnummeractiviteit" placeholder="20A">
                <div class="error">
                    <?php echo $errors['huisnummeractiviteit'] ?? '' ?>
                 </div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="postcode">postcode</label>
                <input type="text" class="form-control" id="postcode" placeholder="8303 JI" name="postcodeactiviteit">
                <div class="error">
                    <?php echo $errors['postcodeactiviteit'] ?? '' ?>
                 </div>
            </div>
            <div class="form-group col-md-6">
                <label for="plaats">plaats</label>
                <input type="text" class="form-control" id="plaats" name="plaatsactiviteit" placeholder="Emmeloord">
                <div class="error">
                    <?php echo $errors['plaatsactiviteit'] ?? '' ?>
                 </div>
            </div>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="beschrijvingactiviteit"></textarea>
            <div class="error">
                    <?php echo $errors['beschrijvingactiviteit'] ?? '' ?>
                 </div>
            
        </div>

        <div class="form-group col-md-4">
            <label for="image">image</label>
            <input type="text" class="form-control" id="image" name="image" placeholder="image.file">
            <div class="error">
                <?php echo $errors['image'] ?? '' ?>
            </div>
        </div>

   <button type="submit" name="activiteittoevoegen" class="btn btn-primary">activiteit toevoegen</button>
</form>
</div>
<?php
/*
$activiteit = new viewActivity();
$activiteit->showAllActivities();
*/
?>

<?php
include "footer.php";
?>