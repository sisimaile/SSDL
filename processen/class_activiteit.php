<?php

include_once "Connection.php";

Class ActivityValidator extends Connection {
    private $data;
    private $errors = [];
    private static $fields = ['titelactiviteit' , 'datumactiviteit', 'straatactiviteit', 'huisnummeractiviteit', 'postcodeactiviteit', 'plaatsactiviteit', 'beschrijvingactiviteit', 'image'];

    public function __construct($post_data) {
        $this->data = $post_data;
    }

    public function validateForm() {
        foreach(self::$fields as $field) {
            if(!array_key_exists($field, $this->data)) {
                trigger_error("field is not present in data");
                return;
            }
        }

        $this->validateTitelActiviteit();
        $this->validateStraat();
        $this->validateHuisnummer();
        $this->validatePlaats();
        $this->validateBeschrijving();
        $this->addToDb();
        return $this->errors;
    }

    private function validateTitelActiviteit() {
        $val = trim($this->data['titelactiviteit']);

        if(empty($val)) {
            $this->addError('titelactiviteit', 'titel cannot be empty');
        } else {
            if(!preg_match('/^[a-zA-Z0-9]{4,50}$/', $val)) {
                $this->addError('titelactiviteit', 'titel must be 4-50 chars & alpahnumeric');
            }
        }
    }

    private function validateStraat() {
        $val = trim($this->data['straatactiviteit']);

        if(empty($val)) {
            $this->addError('straatactiviteit', 'straat cannot be empty');
        } else {
            if(!preg_match('/^[a-zA-Z]{1,50}$/', $val)) {
                $this->addError('straatactiviteit', 'straat must be 1 - 50 chars & alpahnumeric');
            }
        }

    }

    private function validateHuisnummer() {
        $val = trim($this->data['huisnummeractiviteit']);

        if(empty($val)) {
            $this->addError('huisnummeractiviteit', 'huisnummer cannot be empty');
        } else {
            if(!preg_match('/^[a-zA-Z0-9]{1,6}$/', $val)) {
                $this->addError('huisnummeractiviteit', 'huisnummer must be 1 - 6 chars & alpahnumeric');
            }
        }

    }
    
    private function validatePlaats() {
        $val = trim($this->data['plaatsactiviteit']);

        if(empty($val)) {
            $this->addError('plaatsactiviteit', 'plaats cannot be empty');
        } else {
            if(!preg_match('/^[a-zA-Z]{1,50}$/', $val)) {
                $this->addError('plaatsactiviteit', 'plaats must be 1 - 50 chars');
            }
        }
    }

    private function validateBeschrijving() {
        $val = trim($this->data['beschrijvingactiviteit']);

        if(empty($val)) {
            $this->addError('beschrijvingactiviteit', 'beschrijving cannot be empty');
        } else {
            if(!preg_match('/^[a-zA-Z0-9]{1,9999}$/', $val)) {
                $this->addError('beschrijvingactiviteit', 'beschrijving must be 1 - 999 chars & alpahnumeric');
            }
        }

    }
    
    public function addToDb() { 

        $conn = $this->connect();

        $titelactiviteit = $this->data['titelactiviteit'];
        $datumactiviteit = $this->data['datumactiviteit'];
        $straatactiviteit = $this->data['straatactiviteit'];
        $huisnummeractiviteit = $this->data['huisnummeractiviteit'];
        $postcodeactiviteit = $this->data['postcodeactiviteit'];
        $plaatsactiviteit = $this->data['plaatsactiviteit'];
        $beschrijvingactiviteit = $this->data['beschrijvingactiviteit'];
        $imageactiviteit = $this->data['image'];

        var_dump ($titelactiviteit);
        $stmt = "INSERT INTO `activiteit` (Activiteit_Naam, Activiteit_datum, Activiteit_Straat, Activiteit_Huisnummer,Activiteit_postcode, Activiteit_Plaats,
         Activiteit_Beschrijving, Activiteit_image) VALUES ('$titelactiviteit', '$datumactiviteit', '$straatactiviteit', '$huisnummeractiviteit', '$postcodeactiviteit', '$plaatsactiviteit', '$beschrijvingactiviteit', '$imageactiviteit')";
        $result = $conn->query($stmt);

        if($result) {
            echo "activiteit met succes aangemaakt";
        } else{
            echo "sql error:" . $conn->error;
            return;
        }
    }

    private function addError($key, $val) {
        $this->errors[$key] = $val;

    }

    public function retrieveactivity() {
        $sql = "SELECT * FROM activiteit";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;

        if($numRows > 0){
            while($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
    }
}

