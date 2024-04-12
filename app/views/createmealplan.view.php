<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meal Planner</title>
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

        #meal-plan {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }

        .meal-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 10px;
            background-color: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
            width: 400px;
        }

        .meal-row:hover {
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
        }

        .meal-row:not(:last-child) {
            margin-bottom: 20px;
        }

        .meal-name {
            width: 120px;
            font-weight: bold;
        }

        .food-select {
            flex: 1;
            margin-right: 10px;
        }

        .quantity-input {
            width: 70px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            text-align: center;
        }

        .add-btn {
            cursor: pointer;
            font-size: 20px;
            background-color: yellow;
            color: black;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: background-color 0.3s ease;
        }

        .add-btn:hover {
            background-color: #45a049;
        }

        #submit-btn {
            margin-top: 20px;
            margin-left: 700px;
            padding: 10px;
            background-color: yellow;
            color: black;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        #submit-btn:hover {
            color: yellow;
            background-color: black;
        }
    </style>
</head>

<body>

    <header>Monday</header>

    <form id="meal-form" onsubmit="submitForm(event)">
        <div id="meal-plan">
            <?php
            $mealTimes = ['Breakfast', 'Pre-Lunch', 'Lunch', 'Pre-Dinner', 'Dinner'];

            foreach ($mealTimes as $mealTime):
                ?>
                <div class="meal-row">
                    <div class="meal-name">
                        <?= $mealTime ?>
                    </div>
                    <div class="food-select">
                        <select>
                            <?php foreach ($mealItems as $mealItem): ?>
                                <option>
                                    <?= $mealItem->mealitem; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <input type="text" class="quantity-input" placeholder="Qty">
                    <div class="add-btn" onclick="duplicateRow(this)">+</div>
                </div>
            <?php endforeach; ?>
        </div>

        <div id="duplicate-content"></div>

        <button type="submit" id="submit-btn">Submit</button>
    </form>

    <script>
        function duplicateRow(btn) {
            var originalRow = btn.parentNode;
            var clonedRow = originalRow.cloneNode(true);
            clonedRow.querySelector('.meal-name').innerHTML = '';
            originalRow.parentNode.insertBefore(clonedRow, originalRow.nextSibling);
        }

        function submitForm(event) {
            event.preventDefault();
            fetch('controller=Createmealplan&action=submitMealPlan', {
                method: 'POST',
                body: new FormData(event.target),
            })
                .then(response => response.text())
                .then(data => {
                    document.getElementById('duplicate-content').innerHTML = data;
                    updateHeader();
                })
            //.catch(error => console.error('Error:', error));
        }

        function updateHeader() {
            var daysOfWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
            var currentHeader = document.querySelector('header').innerText;
            var currentIndex = daysOfWeek.indexOf(currentHeader);

            if (currentIndex !== -1) {
                var nextIndex = (currentIndex + 1) % daysOfWeek.length;
                document.querySelector('header').innerText = daysOfWeek[nextIndex];
            }
        }
    </script>

</body>

</html>