var tipuedrop = {"pages": []};


$(function (){
	$('#tipue_drop_input').change(function() {
	  // 요청  
	  var input_data = $(this).val();
	  // 받기
	  $.ajax({
	  	url: '/search',
	  	type: "GET",
	  	data: {
	  		keyword: input_data
	  	},

	  	success: function(data){
	  		// alert(data["pages"][0]["title"] +""+ data["pages"][0]["thumb"] +""+ data["pages"][0]["tags"] )
	  		tipuedrop = data
	  	}
	  })
	});
})