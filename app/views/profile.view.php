<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Instructor Profile</title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/Instructorprofile.css">
</head>
<body>
<nav>
        <div class="logo">
            <p>FitFusion</p>
        </div>

        <ul>
            <li><a href="home">Home</a></li>
            <li><a href="#">AboutUs</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="login">Logout</a></li>
        </ul>
    </nav>
    <div class="container">
        <div class="card">
            <div class="profile-img">
                <img src="instructor.jpg" alt="Instructor">
            </div>
            <h1>Gym Instructor Profile</h1>
            <form>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" readonly value="John Doe">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" readonly value="john.doe@example.com">
                </div>
                <div class="form-group">
                    <label for="specialization">Specialization:</label>
                    <input type="text" id="specialization" name="specialization" readonly value="Strength Training">
                </div>
                <div class="form-group">
                    <label for="experience">Experience (years):</label>
                    <input type="number" id="experience" name="experience" readonly value="5">
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea id="description" name="description" readonly>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac justo quis sapien tincidunt vulputate.</textarea>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
