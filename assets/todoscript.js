 $(".todocheckbox").on('click',function(){
 	var userval = $(this).val();
 	
 	if(userval > 0)
 	{
 		var textval = $('#text' + userval).text().trim();

	 	$.ajax({
	        url: "removeuser.php",
	        type: "get",
	        data: {id:userval, name:textval} ,
	        success: function (response) {
	        	if( response.flag ) {

		        	console.log( response.flag );

			 		$('#text' + userval).text( '' );
			 		$('#strike_text' + userval).text( textval );
			 		$('#textli' + userval).css( "opacity",".5" );

			 		// setTimeout(function() {
			 		// 	$('#textli' + userval).hide('slow');
			 		// }, 500);

	        	}
	        }
	    });

 	}

 });