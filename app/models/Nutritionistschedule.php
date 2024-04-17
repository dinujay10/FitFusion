<?php

// user class
class Nutritionistschedule
{
    use Model;

    protected $table = 'nutritionistschedule';

    protected $allowedColumns = [
        'id',
        'instructoremail',
        'date',
        'timeslot',
        'memberemail',
        'membername',
        'memberage',
        'goal',
        'illness',
        'status'
    ];

    public function validate($data)
    {
        $this->errors = [];

        // validate email

        // validate password
      
        return false;
    }

    public function unique($data)
    {

        $this->errors = [];
        $arr['id'] = $data['id'];
        //check unique email
        $unique = $this->first($arr);
        if (!empty($unique)) {
            $this->errors['id'] = "ID is already in use";
        }



        if (empty($this->errors)) {
            return true;
        }
        return false;
    }
}

// make models for each table in DB, and add the editable columns of each