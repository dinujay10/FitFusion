<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/MarkAttendanceStyle.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/ManagerDashBoardStyle.css">
</head>
<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>FIT FUSION</h1>
        </div>
        <ul>
            <li>&nbsp; <h5>Dashboard</h5> </li>
            <a href="packages"><li><img src="<?=ROOT?>/assets/images/dashboards/profile.jpeg" alt="">&nbsp;<h6>Packages</h6> </li></a>
            <a href="handlemembercomplaint"><li><img src="<?=ROOT?>/assets/images/dashboards/schedule.jpeg" alt="">&nbsp;<h6>Member complaints</h6> </li></a>
            <a href="addgym"><li><img src="<?=ROOT?>/assets/images/dashboards/workout.jpeg" alt="">&nbsp;<h6>Add Gym</h6> </li></a>

            <a href="manageresources"><li><img src="<?=ROOT?>/assets/images/dashboards/failure.jpeg" alt="">&nbsp;<h6>Manage Gym Resources</h6> </li></a>

            <a href="editgym"><li><img src="<?=ROOT?>/assets/images/dashboards/task list.jpeg" alt="">&nbsp;<h6>Edit Gym</h6> </li></a>
            <a href="appliedinstructors"><li><img src="<?=ROOT?>/assets/images/dashboards/meeting.jpeg" alt="">&nbsp;<h6>Approve Instructors</h6> </li>
            <a href="logout"><li><img src="<?=ROOT?>/assets/images/dashboards/help.jpeg" alt="">&nbsp; <h6>Logout</h6></li></a>
            <a href="newmembersreport"><li><img src="<?=ROOT?>/assets/images/dashboards/setting.png" alt="">&nbsp;<h6>Reports</h6> </li></a>
        </ul>
    </div>
    <div class="container">
    <main class="table" id="customers_table">
        <section class="table__header">
            <h1>Member Attendance</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="<?=ROOT?>/assets/images/search-btn.png" alt="" alt="">
            </div>

            <!-- <div class="export__file">
                <label for="export-file" class="export__file-btn" title="Export File"></label>
                <input type="checkbox" id="export-file">
                <div class="export__file-options">
                    <label>Export As &nbsp; &#10140;</label>
                    <label for="export-file" id="toPDF">PDF <img src="images/pdf.png" alt=""></label>
                    <label for="export-file" id="toJSON">JSON <img src="images/json.png" alt=""></label>
                    <label for="export-file" id="toCSV">CSV <img src="images/csv.png" alt=""></label>
                    <label for="export-file" id="toEXCEL">EXCEL <img src="images/excel.png" alt=""></label>
                </div>
            </div> -->
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Id <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Member Email <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Time In<span class="icon-arrow">&UpArrow;</span></th>
                        <th>View <span class="icon-arrow"></span></th>
                        
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach($data['attendance'] as $x){
                    
                        echo '
                        <tr>
                            <td> '.$x->id.' </td>
                        
                            <td> '.$x->memberemail.'  </td>
                            <td>  '.$x->timein.' </td>
                            <td>
                            <a href="approveinstructor?instructorid='.$x->id.'"><p class="status  Replied"> Remove </p></a>
                            
                            </td>
                       
                        </tr>
                        ';
                    
                   
                    
                }
                ?>
                    
                    
                </tbody>
            </table>
        </section>
    </main>
    <script src="<?=ROOT?>/assets/js/replymembercomplaint.js"></script>
    <div class="qr-container">
                <div class="scanner-con">
                    <h3 class="">Scan Your QR Code Here For Your Attedance</h3>
                    <video id="interactive" class="viewport" width="80%" style="margin: left 30px;">
                </div>

                <div class="qr-detected-container" style="display: none;">
                    <form action="" method="POST">
                        <h3 class="">Student QR Detected!</h3>
                        <input type="hidden" id="detected-qr-code" name="detected-qr-code">
                        <button type="submit">Submit Attendance</button>
                    </form>
                </div>
            </div>
    </div>
    
    <!-- instaScan -->
    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>

    <script>

        
        let scanner;

        function startScanner() {
            scanner = new Instascan.Scanner({ video: document.getElementById('interactive') });

            scanner.addListener('scan', function (content) {
                const qrcode = document.getElementById('detected-qr-code');
                qrcode.value=content;
                //$("#detected-qr-code").val(content);
                console.log(content);
                scanner.stop();
                document.querySelector(".qr-detected-container").style.display = '';
                document.querySelector(".scanner-con").style.display = 'none';
            });

            Instascan.Camera.getCameras()
                .then(function (cameras) {
                    if (cameras.length > 0) {
                        scanner.start(cameras[0]);
                    } else {
                        console.error('No cameras found.');
                        alert('No cameras found.');
                    }
                })
                .catch(function (err) {
                    console.error('Camera access error:', err);
                    alert('Camera access error: ' + err);
                });
        }

        document.addEventListener('DOMContentLoaded', startScanner);

        // function deleteAttendance(id) {
        //     if (confirm("Do you want to remove this attendance?")) {
        //         window.location = "./endpoint/delete-attendance.php?attendance=" + id;
        //     }
        // }
    </script>

    
</body>
</html>