//sadmanhossain
$(function(){
	$("a").on("click",function(e){
		e.preventDefault();
		var city=this.text.toLowerCase();
$.ajax({
	type:'Get',
	url:'http://api.openweathermap.org/data/2.5/weather?q='+city+'appid=2de143494c0b295cca9337e1e96b00e0',
	success: function(data){
		//console.log(data.name);
		$("#container").html(data.name+" "+data.main.temp);
	}

});
	});
});