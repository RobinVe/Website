$(document).ready(function(){$("a").on("click",function(o){if(""!==this.hash){o.preventDefault();var t=this.hash;$("html, body").animate({scrollTop:$(t).offset().top},900,function(){window.location.hash=t})}})});



var imageList = ['http://localhost/Website/img/background.jpg','http://localhost/Website/img/background_jurist.jpg','http://localhost/Website/img/background_schilder.jpg'];
var x = 0;

function homeSlider(x){
	var url = imageList[x];

	$('#home').fadeTo('slow', 0.3, function(){
		$(this).css('background-image', "url("+url+")");
	}).fadeTo('slow', 1).delay(1000);
	x++;
	if(x > imageList.length){
		x = 1;
	}
	console.log('Hey X is '+x);
}

window.setInterval(homeSlider(x),2000);
