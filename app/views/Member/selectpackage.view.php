<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="<?= ROOT ?>/assets/css/Main/main-styles.css">
    <link rel="stylesheet" type="text/css" href="<?= ROOT ?>/assets/css/Member/before-db-styles.css">

    <style>
        .payment-button-bar {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            /* background-color: aqua; */
            width: 20%;
            height: 30%;
            padding: 30px;
        }

        .payment-button {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            /* background-color: aqua; */
            width: 90%;
            height: 90%;
            padding: 30px;
            border: 1px solid #27374D;
            border-radius: 20px;
            font-size: 110%;
        }

        .payment-button:hover {
            cursor: pointer;
            background-color: #27374D;
            color: white;
        }
    </style>

</head>

<body>
    <?php
    echo '<pre>';
    var_dump($_SESSION);
    echo '</pre>';
    ?>
    <div class="common-template">
        <div class="common-header-gym">
            <div class="common-logo-tab">
                FITFUSION
            </div>
            <div class="common-heading-bar">
                <div class="current-tab">Get Your Package</div>
                <div class="next-tab">Next Up : Instructor Meeting</div>
            </div>
        </div>
        <div class="common-body-gym" style="flex-direction: column;">
            <div class="body-tile">
                <?php

                for ($x = 0; $x < count($data['allpackagetypes']); $x++) {
                    echo '<div class="gym-tile">
                        
                            <div class="gym-text">
                                ' . $data['allpackagetypes'][$x] . '
                            </div>
                            <div class="gym-text">
                                ' . $data['alldescriptions'][$x] . '
                            </div>
                            <div class="gym-text">
                                ' . $data['allpaymentperiods'][$x] . '
                            </div>
                            <div class="gym-text">
                                ' . $data['allamounts'][$x] . '
                            </div>
                        
                        </div> ';
                }

                ?>

                <input type="text" id="selectedPackage" value="1000" hidden>

                <?php
                echo '<input type="text" id="selectedUserEmail" value="' . $_SESSION['email'] . '" hidden>';
                ?>

            </div>

            <div class="payment-button-bar">
                <button class="payment-button">Make Payment</button>
            </div>

        </div>
    </div>
    <script>
        document.querySelector('.payment-button').onclick = function() {
            var selectedPackage = document.querySelector('#selectedPackage').value;
            alert(selectedPackage);
            paymentGateway();
        }
    </script>

    <script>
        function paymentGateway() {

            var selectedPackage = document.querySelector('#selectedPackage').value;
            var formData = new FormData();
            formData.append("selectedPackage", selectedPackage);

            var selectedUserEmail = document.querySelector('#selectedUserEmail').value;
            var formData2 = new FormData();
            formData2.append("selectedUserEmail", selectedUserEmail);
            formData2.append("selectedPackage", selectedPackage);


            var xhttp = new XMLHttpRequest();
            xhttp.open("POST", "Selectpackage/payhereprocesss", true);
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var obj = JSON.parse(this.responseText);

                    // Payment completed. It can be a successful failure.
                    payhere.onCompleted = function onCompleted(orderId) {
                        alert("completed");
                        var xhttp = new XMLHttpRequest();
                        xhttp.open("POST", "Selectpackage/markAsPaid", true);
                        xhttp.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                alert(this.responseText);
                            }
                        }
                        xhttp.send(formData2);
                        // direct to home
                        window.location.href = "http://localhost/FitFusion/scheduleintrmeeting";
                    };

                    // Payment window closed
                    payhere.onDismissed = function onDismissed() {
                        console.log("Payment dismissed");
                        //TODO: Show an error page
                    };

                    // Error occurred
                    payhere.onError = function onError(error) {
                        // Note: show an error page
                        console.log("Error:" + error);
                        //TODO: Show an error page
                    };

                    // Put the payment variables here
                    var payment = {
                        sandbox: true,
                        merchant_id: obj.merchant_id, // Replace your Merchant ID
                        return_url: "http://localhost/DineEase-DEE/customers/reservation",
                        cancel_url: "http://localhost/DineEase-DEE/customers/reservation", // Important
                        notify_url: "http://sample.com/notify",
                        order_id: obj.order_id,
                        items: obj.items,
                        amount: obj.amount,
                        currency: obj.currency,
                        hash: obj.hash,
                        first_name: obj.first_name,
                        last_name: obj.last_name,
                        email: obj.email,
                        phone: obj.phone,
                        address: obj.address,
                        city: obj.city,
                        country: obj.country,
                    };
                    payhere.startPayment(payment);
                }
            };
            xhttp.send(formData);
        }
    </script>
    <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>
</body>

</html>