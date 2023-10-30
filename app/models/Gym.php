<?php

// user class
class Gym {
    use Model;

    protected $table = 'gym';
    
    protected $allowedColumns = [
        'name',
        'description',
        'location',
        'openhours',
        'equipment',
        'facilities',
        'email'
    ];

    public function validate($data) {
        $this->errors = [];

        // validate gym name
        if(empty($data['name'])) {
            $this->errors['name'] = "A gym name is required";
        }

        // validate description
        if(empty($data['description'])) {
            $this->errors['description'] = "A description for your gym is required";
        }

        // validate location
        if(empty($data['location'])) {
            $this->errors['email'] = "The location of your gym is required";
        }

        // validate openhours
        if(empty($data['openhours'])) {
            $this->errors['openhours'] = "Open hours of your gym is required";
        }

        // validate equipment
        if(empty($data['equipment'])) {
            $this->errors['equipment'] = "Equipment available in your gym is required";
        }

        // validate email
        if(empty($data['email'])) {
            $this->errors['email'] = "Email is required";
        } else {
            if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $this->errors['email'] = "Email is not valid";
            }
        }

        if(empty($this->errors)) {
            return true;
        }
        return false;
    }

    public function unique($data) {
        $this->errors = [];
        $arr['email'] = $data['email'];
        
        //check unique email
        $unique = $this->first($arr);
        if(!empty($unique)) {
            $this->errors['email'] = "Email is already in use";
        }

        if(empty($this->errors)) {
            return true;
        }
        return false;
    }
}

// make models for each table in DB, and add the editable columns of each