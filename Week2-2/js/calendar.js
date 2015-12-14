

var hotelTable = document.getElementById("hotelCalendarTable");

var defaultData = hotelTable.innerHTML;

var stringHTML = "Date";



hotelTable.innerHTML += stringHTML;





//this is my cod sadmanhossain
for (var x = 1; x <= 31; x++) {

        document.getElementById("cell" + x).innerHTML = x ;

    }



