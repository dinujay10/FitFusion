<?php

// user class
class Nutritionistagreement
{
    use Model;

    protected $table = 'nutritionistagreement';

    protected $allowedColumns = [
        'id',
        'agreementurl',
        'registereddate',
        'agreementduration',
        'nemail'
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