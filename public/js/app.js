var host=location.host;
$(document).ready(function(){

	$('#sendPost').on('click',sendPayment);

});

function sendPayment(){

        var dataMap = {};
        id=$('input[name=pr_id]').val();
        email=$('input[name=email]').val();
        token=$('input[name=_token]').val();
        dataMap['id'] = id;
				dataMap['email'] = email;
        dataMap['_token'] = token;
        $.ajax({
		   type: "POST",
		   data: dataMap,
		   url: 'http://localhost/dreambox/public/payment',

		   success: function(response){
		   }

	 	});
}
