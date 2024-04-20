<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?=ROOT?>/assets/css/Sidebar.css"> 
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/MemberStyles.css"> 

    <!-- <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/sidebarnew.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/ManagerDashBoardStyle.css">  -->
    <!-- <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/sidebarfinal.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/scheduleAppointRe.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/tasklist.css"> -->
   
</head>

<body>

    <!-- //////////////////////////// -->
    <div class="container-left">
        <div class="side-menu">
            <div class="brand-name">
                <h1>FIT FUSION</h1>
            </div>
            <ul>
                <a href="memberdash"><li>&nbsp; <h5>Dashboard</h5> </li></a>
                <a href="memberprofile"><li><img src="<?=ROOT?>/assets/images/dashboards/profile.jpeg" alt="">&nbsp;<h6>My Profile</h6> </li></a>
                <a href="taskList"><li><img src="<?=ROOT?>/assets/images/dashboards/schedule.jpeg" alt="">&nbsp;<h6>Task List</h6> </li></a>
                <a href="#"><li><img src="<?=ROOT?>/assets/images/dashboards/workout.jpeg" alt="">&nbsp;<h6>Attendance</h6> </li></a>

                <a href="scheduleInstrAppointReq"><li><img src="<?=ROOT?>/assets/images/dashboards/failure.jpeg" alt="">&nbsp;<h6>Meetings</h6> </li></a>
                <a href="makeComplaint"><li><img src="<?=ROOT?>/assets/images/dashboards/task list.jpeg" alt="">&nbsp;<h6>Complaints</h6> </li></a>
                <a href="makereviewgym"><li><img src="<?=ROOT?>/assets/images/dashboards/meeting.jpeg" alt="">&nbsp;<h6>Reviews</h6> </li></a>
                <!-- <a href="#"><li><img src="<?=ROOT?>/assets/images/dashboards/help.jpeg" alt="">&nbsp; <h6>Payments</h6></li></a> -->
                <a href="#"><li><img src="<?=ROOT?>/assets/images/dashboards/setting.png" alt="">&nbsp;<h6>Logout</h6> </li></a>

            </ul>
        </div>
    </div>
        <!-- //////////////////////////// -->


 <!-- ADDED THE CONTAINER CLASS -->
    <div class="container-right">

        <!-- <div class="container-tabs-bar">
            <div class="tab">
                <a href="scheduleInstrAppointReq"><button class="current-button">Instructor</button></a>
            </div>
            <div class="tab">
                <a href="scheduleNutriAppointReq"><button>Nutritionist</button></a>
            </div>
        </div> -->

        <div class="form">
            <form method="POST">
                    <!-- <div class="form-content">
                        Full Name
                        <input type="text" name="membername">
                    </div>
                    <div class="form-content">
                        Package
                        <input type="text" name="package">
                    </div>
                    <div class="form-content">
                        next field
                        <input type="text" name="field1">
                    </div>
                    <div class="form-content">
                        next field
                        <input type="text" name="field2">
                    </div>
                    <div class="form-content">
                        next field
                        <input type="text" name="field3">
                    </div> -->
                    <div class="form-content">
                        <div>
                            <center><input type="submit" value="Make Payment" id="proceed-to-pay"></center>
                        </div>
                    </div>
                    <script src="<?=ROOT?>/assets/js/payment.js"></script>
                    <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>
            </form>
        </div>
    </div>

    <!-- <script>
        function paymentGateWay() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = () => {
                if(xhttp.readyState==4 && xhttp.status==200){
                    alert(xhttp.responseText);
                    var obj = JSON.parse(xhttp.responseText);

                    // Payment completed. It can be a successful failure.
                    payhere.onCompleted = function onCompleted(orderId) {
                        console.log("Payment completed. OrderID:" + orderId);
                        // Note: validate the payment and show success or failure page to the customer
                    };

                    // Payment window closed
                    payhere.onDismissed = function onDismissed() {
                        // Note: Prompt user to pay again or show an error page
                        console.log("Payment dismissed");
                    };

                    // Error occurred
                    payhere.onError = function onError(error) {
                        // Note: show an error page
                        console.log("Error:"  + error);
                    };

                    // payment variables
                    var payment = {
                        "sandbox": true,
                        "merchant_id": "1226456",    // Merchant ID
                        "return_url": "http://localhost/FitFusion/public/payhere",     // Important  CHANGE??????????????????????????????
                        "cancel_url": "http://localhost/FitFusion/public/payhere",     // Important
                        "notify_url": "http://sample.com/notify",
                        "order_id": obj["order_id"],
                        "items": obj["items"],
                        "amount": obj["amount"],
                        "currency": obj["currency"],
                        "hash": obj["hash"], // generated hash retrieved from backend
                        "first_name": obj["first_name"],
                        "last_name": obj["last_name"],
                        "email": obj["email"],
                        "phone": obj["phone"],
                        "address": obj["address"],
                        "city": obj["city"],
                        "country": "Sri Lanka",
                        "delivery_address": "No. 46, Galle road, Kalutara South",
                        "delivery_city": "Kalutara",
                        "delivery_country": "Sri Lanka",
                        "custom_1": "",
                        "custom_2": ""
                    };

                    payhere.startPayment(payment);
                }
            }
            xhttp.open("GET","Member/payhereprocess",true);
            xhttp.send();
        }   
    </script> -->

</body>

</html>