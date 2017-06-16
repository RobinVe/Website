var imageList = ['http://localhost/Website/img/background_jurist.jpg','http://localhost/Website/img/background_jurist.jpg','http://localhost/Website/img/background_schilder.jpg'];
var x = 0;

function homeSlider(x){
	var url = imageList[x];

	$('#home').fadeTo('slow', 0.3, function(){
		$(this).css('background-image', "url("+url+")");
	}).fadeTo('slow', 1).delay(1000);
	x++;
	if(x >= imageList.length){
		x = 0;
	}
	console.log('Hey X is'+x);
}

	setInterval(
		homeSlider(x),
		2000)
