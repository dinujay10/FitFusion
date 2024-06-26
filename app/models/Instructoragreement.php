<?php

// user class
class Instructoragreement {
    use Model;

    protected $table = 'instructoragreement';
    
    protected $allowedColumns = [
        'id',
        'agreementurl',
        'registereddate',
        'agreementduration',
        'remainingduration',
        'iemail'
    ];

    public function validate($data) {
        $this->errors = [];

        // validate email
      
        // validate password
     
        if(empty($data['id'])) {
            $this->errors['id'] = "id is required";
        } 
        if(empty($data['iemail'])) {
            $this->errors['iemail'] = "iemail is required";
        } 
        if(empty($data['agreementurl'])) {
            $this->errors['agreementurl'] = "agreementurl is required";
        } 
        if(empty($data['registereddate'])) {
            $this->errors['registereddate'] = "registereddate is required";
        } 
        if(empty($data['agreementduration'])) {
            $this->errors['agreementduration'] = "agreementduration is required";
        } 
        // if(empty($data['remainingduration'])) {
        //     $this->errors['remainingduration'] = "remainingduration is required";
        // } 
        if(empty($this->errors)) {
            return true;
        }
        return false;
    }

    public function unique($data) {
        
        $this->errors = [];
        $arr['agreementurl'] = $data['agreementurl'];
        //check unique email
        $unique = $this->first($arr);
        if(!empty($unique)) {
            $this->errors['agreementurl'] = "agreementurl is already in use";
        } 

          

        if(empty($this->errors)) {
            return true;
        }
        return false;
    }
}

// make models for each table in DB, and add the editable columns of each