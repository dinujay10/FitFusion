<?php

// user class
class User {
    use Model;

    protected $table = 'users';
    
    protected $allowedColumns = [
        'name',
        'age'
    ];

    public function validate($data) {
        $this->errors = [];

        // validate email
        if(empty($data['email'])) {
            $this->errors['email'] = "Email is required";
        } else if {
            if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $this->errors['email'] = "Email is not valid";
            }
        }

        // validate password
        if(empty($data['password'])) {
            $this->errors['password'] = "Password is required";
        } 

        if(empty($this->errors)) {
            return true;
        }
        return false;
    }
}

// make models for each table in DB, and add the editable columns of each