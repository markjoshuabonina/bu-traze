$(function() {
 	$("#dept, #course, #id-frnt, #id-bck, #vax-card").hide();

 	$("#sel-user").change(function(){
 		// $("#dept, #course, #std-id-frnt, #std-id-bck").show();
 		var a = $(this).val();
 		if ( a == "Student"){
 			$("#upl-main-id").text("Student ID");
 			$("#upl-frnt-id").text("Upload Student ID (Front ID)");
 			$("#upl-bck-id").text("Upload Student ID (Back ID)");
 			$("#upl-vax-crd").text("Upload Vaccination Card");

 			$("#dept, #course, #id-frnt, #id-bck, #vax-card").show();
 		}else if ( a == "Employee"){
 			$("#upl-main-id").text("Employee Id");
 			$("#upl-frnt-id").text("Upload Employee ID (Front ID)");
 			$("#upl-bck-id").text("Upload Employee ID (Back ID)");
 			$("#upl-vax-crd").text("Upload Vaccination Card");

 			$("#course").hide();
 			$("#dept, #id-frnt, #id-bck, #vax-card").show();
 		}else if ( a == "Visitor"){
 			$("#upl-main-id").text("Valid Id");
 			$("#upl-frnt-id").text("Upload Valid ID (Front ID)");
 			$("#upl-bck-id").text("Upload Valid ID (Back ID)");
 			$("#upl-vax-crd").text("Upload Vaccination Card");

 			$("#dept, #course").hide();
 			$("#id-frnt, #id-bck, #vax-card").show();
 		}
 	});

//   jQuery(function () {
//     $("#").keyup(function () {
//         var VAL = this.value;

//         var email = new RegExp('^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$');

//         if (email.test(VAL)) {
//             alert('Great, you entered an E-Mail-address');
//         }
//     });
// });

 	$( "#form-register" ).on( "submit", function( event ) {
  		event.preventDefault();
  			console.log( $( this ).serialize() );

        if($('#f-name').val() == ''){
          $.alert('PLease Insert Your First Name');
        }else if($('#m-name').val() == ''){
          $.alert('PLease Insert Your Middle Name');
        }
        else if($('#l-name').val() == ''){
          $.alert('PLease Insert Your Last Name');
        }
        else if($('#home-add').val() == ''){
          $.alert('PLease Insert Your Home Address');
        }
        else if($('#email-add').val() == ''){
          $.alert('PLease Insert Your Email Address');
        }
        // else if($('#email-add').val()){
        //   var email_add = $('#email-add').val();
        //   var email = new RegExp('^[a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,15})$', 'i');
        //      if (!email.test(email_add)) {
        //       $.alert('incorrect Email');
        //     }
        // }
        else if($('#con-num').val() == ''){
          $.alert('PLease Insert Your Contact Number');
        }
        // else if($('#con-num').val()){
        //   var con_num = ($('#con-num').val());
        //   var number = /^(09|\+639)\d{9}$/;
        //      if (!number.test(con_num)) {
        //       alert('wrong Number');
        //     }
        // }
  });

  // ERROR

  $( "#form-register" ).on( "submit", function( event ) {
      event.preventDefault();
        console.log( $( this ).serialize() );

        if($('#email-add').val()){
          var email_add = $('#email-add').val();
          var email = new RegExp('^[a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,15})$', 'i');
             if (!email.test(email_add)) {
              $.alert('incorrect Email');
            }
        }
        else if($('#con-num').val()){
          var con_num = ($('#con-num').val());
          var number = /^(09|\+639)\d{9}$/;
             if (!number.test(con_num)) {
              alert('wrong Number');
            }
        }

  });

  		// AJAX
 //  		$.post("query/register.php", $("#form-register").serialize() , function(data){
 //  				console.log(data);
 //  		if(data.res == "success")
	// 	{
	// 	  $.alert("nice inserted"); 
	// 	}
	// 	else if(data.res == "failed")
	// 	{
	// 	  $.alert("Failed");
	// 	}

	// 		},'json')
	//  	return false;
	// });		

});