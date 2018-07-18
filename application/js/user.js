$(document).ready(function(){
	/*
	*  Login form
	*/

	$('#login').on('submit', function(e){
		e.preventDefault();
		var post_dat = {};
		post_dat = $(this).serializeJson();
		$.ajax({
			method : 'post',
			url : '../classes/userhandler.php',
			data: post_dat,
			dataType: 'json',
			success: function(data){
				if (data.status == true) {
					window.location = window.location.origin + '/vagrant/php7.1/mini_car_inventory/application/views/dashboard.php';
				}
			}
		});
	});

	$('#logout').on('click', function(e){
		e.preventDefault();
		$.ajax({
			method : 'get',
			url : '../classes/userhandler.php?action=logout',
			dataType: 'json',
			success: function(data){
				if (data.status == true) {
					window.location = window.location.origin + '/vagrant/php7.1/mini_car_inventory/application/views/login.php';
				}
			}
		});
	});


});

/*
* Function to serialize array into json format to use in ajax
*/
$.fn.serializeJson = function() {
	var a = this.serializeArray();
	var jsn = {};
	$.each(a,function(i, v){
		jsn[v.name] = v.value;
	});
	return jsn;
}