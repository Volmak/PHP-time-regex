/**
 * 
 */

$(function(){
	$("form").on('submit', function (e){
		e.preventDefault();
		$.ajax({
			url: "assets/php/02.php",
			data: {
				format: $(this).find("div").eq(0).find("input").eq(0).val(),
				year: $(this).find("div").eq(1).find("input").eq(0).val(),
				yearP: $(this).find("div").eq(1).find("input").eq(1).val(),
				month: $(this).find("div").eq(2).find("input").eq(0).val(),
				monthP: $(this).find("div").eq(2).find("input").eq(1).val(),
				day: $(this).find("div").eq(3).find("input").eq(0).val(),
				dayP: $(this).find("div").eq(3).find("input").eq(1).val(),
				hour: $(this).find("div").eq(4).find("input").eq(0).val(),
				hourP: $(this).find("div").eq(4).find("input").eq(1).val(),
				min: $(this).find("div").eq(5).find("input").eq(0).val(),
				minP: $(this).find("div").eq(5).find("input").eq(1).val(),
				sec: $(this).find("div").eq(6).find("input").eq(0).val(),
				secP: $(this).find("div").eq(6).find("input").eq(1).val(),
				//Using IDs is the better way, but I'm just having fun here
			},
			method: "post",
		}).done(function(resp){
			$("p").html(resp);
		});
	});
});