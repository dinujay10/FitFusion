<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/Member/main-template.css">

    <!-- Why doesnt this work??? -->
    <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/Member/body-template.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
    
    <div class="main-container">
        <div class="side-bar-container">
            <div class="logo-tab">
                FITFUSION
            </div>
            <ul class="side-bar-content">
                
                <li class="current-side-bar-tile">
                    <div class="sb-tab-content">
                        <span class="material-symbols-outlined">
                            dashboard
                        </span>
                    </div>
                    <div class="sb-tab-content">
                        Dashboard
                    </div>
                </li>

                <a class="side-bar-tile-link" href="scheduleinterface">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                calendar_month
                            </span>
                        </div>
                        <div class="sb-tab-content">
                            My Schedule
                        </div>
                    </li>
                </a>

                <a class="side-bar-tile-link" href="#">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                fitness_center
                            </span>
                        </div>
                        <div class="sb-tab-content">
                            Workout Plan
                        </div>
                    </li>
                </a>

                <a class="side-bar-tile-link" href="memberviewmealplan">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                skillet
                            </span>
                        </div>
                        <div class="sb-tab-content">
                            Meal Plan
                        </div>
                    </li>
                </a>

                

                <a class="side-bar-tile-link" href="makeComplaint">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                mood_bad
                            </span>
                        </div>
                        <div class="sb-tab-content">
                            Complaints
                        </div>
                    </li>
                </a>

                <a class="side-bar-tile-link" href="makereviewgym">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                editor_choice
                            </span>
                        </div>
                        <div class="sb-tab-content">
                            Reviews
                        </div>
                    </li>
                </a>

                <a class="side-bar-tile-link" href="logout">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                logout
                            </span>
                        </div>
                        <div class="sb-tab-content">Logout</div>
                    </li>
                </a>

            </ul>
        </div>
        <div class="body-container">
            <div class="body-header">
                <div class="pfp">
                    <!-- LET THE MEMBER UPLOAD A PFP, OR KEEP A DEFAULT IMAGE -->
                    <img src="#" alt="">
                </div>
                <div class="welcome-user">
                    <!-- TODO - SHOW LOGGED IN MEMBER'S NAME -->
                    Welcome, 
                    <?php
                    echo $data['firstname'] . " " . $data['lastname'];
                    ?>
                </div>
            </div>
            <div class="body-content">
            <div class="content-tile-column">
                    <form class="tall-tile" method="POST">
                        <div class="edit-bar">
                            <div class="edit-label">First Name</div>
                            <div class="edit-value"><input class="edit-value-input" type="text" name="name" value=
                                "<?php
                                echo $data['firstname'];
                                ?>">
                            </div>
                        </div>
                        <div class="edit-bar">
                            <div class="edit-label">Last Name</div>
                            <div class="edit-value"><input class="edit-value-input" type="text" name="lastname" value=
                                "<?php
                                echo $data['lastname'];
                                ?>">
                            </div>
                        </div>
                        <div class="edit-bar">
                            <div class="edit-label">Age</div>
                            <div class="edit-value"><input class="edit-value-input" type="text" name="age" value=
                                "<?php
                                echo $data['age'];
                                ?>">
                            </div>
                        </div>
                        <div class="edit-bar">
                            <div class="edit-label">Height(cm)</div>
                            <div class="edit-value"><input class="edit-value-input" type="text" name="height" value=
                                "<?php
                                echo $data['height'];
                                ?>">
                            </div>
                        </div>
                        <div class="edit-bar">
                            <div class="edit-label">Weight(kg)</div>
                            <div class="edit-value"><input class="edit-value-input" type="text" name="weight" value=
                                "<?php
                                echo $data['weight'];
                                ?>">
                            </div>
                        </div>
                        
                        <div class="edit-bar">
                            <input type="submit" value="Update Details" class="edit-button">
                        </div>
                    </form>
                </div>
                <div class="content-tile-column">
                    <div class="tall-tile">
                        <div class="update-pfp"></div>
                        <div class="update-button">
                            <span class="material-symbols-outlined">
                                upload
                            </span>
                            Upload Photo
                        </div>
                        <div class="change-pwd-button">Change Password</div>
                        <a class="change-pwd-button" href="memberdash">Submit All Changes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="upload-container" id="upload-container">
        <h2>Upload New Profile Picture:</h2>
        <hr>
        <form action="uploadUserImage" method="post" enctype="multipart/form-data">
            <label for="file-upload" class="file-input">
                <input type="file" class="uploadb-file-input" id="file-upload" name="photo" accept=".jpg, .jpeg, .png" required>
                <span id="file-name" class="uploadb-file-name"></span>
            </label>
            <button type="submit" id="upload-dp-btn" class="upload-btn button-disabled">Upload Photo</button>
        </form>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var updateButton = document.getElementById("update-dp");
            if (updateButton) {
                updateButton.addEventListener("click", function () {
                document.getElementById("upload-container").style.display = "block";
                document.getElementById("overlay-profile").style.display = "block";
                });
            }

            var overlay = document.getElementById("overlay-profile");
            if (overlay) {
                overlay.addEventListener("click", function () {
                document.getElementById("upload-container").style.display = "none";
                this.style.display = "none";
                });
            }

            var closeButton = document.getElementById("close-upload");
            if (closeButton) {
                closeButton.addEventListener("click", function () {
                document.getElementById("upload-container").style.display = "none";
                document.getElementById("overlay-profile").style.display = "none";
                });
            }

            var fileInput = document.getElementById("file-upload");
            if (fileInput) {
                fileInput.addEventListener("change", function () {
                if (this.files.length > 0) {
                    var fileName = this.files[0].name;
                    document.getElementById("file-name").textContent = fileName;
                    document
                    .getElementById("upload-dp-btn")
                    .classList.remove("button-disabled");
                }
                });
            }

            //

            var updateButton2 = document.getElementById("change-user-password");
            if (updateButton2) {
                updateButton2.addEventListener("click", function () {
                document.getElementById("change-password-div").style.display = "block";
                document.getElementById("overlay-profile").style.display = "block";
                });
            }

            var overlay = document.getElementById("overlay-profile");
            if (overlay) {
                overlay.addEventListener("click", function () {
                document.getElementById("change-password-div").style.display = "none";
                this.style.display = "none";
                });
            }

            var closeButton = document.getElementById("close-upload");
            if (closeButton) {
                closeButton.addEventListener("click", function () {
                document.getElementById("upload-container").style.display = "none";
                document.getElementById("overlay-profile").style.display = "none";
                });
            }

            var subimitdp = document.getElementById("upload-dp-btn");
            if (subimitdp) {
                subimitdp.addEventListener("click", function () {});
            }
        });


        function toastrSuccess(message) {
            toastr.options = {
                closeButton: true,
                debug: false,
                newestOnTop: false,
                progressBar: false,
                positionClass: "toast-top-right",
                preventDuplicates: false,
                onclick: null,
                showDuration: "300",
                hideDuration: "1000",
                timeOut: "3000",
                extendedTimeOut: "1000",
                showEasing: "swing",
                hideEasing: "linear",
                showMethod: "fadeIn",
                hideMethod: "fadeOut",
            };

            toastr.success(message);
        }
    </script>
</body>
</html>