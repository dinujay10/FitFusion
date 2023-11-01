<?php

// user class
class Machine {
    use Model;

    protected $table = 'machines';
    
    protected $allowedColumns = [
        'id',
        'machineType',
        'price',
        'warranty',
        'adjustability'
    ];

    public function validate($data) {
        $this->errors = [];

        // validate email
      
        // validate password
        if(empty($data['id'])) {
            $this->errors['id'] = "Id is required";
        } 
        if(empty($data['machineType'])) {
            $this->errors['id'] = "Machine type is required";
        } 
        if(empty($data['price'])) {
            $this->errors['id'] = "Price is required";
        } 
        if(empty($data['warranty'])) {
            $this->errors['id'] = "Warranty is required";
        } 
        if(empty($data['adjustabulity'])) {
            $this->errors['id'] = "Adjustability is required";
        } 

        if(empty($this->errors)) {
            return true;
        }
        return false;
    }

    public function unique($data) {
        
        $this->errors = [];
        $arr['id'] = $data['id'];
        //check unique email
        $unique = $this->first($arr);
        if(!empty($unique)) {
            $this->errors['id'] = "ID is already in use";
        } 

          

        if(empty($this->errors)) {
            return true;
        }
        return false;
    }
}

// make models for each table in DB, and add the editable columns of each