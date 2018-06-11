function get_bills(bill) {
	var address = 'http://hms-ibear.co.uk/Ajax/bill_info/';
	var dataString = 'bill_id=' + bill;
	$.ajax({
		type: "post",
		url: address,
		cache: false,				
		data:dataString,
		success: function(data){	
				openNav_r();
				document.getElementById("ajax-bill_id").innerHTML = "Bill id: " + data.bill_availability["0"].bill_id;
				document.getElementById("ajax-bill_description").innerHTML = data.bill_availability["0"].bill_description;
				document.getElementById("ajax-bill_amount").innerHTML = "Price: " + data.bill_availability["0"].bill_amount + " £";
				document.getElementById("ajax-bill_date").innerHTML = "Date: " + data.bill_availability["0"].bill_date;
		},
		dataType: "json"
		});
};