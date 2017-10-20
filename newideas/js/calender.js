var d = new Date();
var today = (d.getMonth()) + 1;
if (today == 0) {
    today++;
}
if (today == 1) {
    var year = d.getFullYear() - 1;
}
if (today != 1) {
    var year = d.getFullYear();
}
var month = new Array();
month[1] = "January";
month[2] = "February";
month[3] = "March";
month[4] = "April";
month[5] = "May";
month[6] = "June";
month[7] = "July";
month[8] = "August";
month[9] = "September";
month[10] = "October";
month[11] = "November";
month[12] = "December";

var day;

var xhttp = new XMLHttpRequest();


$(document).on('click', '.current_m', function () {
    var day_clicked = $(this).children("span").html();
    day = month[today] + " " + day_clicked + ", " + year;
    $(".modal-title").html(day);

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {}
    };
    xhttp.open("GET", "calender_event_checker.php?month=" + today + "&&year=" + year + "&&day=" + day_clicked, true);
    xhttp.send();


    xhttp.onload = function () {
        if (xhttp.readyState === xhttp.DONE) {
            if (xhttp.status === 200) {
                /*console.log(xhttp.response);
                console.log(xhttp.responseText);*/
                $(".modal-body").html(xhttp.responseText);
                $("#myModal").modal();
            } else {
                $("#myModal").modal();
            }
        }
    };

});



function before() {
    if (today != 1) {
        today--;
    } else {
        today = 12;
        year--;
    }
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            /*document.getElementById("demo").innerHTML = this.responseText;*/
        }
    };
    xhttp.open("GET", "calendar_previous.php?month=" + today + "&&year=" + year, true);
    xhttp.send();

    /*
        console.log(xhttp);
    */
    xhttp.onload = function () {
        if (xhttp.readyState === xhttp.DONE) {
            if (xhttp.status === 200) {
                /*console.log(xhttp.response);
                console.log(xhttp.responseText);*/
                $(".calender").html(xhttp.responseText);


            }
        }
    };
}

function after() {
    if (today != 12) {
        today++;
    } else {
        today = 1;
        year++;
    }
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            /*document.getElementById("demo").innerHTML = this.responseText;*/
        }
    };
    xhttp.open("GET", "calendar_previous.php?month=" + today + "&&year=" + year, true);
    xhttp.send();

    /*
        console.log(xhttp);
    */

    xhttp.onload = function () {
        if (xhttp.readyState === xhttp.DONE) {
            if (xhttp.status === 200) {
                /*console.log(xhttp.response);
                console.log(xhttp.responseText);*/
                $(".calender").html(xhttp.responseText);


            }
        }
    };

}


$('.modal').on('show.bs.modal', function (e) {
    $('.modal .modal-dialog').attr('class', 'modal-dialog  zoomIn  animated');
})
