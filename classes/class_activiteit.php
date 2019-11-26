<?php



Class ActivityValidator extends db {
    private $data;
    private $errors = [];
    private static $fields = ['titelactiviteit' , 'datumactiviteit', 'straatactiviteit', 'huisnummeractiviteit', 'postcodeactiviteit', 'plaatsactiviteit', 'beschrijvingactiviteit' ];

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
        $this->validatePostcode();
        $this->validatePlaats();
        $this->validateBeschrijving();
        $this->retrieveFromDb();
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
    
    private function validatePostcode() {
        $val = trim($this->data['postcodeactiviteit']);

        if(empty($val)) {
            $this->addError('postcodeactiviteit', 'postcode cannot be empty');
        } else {
            if(!preg_match('/^[a-zA-Z0-9]{1,10}$/', $val)) {                                        /*ALS ER TIJD OVER IS VOER EEN CHECK UIT DAT HET 4 LETTERS ZIJN en 2 GETALLEN*/
                $this->addError('postcodeactiviteit', 'wut'); 
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
    
    protected function retrieveFromDb() { //get all users
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

    private function addError($key, $val) {
        $this->errors[$key] = $val;

    }
}

