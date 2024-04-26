function sendSelectedName() {
    // Get the selected value
    var selectedName = $("#InstrName").val();

    // Send the selected value to the controller using Ajax
    $.ajax({
        type: "POST",
        url: "ScheduleInstrAppointReq.php", // Update with your controller file path
        data: { selectedName: selectedName },
        success: function(response) {
            // Handle the response from the controller if needed
            console.log(response);
        }
    });
}

var instructorselected;

function sendDate() {
    var myElement = document.getElementById("date");
    var date = myElement.value;

    var array = [
        {
            "date": date,
            "instrname": instructorselected,
        }
    ];

    var array = JSON.stringify(array);

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "ScheduleInstrAppointReq/getDate", true);
    xhr.setRequestHeader('Content-type', 'application/json; charset=UTF-8')
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // alert(xhr.responseText); //sends an alert
            console.log(xhr.responseText);
        }
    }
    xhr.send(array);
}

function sendInstructorName() {
    var myElement = document.getElementById("instrname");
    var instrname = myElement.value;
    instructorselected = instrname;

    var array = [
        {
            "instructorname": instrname
        }
    ];

    var array = JSON.stringify(array);

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "ScheduleInstrAppointReq/getInstructorName", true);
    xhr.setRequestHeader('Content-type', 'application/json; charset=UTF-8')
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // alert(xhr.responseText); //sends an alert
            console.log(xhr.responseText);
        }
    }
    xhr.send(array);
}

function enableDate() {
    // Enable the date input when an instructor is selected
    document.getElementById('date').disabled = false;
}