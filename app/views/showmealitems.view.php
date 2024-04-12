<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Meal Items</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            font-size: 24px;
        }

        #meal-items-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }

        strong {
            font-weight: bold;
        }
    </style>
    <!-- Add your other styles or external stylesheets here -->
</head>

<body>

    <header>Show Meal Items</header>

    <div id="meal-items-container">
        <h2>Meal Items</h2>
        <ul>
            <?php foreach ($mealItems as $item): ?>
                <li>
                    <strong>Meal Item:</strong>
                    <?= $item->mealitem ?><br>
                    <strong>Calories:</strong>
                    <?= $item->calories ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- Add other content or scripts as needed -->

</body>

</html>