    $('.form').submit(function(event) {
        $.ajax({
            url: "process/pakket_submit.php"  ,
            type: 'POST',
            data: $(".form").serialize(),
            dataType: 'json',
            success: function(result) {
				console.log(result);
				$('.btn-contact').toggleClass('btn-succes');

				setTimeout(function(){
					$('.btn-contact').toggleClass('btn-succes');
				}
				,2000);


            },
            error: function() {
				$('.btn-contact').toggleClass('btn-fail');

				setTimeout(function(){
					$('.btn-contact').toggleClass('btn-fail');
				}
				,2000);
			}
        })
        event.preventDefault();
	});
