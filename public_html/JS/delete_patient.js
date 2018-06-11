function delete_patient(patient_id) {
	var divtag = patient_id;
	var address = 'http://hms-ibear.co.uk/Ajax/delete_patients';
	var dataString = 'user_id=' + patient_id;
	var target = $(this).parent();	
	console.log(dataString);
	console.log(parent);
	$.ajax({
		type: "post",
		url: address,
		cache: false,				
		data:dataString,
		success: function(response){	
		console.log(response);
			if (response.reply == true){
			$("#"+divtag).remove();
			$("#message2").html("Patient was deleted successfully!");
			$("#message2").css("color","green");
          		}
          		else if (response.reply == false){
              		alert('Error while request..');
			$("#message2").html("Patient was not deleted!");
			$("#message2").css("color","red");
          		}
		},
		dataType: "json"
		});
};

function confirm_box(patient_id) {
    if (confirm("Are you sure, you want delete this patient?") == true) {
       delete_patient(patient_id);
    } else {
       return false;
    }
}
