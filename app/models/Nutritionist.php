<?php

// user class
class Nutritionist
{

    use Model;

    protected $table = 'nutritionist';

    protected $allowedColumns = [
        'name',
        'username',
        'email',
        'password'
    ];


    public function validate($data)
    {
        $this->errors = [];

        // validate email
        if (empty($data['email'])) {
            $this->errors['email'] = "Email is required";
        } else {
            if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $this->errors['email'] = "Email is not valid";
            }
        }

        // validate password
        if (empty($data['password'])) {
            $this->errors['password'] = "Password is required";
        }

        if (empty($this->errors)) {
            return true;
        }
        return false;
    }

    public function unique($data)
    {
        $this->errors = [];
        $arr['email'] = $data['email'];
        //check unique email
        // echo $data[2];
        $unique = $this->first($arr);
        if (!empty($unique)) {
            $this->errors['email'] = "Email is already in use";
        }

        //check unique username
        $unique = $this->first($arr);
        if (!empty($unique)) {
            $this->errors['username'] = "Username is already in use";
        }

        if (empty($this->errors)) {
            return true;
        }
        return false;
    }


    /*




    private $db; // Assuming you have a database connection object

    public function __construct()
    {
        // Assuming you establish the database connection within the model
        $dsn = "mysql:host=localhost;dbname=fitfustion";
        $username = "root";
        $password = "";

        try {
            $this->db = new PDO($dsn, $username, $password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }


    public function getMembers()
    {
        $sql = "SELECT id, name FROM members";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getMemberAllergies($memberId)
    {
        $sql = "SELECT allergies FROM members WHERE id = :memberId";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':memberId', $memberId, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return isset($result['allergies']) ? $result['allergies'] : '';
    }

    public function createMealPlan($memberId, $mealTimes, $mealItems)
    {
        // Implement logic to insert meal plan into the database
        $sql = "INSERT INTO meal_plans (member_id, meal_time, meal_item) VALUES (:memberId, :mealTime, :mealItem)";
        $stmt = $this->db->prepare($sql);

        foreach ($mealTimes as $index => $mealTime) {
            $stmt->bindParam(':memberId', $memberId, PDO::PARAM_INT);
            $stmt->bindParam(':mealTime', $mealTime, PDO::PARAM_STR);
            $stmt->bindParam(':mealItem', $mealItems[$index], PDO::PARAM_STR);
            $stmt->execute();
        }
    }
    */


}

// make models for each table in DB, and add the editable columns of each