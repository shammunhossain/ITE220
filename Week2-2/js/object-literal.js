var hotel = {
name: 'SADMAN SUPRIME HOTEL',

Rooms: 50,

booked: 30,

checkAvailability : function() {

return this.Rooms - this.booked;
}



};



var elName = document.getElementById('hotelName');
elName.textContent = hotel.name;



var elRooms = document.getElementById('Rooms');

elRooms.textContent = hotel.checkAvailability();



var hotel = new Object();

//sadmanhossain
hotel.name = 'SADMAN SUPRIME HOTEL'

hotel.Rooms = 50;

hotel.booked = 30;



hotel.checkAvailability = function(){


   return this.Rooms - this.booked;


};


function Hotel(name, Rooms, booked){



this.name = name;

this.Rooms = Rooms;

this.booked = booked;




this.checkAvailability = function(){

  
  return this.Rooms - this.booked;

};


}

//sadmanhossain
var sadmanHotel = new Hotel ('SADMAN SUPRIME HOTEL', 50, 25);


