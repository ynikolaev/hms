function check_user_unique() {
var username = document.getElementById("username").value;
var dataString = 'username=' + username;
var address = 'http://hms-ibear.co.uk/Ajax/user_availability';
console.log(address);
console.log("Hello World!");
console.log(dataString);
$.ajax(
    {
        type:"post",
        url: address,
        data: dataString,
        success: function(data) {
		console.log(data);
          if (data.content == false){ // checkuser.php will send us back a JSON response containing a value named availability
              $("#message").html("Insert Username!"); // send a message to the user
              //$("#username").css("background-color","#f99"); // change the CSS to give user feedback
              $("#submit").prop('disabled',true); // disable the submit button
              $("#adddoctor").prop('disabled',true); // disable the submit button
              $("#addpatient").prop('disabled',true); // disable the submit button
              $("#addadmin").prop('disabled',true); // disable the submit button
          }
          else if (data.size == false){ // checkuser.php will send us back a JSON response containing a value named availability
              $("#message").html("Username must be at least 4 char"); // send a message to the user
              $("#message").css("color","red"); // send a message to the user
              //$("#username").css("background-color","#f99"); // change the CSS to give user feedback
              $("#submit").prop('disabled',true); // disable the submit button
              $("#adddoctor").prop('disabled',true); // disable the submit button
              $("#addpatient").prop('disabled',true); // disable the submit button
              $("#addadmin").prop('disabled',true); // disable the submit button
          }
          else if (data.whitespace == false){ // checkuser.php will send us back a JSON response containing a value named availability
              $("#message").html("Username only alpha numeric char"); // send a message to the user
              $("#message").css("color","red"); // send a message to the user
              //$("#username").css("background-color","#f99"); // change the CSS to give user feedback
              $("#submit").prop('disabled',true); // disable the submit button
              $("#adddoctor").prop('disabled',true); // disable the submit button
              $("#addpatient").prop('disabled',true); // disable the submit button
              $("#addadmin").prop('disabled',true); // disable the submit button              
          }
          else if (data.availability == false){ // checkuser.php will send us back a JSON response containing a value named availability
              $("#message").html("Username is not unique"); // send a message to the user
              $("#message").css("color","red"); // send a message to the user
              //$("#username").css("background-color","#f99"); // change the CSS to give user feedback
              $("#submit").prop('disabled',true); // disable the submit button
              $("#adddoctor").prop('disabled',true); // disable the submit button
              $("#addpatient").prop('disabled',true); // disable the submit button
              $("#addadmin").prop('disabled',true); // disable the submit button              
          }
          else if (data.availability == true){
              $("#message").html("Username is unique"); // send a message to the user
              $("#message").css("color","green"); // send a message to the user
              //$("#username").css("background-color","#9f9"); // change the CSS to give user feedback
              $("#submit").prop('disabled',false); // enable the submit button
          }
        }, 
        dataType: "json" // returned data type is going to be JSON
    });
  $( document ).ready(function() {
      $("#submit").prop('disabled',false);
  });
}

function check_doctor_unique() {
var username = document.getElementById("d_username").value;
var dataString = 'username=' + username;
var address = 'http://hms-ibear.co.uk/Ajax/user_availability';
console.log(address);
console.log("Hello World!");
console.log(dataString);
$.ajax(
    {
        type:"post",
        url: address,
        data: dataString,
        success: function(data) {
		console.log(data);
          if (data.content == false){ // checkuser.php will send us back a JSON response containing a value named availability
              $("#message2").html(" is empty. Insert value!"); // send a message to the user
              //$("#username").css("background-color","#f99"); // change the CSS to give user feedback
              $("#submit").prop('disabled',true); // disable the submit button
          }
          else if (data.size == false){ // checkuser.php will send us back a JSON response containing a value named availability
              $("#message2").html(" must be at least 4 char"); // send a message to the user
              $("#message2").css("color","red"); // send a message to the user
              //$("#username").css("background-color","#f99"); // change the CSS to give user feedback
              $("#submit").prop('disabled',true); // disable the submit button
          }
          else if (data.whitespace == false){ // checkuser.php will send us back a JSON response containing a value named availability
              $("#message2").html(" only alpha numeric char"); // send a message to the user
              $("#message2").css("color","red"); // send a message to the user
              //$("#username").css("background-color","#f99"); // change the CSS to give user feedback
              $("#submit").prop('disabled',true); // disable the submit button
          }
          else if (data.availability == false){ // checkuser.php will send us back a JSON response containing a value named availability
              $("#message2").html(" is not unique"); // send a message to the user
              $("#message2").css("color","red"); // send a message to the user
              //$("#username").css("background-color","#f99"); // change the CSS to give user feedback
              $("#submit").prop('disabled',true); // disable the submit button
          }
          else if (data.availability == true){
              $("#message2").html(" is unique"); // send a message to the user
              $("#message2").css("color","green"); // send a message to the user
              //$("#username").css("background-color","#9f9"); // change the CSS to give user feedback
              $("#submit").prop('disabled',false); // enable the submit button
          }
        }, 
        dataType: "json" // returned data type is going to be JSON
    });
  $( document ).ready(function() {
      $("#submit").prop('disabled',false);
  });
}

function check_admin_unique() {
var username = document.getElementById("a_username").value;
var dataString = 'username=' + username;
var address = 'http://hms-ibear.co.uk/Ajax/user_availability';
console.log(address);
console.log("Hello World!");
console.log(dataString);
$.ajax(
    {
        type:"post",
        url: address,
        data: dataString,
        success: function(data) {
		console.log(data);
          if (data.content == false){ // checkuser.php will send us back a JSON response containing a value named availability
              $("#message3").html(" is empty. Insert value!"); // send a message to the user
              //$("#username").css("background-color","#f99"); // change the CSS to give user feedback
              $("#submit").prop('disabled',true); // disable the submit button
          }
          else if (data.size == false){ // checkuser.php will send us back a JSON response containing a value named availability
              $("#message3").html(" must be at least 4 char"); // send a message to the user
              $("#message3").css("color","red"); // send a message to the user
              //$("#username").css("background-color","#f99"); // change the CSS to give user feedback
              $("#submit").prop('disabled',true); // disable the submit button
          }
          else if (data.whitespace == false){ // checkuser.php will send us back a JSON response containing a value named availability
              $("#message3").html(" only alpha numeric char"); // send a message to the user
              $("#message3").css("color","red"); // send a message to the user
              //$("#username").css("background-color","#f99"); // change the CSS to give user feedback
              $("#submit").prop('disabled',true); // disable the submit button
          }
          else if (data.availability == false){ // checkuser.php will send us back a JSON response containing a value named availability
              $("#message3").html(" is not unique"); // send a message to the user
              $("#message3").css("color","red"); // send a message to the user
              //$("#username").css("background-color","#f99"); // change the CSS to give user feedback
              $("#submit").prop('disabled',true); // disable the submit button
          }
          else if (data.availability == true){
              $("#message3").html(" is unique"); // send a message to the user
              $("#message3").css("color","green"); // send a message to the user
              //$("#username").css("background-color","#9f9"); // change the CSS to give user feedback
              $("#submit").prop('disabled',false); // enable the submit button
          }
        }, 
        dataType: "json" // returned data type is going to be JSON
    });
  $( document ).ready(function() {
      $("#submit").prop('disabled',false);
  });
}