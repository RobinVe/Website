<?php
    $title = 'Over Ons';
    include('header.php');
?>
<?php include('navbar.php'); ?>
<link href="css/overons.min.css" type="text/css" rel='stylesheet'>
<head>
   <title>Over Ons</title>
</head>
<div class='container-fluid'>
<div class='double-slide row'>
	<div class='main first-block'>
    <div class='col-md-6'>
      <div class="homepage-hero-module">
     <div class="video-container">
         <div class="filter"></div>
         <video autoplay loop class="fillWidth">
             <source id='personVideo' src="video/test/Morning-Routine.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
             <source id='personVideo2' src="video/test/Morning-Routine.webm" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
         </video>
         <div class="poster hidden">
             <img src="img/Robin_nieuw-225x300.png" alt="">
         </div>
     </div>
 </div>
   </div>
   <div class='col-md-6'>
     <div class='btn btn-primary teamSelect-button' mp4='video/test/Morning-Routine.mp4' webm='video/test/Morning-Routine.webm'>Robin</div>
     <div class='btn btn-primary teamSelect-button' webm='video/test/Mock-up.webm' mp4='video/test/Mock-up.mp4'>Nuno</div>
 </div>
    </div>
   <div class='main'>
   </div>
</div>
<?php include('footer.php'); ?>

<script>

//jQuery is required to run this code
$( document ).ready(function() {

    scaleVideoContainer();

    initBannerVideoSize('.video-container .poster img');
    initBannerVideoSize('.video-container .filter');
    initBannerVideoSize('.video-container video');

    $(window).on('resize', function() {
        scaleVideoContainer();
        scaleBannerVideoSize('.video-container .poster img');
        scaleBannerVideoSize('.video-container .filter');
        scaleBannerVideoSize('.video-container video');
    });

});

function scaleVideoContainer() {

    var height = $(window).height() + 5;
    var unitHeight = parseInt(height) + 'px';
    $('.homepage-hero-module').css('height',unitHeight);

}

function initBannerVideoSize(element){

    $(element).each(function(){
        $(this).data('height', $(this).height());
        $(this).data('width', $(this).width());
    });

    scaleBannerVideoSize(element);

}

function scaleBannerVideoSize(element){

    var windowWidth = $(window).width(),
    windowHeight = $(window).height() + 5,
    videoWidth,
    videoHeight;

    // console.log(windowHeight);

    $(element).each(function(){
        var videoAspectRatio = $(this).data('height')/$(this).data('width');

        $(this).width(windowWidth);

        if(windowWidth < 1000){
            videoHeight = windowHeight;
            videoWidth = videoHeight / videoAspectRatio;
            $(this).css({'margin-top' : 0, 'margin-left' : -(videoWidth - windowWidth) / 2 + 'px'});

            $(this).width(videoWidth).height(videoHeight);
        }

        $('.homepage-hero-module .video-container video').addClass('fadeIn animated');

    });
}

$(".teamSelect-button").click(function() {
	var mp4 = $(this).attr("mp4");
	var webm = $(this).attr("webm");
	$("#personVideo").attr("src", mp4);
	$("#personVideo2").attr("src", webm);
  var myVideo = $('video');
  myVideo.src = mp4;
  myVideo.load();
  myVideo.play();
});
</script>
