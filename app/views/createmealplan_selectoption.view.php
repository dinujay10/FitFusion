<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Management System</title>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/CreatedworkoutplansStyle.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        nav {
            padding: 10px;
            background-color: orange;
            width: 100%;
            height: 100px;
        }


        .logo p {
            font-size: 30px;
            font-weight: bold;
            font-family: Georgia, 'Times New Roman', Times, serif;
            float: left;
            color: rgb(16, 4, 4);
            text-transform: uppercase;
            letter-spacing: 1.5px;
            cursor: pointer;
        }

        ul {
            float: right;
            list-style: none;
            margin-top: 10px;
        }

        li {
            display: inline-block;
            margin-right: 20px;
        }

        li a {
            font-size: 16px;
            text-transform: uppercase;
            color: white;
            text-decoration: none;
        }

        li a:hover {
            color: brown;
            transition: all 0.4s ease 0s;
        }

        .container {
            width: 80%;
            overflow: hidden;
            display: flex;
            margin-top: 200px;
            justify-content: space-between;
        }

        .box {
            flex: 1;
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
        }

        .box:hover {
            transform: scale(1.05);
        }

        .box h2 {
            color: #333;
        }

        .box.weight-gain {
            background-color: #a5d6a7;
        }

        .box.weight-loss {
            background-color: #ef9a9a;
        }
    </style>
</head>

<body>
    <nav>
        <div class="logo">
            <p>FitFusion</p>
        </div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">AboutUs</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="login">Logout</a></li>
        </ul>
    </nav>

    <div class="container">
        <a href="weightgainplan">
            <div class="box weight-gain" onclick="selectDietPlan('weight-gain')">
                <h2>Diet Plans for Weight Gain</h2>
                <!-- Add any additional content or links related to weight gain plans here -->
            </div>
        </a>

        <div class="box weight-loss" onclick="selectDietPlan('weight-loss')">
            <h2>Diet Plans for Weight Loss</h2>
            <!-- Add any additional content or links related to weight loss plans here -->
        </div>
    </div>

    <script>
        function selectDietPlan(planType) {
            // You can add logic here to handle the selection of diet plans
            console.log('Selected Diet Plan:', planType);
            // Redirect or perform other actions based on the selected plan
        }
    </script>

</body>

</html>