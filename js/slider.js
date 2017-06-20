var imageList = [
	"img/slider/background_aannemer.jpg",
	"img/slider/background_jurist.jpg",
	"img/slider/background_hovenier.jpg",
	"img/slider/background_trainer.jpg"
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

setInterval(next,6000);

$(document).ready(
	next()
);
