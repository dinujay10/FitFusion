<?php

class Fooditem
{
    use Model;

    protected $table = 'mealitems';

    protected $allowedColumns = [
        'mealitem',
        'calories',
    ];

    public function validate($data)
    {
        $this->errors = [];

        // Validate meal item
        if (empty($data['mealitem'])) {
            $this->errors['mealitem'] = "Food item is required";
        }

        // Validate calories
        if (empty($data['calories'])) {
            $this->errors['calories'] = "Calories is required";
        }

        return empty($this->errors);
    }

    public function unique($data)
    {
        $this->errors = [];

        // Check if the mealitem already exists in the database
        $existingItem = $this->first(['mealitem' => $data['mealitem']]);

        if (!empty($existingItem)) {
            $this->errors['mealitem'] = "This food item already exists";
        }

        if (empty($this->errors)) {
            return true; // Unique
        }

        return false; // Not unique
    }

    // Example method to fetch all food items from the database
    public function getAllFoodItems($columns = ['mealitem', 'calories'])
    {
        return $this->findAll();
    }

    // Example method to fetch a food item by ID
    public function getFoodItemById($id, $columns = ['mealitem', 'calories'])
    {
        $query = "SELECT " . implode(",", $columns) . " FROM $this->table WHERE id = :id";
        $data = ['id' => $id];

        return $this->get_row($query, $data);
    }
    // private function validateInput($data)
    // {
    //     // Example: Validate numeric input
    //     if (!is_numeric($data['calories'])) {
    //         echo 'Invalid calories value';
    //         return;
    //     }

    //     // Add more validation as needed
    // }
}

?>