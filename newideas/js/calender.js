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


var day;

$(document).on('click', '.current_m', function () {
    day = $(this).children("span").html();

    //   if ($(this).children("#cal_events").html()) {
    alert(day + "/" + today + "/" + d.getFullYear());

    //    }
});



function before() {
    if (today != 1) {
        today--;
    } else {
        today = 12;
        year--;
    }
    var xhttp = new XMLHttpRequest();
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
    var xhttp = new XMLHttpRequest();
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
