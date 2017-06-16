$(".form").submit(function(t) {
	$.ajax({
		url: "process/form_submit.php",
		type: "POST",
		data: $(".form").serialize(),
		dataType: "json",
		success: function(t) {
			console.log(t), $(".btn-contact").toggleClass(
				"btn-succes"
			), setTimeout(function() {
				$(".btn-contact").toggleClass("btn-succes");
			}, 1000);
		},
		error: function() {
			$(".btn-contact").toggleClass("btn-fail"), setTimeout(function() {
				$(".btn-contact").toggleClass("btn-fail");
			}, 1000);
		}
	}), t.preventDefault();
});
