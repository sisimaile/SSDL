<?php

include "header.php";
include "nav.php";
include "processen/class_view_sponsor.php";
include_once "processen/class_sponsor.php";

if (isset($_POST['deleteSponsor'])){
    $sponsorid = $_POST['id'];

    $delete = new Sponsor();
    $delete->deleteSponsor($sponsorid);
}
?>

<!--SPONSOREN OVERZICHT-->
<div class="content">
<div class="container-fluid padding">
    <div class="row text-center">
        <div class="col-12 my-5">
            <h1 class="display-4">Meet the sponsors</h1>
        </div>
        
    </div>
</div>



<!--TWO COLUMN SECTION sponsoren-->
<div id="sponsors">
    <?php
        $sponsor = new view();
        $sponsor->getallSponsors();
    ?>
</div>


</div>







<?php

include "footer.php";
?>