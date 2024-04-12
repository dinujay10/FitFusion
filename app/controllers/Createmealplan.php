<?php

class Createmealplan
{
    use Controller;

    public function index()
    {
        $data = [];
        $foodItemModel = new FoodItem();
        $data['mealItems'] = $foodItemModel->getAllFoodItems();
        $this->view('createmealplan', $data);
    }

    public function submitMealPlan()
    {
        // Assuming you have a MealPlan model
        $mealPlanModel = new MealPlan();

        // Assuming form data is posted and contains meal information
        $formData = $_POST;

        // Insert the submitted meal data into the database
        $mealPlanModel->insert($formData);

        // Retrieve the updated meal plan content
        $data = [];
        $foodItemModel = new FoodItem();
        $data['mealItems'] = $foodItemModel->getAllFoodItems();

        // Display the updated content
        $this->view('duplicated_content', $data);
    }

}
