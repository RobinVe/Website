var imageList = [
	"http://360-web.nl/img/background_jurist.jpg",
	"http://360-web.nl/img/background_hovenier.jpg",
	"http://360-web.nl/img/background_schilder.jpg"
];

var x = 0;

function next(){
	if(x > (imageList.length-1)){
		x = 0;
	}
	var url = imageList[x];

	$("#home").css("background-image", "url(" + url + ")");
	console.log(x);
	x++;
}

setInterval(next,15000);

$(document).ready(next());
