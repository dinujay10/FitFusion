<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Items</title>
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

        #food-form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }

        .input-row {
            display: flex;
            align-items: center;
            margin: 10px;
        }

        .input-box {
            margin-right: 10px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 200px;
        }

        #add-btn {
            cursor: pointer;
            font-size: 20px;
            background-color: #4CAF50;
            color: white;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: background-color 0.3s ease;
        }

        #add-btn:hover {
            background-color: #45a049;
        }

        #submit-btn {
            margin-top: 20px;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        #submit-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

    <header>Add Food Items</header>

    <form id="food-form" method="POST">
        <?php if (!empty($errors)): ?>
            <div class="alert">
                <?= implode("<br>", $errors) ?>
            </div>
        <?php endif; ?>

        <div class="input-row" id="original-row">
            <input type="text" class="input-box" name="mealitem[]" placeholder="Food Item">
            <input type="text" class="input-box" name="calories[]" placeholder="Calories">
            <div class="add-btn" onclick="duplicateRow()">+</div>
        </div>

        <!-- Add a container for cloned rows -->
        <div id="cloned-rows-container"></div>

        <button type="submit" id="submit-btn">Submit</button>

        <script>
            function duplicateRow() {
                var originalRow = document.getElementById('original-row');
                var clonedRow = originalRow.cloneNode(true);

                // Clear the content of input boxes in the cloned row
                clonedRow.querySelectorAll('.input-box').forEach(function (input) {
                    input.value = '';
                });

                // Append the cloned row to the container
                document.getElementById('cloned-rows-container').appendChild(clonedRow);
            }
        </script>


</body>

</html>