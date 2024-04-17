<?php

// user class
class Workoutplans {
    use Model;

    protected $table = 'workoutplans';
    
    protected $allowedColumns = [
        'id',
        'iemail',
        'maingoal',
        'workouttype',
        'traininglevel',
        'programduration',
        'daysperweek',
        'targetgender',
        'exercise',
        'machine',
        'time',
        'rest',
        'workoutname'

        
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