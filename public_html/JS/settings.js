function check_grayscale() {
	
};

function set_grayscale(status) {
	var address = 'http://hms-ibear.co.uk/Ajax/set_grayscale/';
	var dataString = 'gray_status=' + status;
	console.log(dataString);
	$.ajax({
		type: "post",
		url: address,
		cache: false,				
		data:dataString,
		success: function(data){	
		console.log(data);
			if (data.reply == true){
				$("#gray-stat").html('<img class="mob-menu-switcher" src="http://hms-ibear.co.uk/Images/on.png" alt="On/Off Switcher">');
				location.reload();
				} else {
					$("#gray-stat").html('<img class="mob-menu-switcher" src="http://hms-ibear.co.uk/Images/off.png" alt="On/Off Switcher">');
					location.reload();
				}
		},
		dataType: "json"
		});
};