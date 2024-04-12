<?php

class MealPlan
{
    use Model;

    protected $table = 'mealplan';

    protected $allowedColumns = [
        'day',
        'mealtime',
        'mealitem',
        'calories',
        // Add other relevant columns for the meal plan table
    ];

    public function insert($data)
    {
        // Add your custom logic for inserting data into the "mealplan" table
        $keys = implode(',', array_keys($data));
        $values = ':' . implode(',:', array_keys($data));
        $query = "INSERT INTO $this->table ($keys) VALUES ($values)";

        $this->query($query, $data);
    }

    // Add other relevant methods for the "mealplan" table as needed
}

?>