<?php
class Showmealitems
{
    use Controller;

    public function index()
    {
        $data = [];
        $foodItemModel = new Fooditem();

        // Retrieve only 'mealitem' and 'calories' columns from the database
        $mealItems = $foodItemModel->findAll();

        $data['mealItems'] = $mealItems;

        $this->view('showmealitems', $data);
    }
}
