/**
 * 
 */

$(function(){
	$("form").on('submit', function (e){
		e.preventDefault();
		var text = $("#text").val();
		var tag = $(this).html();
		var statement = $("p").eq(0).html();
		$.ajax({
			url: "assets/php/03-regex.php",
			data: {
				text: text,
				tag: tag,
				statement: statement,
			},
			method: "post",
		}).done(function(resp){
			var data = JSON.parse(resp);
			for (var i in data){				
				$("p").eq(i).html(data[i]);
				if (i == 6) {console.log(data[i])}
			}
		});
	});
});