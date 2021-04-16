$(document).ready(function(){
	$.get("notes/note", function(data){
		$(".notes").html(data);
	});

	$("form").submit(function(e){
		e.preventDefault();
		$.post($(this).attr('action'), $(this).serialize(), function(data) {
            $('.notes').html(data);
			$("textarea").val("");
          });
		return false
	});
})