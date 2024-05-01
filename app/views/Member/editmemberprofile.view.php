<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="<?= ROOT ?>/assets/css/Member/main-template.css">
    <link rel="stylesheet" type="text/css" href="<?= ROOT ?>/assets/css/Member/body-template.css">
    <link rel="stylesheet" type="text/css" href="<?= ROOT ?>/assets/css/Member/modal-styles.css">

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

                <a class="side-bar-tile-link" href="gymschedule">
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

                <a class="side-bar-tile-link" href="memberviewworkoutplan">
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

                <a href="viewqrcode">
                    <div class="qr-scan"><span class="material-symbols-outlined">
                            qr_code_scanner
                        </span></div>
                </a>
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
                        <?php if (isset($_SESSION['profile_error'])) : ?>
                            <div class="alert alert-danger">
                                <?php foreach ($_SESSION['profile_error'] as $error) : ?>
                                    <p><?= $error ?></p>
                                <?php endforeach; ?>
                                <?php unset($_SESSION['profile_error']); ?>
                            </div>
                        <?php endif; ?>
                        <div class="edit-bar">
                            <div class="edit-label">First Name</div>
                            <div class="edit-value"><input class="edit-value-input" type="text" name="name" value="<?php
                                                                                                                    echo $data['firstname'];
                                                                                                                    ?>">
                            </div>
                        </div>
                        <div class="edit-bar">
                            <div class="edit-label">Last Name</div>
                            <div class="edit-value"><input class="edit-value-input" type="text" name="lastname" value="<?php
                                                                                                                        echo $data['lastname'];
                                                                                                                        ?>">
                            </div>
                        </div>
                        <div class="edit-bar">
                            <div class="edit-label">Age</div>
                            <div class="edit-value"><input class="edit-value-input" type="text" name="age" value="<?php
                                                                                                                    echo $data['age'];
                                                                                                                    ?>">
                            </div>
                        </div>
                        <div class="edit-bar">
                            <div class="edit-label">Height(cm)</div>
                            <div class="edit-value"><input class="edit-value-input" type="text" name="height" value="<?php
                                                                                                                        echo $data['height'];
                                                                                                                        ?>">
                            </div>
                        </div>
                        <div class="edit-bar">
                            <div class="edit-label">Weight(kg)</div>
                            <div class="edit-value"><input class="edit-value-input" type="text" name="weight" value="<?php
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
                    <form class="tall-tile" method="post" action="Editmemberprofile/changeUserPassword">
                        <?php
                        if (isset($_SESSION['error'])) {
                            echo '<div class="error-message">' . $_SESSION['error'] . '</div>';
                            unset($_SESSION['error']);
                        }
                        if (isset($_SESSION['success'])) {
                            echo '<div class="error-message">' . $_SESSION['success'] . '</div>';
                            unset($_SESSION['success']);
                        }
                        ?>
                        <div class="edit-bar">
                            <div class="edit-label" style="width: 40%;">Old Password</div>
                            <div class="edit-value">
                                <input class="edit-value-input" type="password" name="oldPassword" value="<?php echo $data['oldPassword']; ?>">
                            </div>
                        </div>
                        <div class="edit-bar">
                            <div class="edit-label" style="width: 40%;">New Password</div>
                            <div class="edit-value">
                                <input class="edit-value-input" type="password" name="newPassword" value="<?php echo $data['newPassword']; ?>">
                            </div>
                        </div>
                        <div class="edit-bar">
                            <div class="edit-label" style="width: 40%; text-align:center;">Confirm New Password</div>
                            <div class="edit-value">
                                <input class="edit-value-input" type="password" name="confirmPassword" value="<?php echo $data['confirmPassword']; ?>">
                            </div>
                        </div>
                        <button type="submit" class="change-pwd-button">Change Password</button>
                        <a class="change-pwd-button" href="memberdash">Go Back to Dashboard</a>
                    </form>
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
        function openActivateModal() {
            // console.log();
            activateModal.style.display = "block";
            document.getElementById("activate-staff").href = <?= ROOT ?> / Editmemberprofile / changePwd;
            span.onclick = function() {
                modal.style.display = "none";
            }

        }

        document.querySelectorAll('.activate-button').forEach(function(button) {
            button.addEventListener('click', function() {
                // var id = this.parentElement.parentElement.getAttribute('key');
                // console.log(id)
                openActivateModal();
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            var updateButton = document.getElementById("update-dp");
            if (updateButton) {
                updateButton.addEventListener("click", function() {
                    document.getElementById("upload-container").style.display = "block";
                    document.getElementById("overlay-profile").style.display = "block";
                });
            }

            var overlay = document.getElementById("overlay-profile");
            if (overlay) {
                overlay.addEventListener("click", function() {
                    document.getElementById("upload-container").style.display = "none";
                    this.style.display = "none";
                });
            }

            var closeButton = document.getElementById("close-upload");
            if (closeButton) {
                closeButton.addEventListener("click", function() {
                    document.getElementById("upload-container").style.display = "none";
                    document.getElementById("overlay-profile").style.display = "none";
                });
            }

            var fileInput = document.getElementById("file-upload");
            if (fileInput) {
                fileInput.addEventListener("change", function() {
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
                updateButton2.addEventListener("click", function() {
                    document.getElementById("change-password-div").style.display = "block";
                    document.getElementById("overlay-profile").style.display = "block";
                });
            }

            var overlay = document.getElementById("overlay-profile");
            if (overlay) {
                overlay.addEventListener("click", function() {
                    document.getElementById("change-password-div").style.display = "none";
                    this.style.display = "none";
                });
            }

            var closeButton = document.getElementById("close-upload");
            if (closeButton) {
                closeButton.addEventListener("click", function() {
                    document.getElementById("upload-container").style.display = "none";
                    document.getElementById("overlay-profile").style.display = "none";
                });
            }

            var subimitdp = document.getElementById("upload-dp-btn");
            if (subimitdp) {
                subimitdp.addEventListener("click", function() {});
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