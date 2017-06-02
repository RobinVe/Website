<?php require 'header.php'; ?>
<link href="css/index.min.css" type="text/css" rel='stylesheet'>
<link href="css/portfolio.css" type="text/css" rel='stylesheet'>
<style>


</style>
<div class="fluid-container">
      <?php require 'navbar.php'; ?>
</div>

<div class='double-slide'>
   <div class='main'>
	   <h2 class='flex-center'>PORTFOLIO</h2>
   </div>
   <div class='main'>
       <div class='col-md-10 col-md-offset-1'>
         <div class="lightbox-gallery">
         				<div class="overlay"><a href="https://www.360recruitment.nl"><img class="portfolio" src="https://www.360recruitment.nl/360web/img/test.png"></a></div>
         				<div class="overlay"><a href="https://www.360recruitment.nl"><img class="portfolio" src="https://www.360recruitment.nl/360web/img/test.png"></a></div>
         				<div class="overlay"><a href="https://www.360recruitment.nl"><img class="portfolio" src="https://www.360recruitment.nl/360web/img/test.png"></a></div>
         				<div class="overlay"><a href="https://www.360recruitment.nl"><img class="portfolio" src="https://www.360recruitment.nl/360web/img/test.png"></a></div>
         				<div class="overlay"><a href="https://www.360recruitment.nl"><img class="portfolio" src="https://www.360recruitment.nl/360web/img/test.png"></a></div>
         				<div class="overlay"><a href="https://www.360recruitment.nl"><img class="portfolio" src="https://www.360recruitment.nl/360web/img/test.png"></a></div>
         		</div>
       </div>
   </div>
</div>
<div class='back-to-top' id='back-to-top' title='Back to top'><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
<?php require 'footer.php'; ?>
</div>

<script>
// Create a lightbox
(function() {
  var $lightbox = $("<div class='lightbox'></div>");
  var $img = $("<img>");
  var $caption = $("<p class='caption'></p>");

  // Add image and caption to lightbox

  $lightbox
    .append($img)
    .append($caption);

  // Add lighbox to document

  $('body').append($lightbox);

  // $('.lightbox-gallery img').click(function(e) {
  //   e.preventDefault();
  //
  //   // Get image link and description
  //   var src = $(this).attr("src");
  //   var cap = $(this).attr("alt");
  //
  //   // Add data to lighbox
  //
  //   $img.attr('src', src);
  //   $caption.text(cap);
  //
  //   // Show lightbox
  //
  //   $lightbox.fadeIn('fast');
  //
  //   $lightbox.click(function() {
  //     $lightbox.fadeOut('fast');
  //   });
  // });

}());

</script>
</body>
