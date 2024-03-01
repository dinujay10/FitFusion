<?php

class Addfooditems
{
    use Controller;

    public function index()
    {
        // Add your authentication logic here if needed

        $data = [];
        $foodItemModel = new FoodItem();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $mealItems = $_POST['mealitem'];
            $calories = $_POST['calories'];

            // Validate and insert the food items
            $isValid = true;

            // Loop through the arrays and validate each set of values
            foreach ($mealItems as $key => $mealItem) {
                $foodItemData['mealitem'] = $mealItem;
                $foodItemData['calories'] = $calories[$key];

                if (!$foodItemModel->validate($foodItemData) || !$foodItemModel->unique(['mealitem' => $foodItemData['mealitem']])) {
                    $isValid = false;
                    // Optionally, you can collect specific errors for each row
                    // $data['row_errors'][$key] = $foodItemModel->errors;
                }
            }

            // If all rows are valid, insert them into the database
            if ($isValid) {
                foreach ($mealItems as $key => $mealItem) {
                    $foodItemData['mealitem'] = $mealItem;
                    $foodItemData['calories'] = $calories[$key];
                    $foodItemModel->insert($foodItemData);
                }
            } else {
                // If any row is invalid, set the general errors
                $data['errors'] = ['One or more rows have invalid data.'];
            }
        }

        $this->view('addfooditems', $data);
    }

    // Other methods as needed
}
