<?php

include "header.php";
include "nav.php";

include 'processen/Connection.php';
include 'processen/class_activiteit.php';
include 'processen/viewActivity.php';

if (isset($_POST['activiteitdelete'])){
    $activiteitid = $_POST['id'];

    $activiteit = new ActivityValidator();
    $activiteit->deleteActiviteit($activiteitid);
}

?>

<div class="container">
    <div class="row">
        <?php
            $activiteit = new viewActivity();
            $activiteit->showAllActivities();
        ?>
    </div>
</div>

<?php
include "footer.php";
?>



