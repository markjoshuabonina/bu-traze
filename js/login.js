$(function() {

	$('.btn-submit').click(function(){
   		if($('#username').val() == ''){
      		$.alert('PLease Enter Your Username');
   		}else if($('#password').val() == ''){
      		$.alert('PLease Enter Your Password');
      	}
	});

	$( "#form-login" ).on( "submit", function( event ) {
  		event.preventDefault();
  			console.log( $( this ).serialize() );
  	});
});