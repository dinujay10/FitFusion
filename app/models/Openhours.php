<?php

// user class
class Openhours {
    use Model;

    protected $table = 'openhours';
    
    protected $allowedColumns = [
        'gymName',
        'openhourswf',
        'openhourswt',
        'openhourssaf',
        'openhourssat',
        'openhourssuf',
        'openhourssut'
        
    ];

    public function unique($data) {
        $this->errors = [];
        $arr['gymName'] = $data['gymName'];
        
        //check unique email
        $unique = $this->first($arr);
        if(!empty($unique)) {
            $this->errors['gymName'] = "Gym Name is already in use";
        }

        if(empty($this->errors)) {
            return true;
        }
        return false;
    }

  
}

// make models for each table in DB, and add the editable columns of each