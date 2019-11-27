<?php

class viewActivity extends ActivityValidator {

    public function showAllActivities () {
        $datas = $this->retrieveactivity();
        foreach ($datas as $data) {
            echo "<div class='col-md-4'>
                  <div class='card' style='width: 18rem;'>
                    <img src= 'images/img1.jpg' class='card-img-top' alt='...'>
                    <div class='card-body'>
                        <h5 class='card-title'>Sponsorloop 2019</h5>
                        <h6 class='card-subtitle mb-2 text-muted'>25-11-2019</h6>
                        <p class='card-text'>Some quick example text to build on the card title and
                        make up the bulk of the card's content.</p>
                    </div>
                </div>
                </div>";
            echo $data['Activiteit_ID'];
            echo $data ['Activiteit_Naam'];
        }
    }
}