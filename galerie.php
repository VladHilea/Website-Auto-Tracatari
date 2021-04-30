<!DOCTYPE html>
<html>
<head>
  <title>Auto CRY 24| Galerie</title>
<?php include("header.php"); ?>



<section  class="pb pt">
  <div class="container">
    <div  class="row">
      <div><h2>Galerie</b></h2></div>
            
    </div>
  </div>
</section>

<section  class="pb">
  <div class="container">
    <div  class="row">
      <div class="col-sm-3">
        
        <img class="pb pt img-responsive" src="images/galerie1.jpg" alt="autocry24 tracatri auto galerie 1">

      </div>
      <div class="col-sm-3">
        
        <img class="pb pt img-responsive" src="images/galerie11.jpg" alt="autocry24 tracatri auto galerie 2">

      </div>
      <div class="col-sm-3">
        
        <img class="pb pt img-responsive" src="images/galerie3.jpg" alt="autocry24 tracatri auto galerie 3">

      </div>
      <div class="col-sm-3">
        
        <img class="pb pt img-responsive" src="images/galerie4.jpg" alt="autocry24 tracatri auto galerie 4">

      </div>
    </div>
    <div class="row">
      <div class="col-sm-3">
        
        <img class="pb pt img-responsive" src="images/galerie12.jpg" alt="autocry24 tracatri auto galerie 5">

      </div>
      <div class="col-sm-3">
        
        <img class="pb pt img-responsive" src="images/galerie6.jpg" alt="autocry24 tracatri auto galerie 6">

      </div>
      <div class="col-sm-3">
        
        <img class="pb pt img-responsive" src="images/galerie7.jpg" alt="autocry24 tracatri auto galerie 7">

      </div>
      <div class="col-sm-3">
        
        <img class="pb pt img-responsive" src="images/galerie8.jpg" alt="autocry24 tracatri auto galerie 8">

      </div>
    </div>
    <div class="row">
      <div class="col-sm-offset-1 col-sm-4">
        
        <img class="pb pt img-responsive" src="images/galerie9.jpg" alt="autocry24 tracatri auto galerie 1">

      </div>
      <div class="col-sm-offset-2 col-sm-4">
        
        <img class="pb pt img-responsive" src="images/galerie10.jpg" alt="autocry24 tracatri auto galerie 9">

      </div>
     
    </div>

    </div>  
    </div>
  </div>
</section>


<?php include("bottom.php"); ?>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="js/counterup.min.js"></script>
 <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
<script src="js/owl.carousel.js"></script>
<script>  
jQuery(window).scroll(function() {
    if (jQuery(".navbar").offset().top > 50) {
        jQuery(".navbar-fixed-top").addClass("nav-collapsed");

        } 
    else
        {
        jQuery(".navbar-fixed-top").removeClass("nav-collapsed");

        }
});
</script>
<script>
var width = $(window).width();
if (width > 768) {jQuery(window).scroll(function() {
    if (jQuery(".navbar").offset().top > 50) {
        jQuery(".navbar-fixed-top").addClass("nav-collapsed");

        } 
    else
        {
        jQuery(".navbar-fixed-top").removeClass("nav-collapsed");

        }
});
}
 else{
 	 jQuery(".navbar-fixed-top").addClass("nav-collapsed");
 }


 
    $('.navbar-collapse ul li a:not(.dropdown-toggle)').click(function() {
    $('.navbar-toggle:visible').click();
});

     jQuery('.page-scroll').bind('click', function(e) {
            e.preventDefault();
            jQuery('html,body').animate({scrollTop: jQuery(this.hash).offset().top - 50});                                                         
               });
       $(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >= 1250) {  
       
        $("#goto").removeClass("dn");
    }
    else{
 $("#goto").addClass("dn");
    }
}); 
</script>
<script>
    jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    });
</script>

<script >
	$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    center: true;
    responsive:{
        0:{
            items:
        }
    }
});
</script>




</body>
</html>