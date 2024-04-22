<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workout Categories</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        
nav {
    background-color:  rgb(226, 139, 33);
    font-family:Georgia, 'Times New Roman', Times, serif;
    font-weight: 600;
    padding: 10px;
    color: rgb(15, 14, 14);
    display: flex;
    justify-content: space-between;
    align-items:center;
}

.logo {
    font-size: 1.5em;
}

ul {
    list-style-type: none;
    display: flex;
    gap: 20px;
}

li {
    margin-right: 10px;
}

a {
    text-decoration: none;
    color: black;
    font-weight: bold;
}
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 100px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .button {
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: none;
            border-radius: 5px;
            background-color: rgb(226, 139, 33);
            color: #fff;
            font-size: 16px;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color:   #555;
        }
    </style>
</head>
<body>
<nav>
        <div class = "logo">
            <p>FitFusion</p>
        </div>

        <ul>
            <li><a href ="#">Home</a></li>
            <li><a href ="#">AboutUs</a></li>
            <li><a href ="#">Services</a></li>
            <li><a href ="login">Logout</a></li>
        </ul>
    </nav>


    <div class="container">
        <h1>Workout Categories</h1>
     <button class="button" onclick="window.location.href='cardio';">Cardio</button>
        <button class="button" onclick="window.location.href='Strength';">Strength</button>
        <button class="button" onclick="window.location.href='Flexibility';">Flexibility</button>
    </div>
</body>
</html>
