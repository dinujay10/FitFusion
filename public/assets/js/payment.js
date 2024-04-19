
// Proceed to Payment
$("#proceed-to-pay").click(function () {
    var data = {
      amount: $("#totalAmount").val(),
    };
  
    $.ajax({
      url: "payment",
      type: "POST",
      contentType: "application/x-www-form-urlencoded",
      data: data,
      success: function (response) {
        addedReservationID = response; // Change reservation ID
        paymentGateway(response);
      },
    });
  });

function markPaid() {
    $.ajax({
        url: "markPaid", // URL where?
        type: "POST",
        data: { reservationID: addedReservationID }, // Pakcage ID??
        dataType: "json",
        success: function (response) {
        console.log(response);
        },
        error: function (xhr, status, error) {
        console.error("Error fetching data:", error);
        },
    });
}

function createOrder() {
    var cartArray = JSON.parse(sessionStorage.getItem("food-cart") || "[]"); //get the package details?
    var orderItems = []; //needed?
    cartArray.forEach(function (item) {
      orderItems.push({
        itemID: item.itemID, //package ID
        itemName: item.itemName, //package name
        quantity: item.quantity, // remove
        size: item.size, // remove
      });
    });
   
    var orderData = { //package data
      reservationID: addedReservationID, //package ID
      orderItems: orderItems, // package Name
    };
  
    $.ajax({
      url: "createOrder", //where
      type: "POST",
      data: orderData, //package data
      success: function (response) {
        console.log(response);
      },
    });
  }

function paymentGateway(ReservationID) {
    var reservationID = ReservationID;
    let amount = document.getElementById("totalAmount").value;

    var formData = new FormData();
    formData.append("amount", amount);

    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", "payhereprocesss", true);
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
        var obj = JSON.parse(this.responseText);

        // Payment completed. It can be a successful failure.
        payhere.onCompleted = function onCompleted(orderId) {
            var reservationData = {
            reservationID: reservationID,
            invoiceID: reservationID,
            amount: amount,
            paymentMethod: "PayHere",
            };
            $.ajax({
            url: "makePayment",
            type: "POST",
            data: reservationData,
            contentType: "application/x-www-form-urlencoded",
            success: function (response) {},
            });
            markPaid();
            createOrder();
            emptyCart();
            location.reload();
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


function paymentGateway() { //package ID as argument
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
    xhttp.open("GET","payhereprocess.php",true);
    xhttp.send();
}