<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Select Email Option</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
    background-color: #f2f2f2;
  }
  h1 {
    text-align: center;
    color: #333;
  }
  form {
    max-width: 400px;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  label {
    display: block;
    margin-bottom: 10px;
    color: #666;
  }
  select {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-bottom: 20px;
  }
  input[type="submit"] {
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  input[type="submit"]:hover {
    background-color: #45a049;
  }
</style>
</head>
<body>
  <h1>Assign Workout To a Member</h1>
  <form method="POST">
    <label for="emailOption">Select Email Option:</label>
    <select id="emailOption" name="emailOption">
      
      <?php
            foreach($data['mememail'] as $x){
                echo '
                    <option value="'.$x->memberemail.'">'.$x->memberemail.'</option>
                ';
            }
      ?>
    </select>
    <input type="hidden" value="<?php if(isset($data['id'])){echo $data['id'];}?>" name="id" id="id">
    
    <input type="submit" value="Submit">
  </form>
</body>
</html>
