/**
 * 
 */

$(function(){
	$("form").on('submit', function (e){
		e.preventDefault();
		$.ajax({
			url: "assets/php/01.php",
			data: {
				year: $("#year").val(),
				month: $("#month").val(),
				day: $("#day").val(),
			},
			method: "post",
		}).done(function(resp){
			alert(resp);
		});
	});
});