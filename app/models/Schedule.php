<?php

// user class
class Schedule {
    use Model;

    protected $table = 'schedule';
    
    protected $allowedColumns = [
        'id',
        'date',
        'startingtime',
        'machine',
        'gymemail',
        'memberemail',
        'status'
        
    ];

    public function unique($data) {
        $this->errors = [];
        
        if(!empty($unique)) {
        
        }

        if(empty($this->errors)) {
            return true;
        }
        return false;
    }

  
}

// make models for each table in DB, and add the editable columns of each