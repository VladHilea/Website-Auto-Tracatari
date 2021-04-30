<!DOCTYPE html>
<html>
<head>
  <title>Auto CRY 24| Despre</title>
<?php include("header.php"); ?>


<section  class="pb pt">
  <div class="container">
    <div  class="row">
      <div><h2>DESPRE NOI</b></h2></div>
            
    </div>
  </div>
</section>

<section  class="pb">
  <div class="container">
    <div  class="row">
      <h1 class="pb">Cine suntem noi?</h1>
      <h3>Tractari Auto in Zona Berceni - Aparatorii Patriei si service auto. Apelati cu incredere. Interventii rapide si sigure, tractari, service rapid. Sunati-ne pentru orice problema.</h3>
        <h3>Locatie: <b>BERCENI APARATORII PATRIEI</b></h3>


        <img class="col-sm-6 pb pt img-responsive" src="images/galerie1.jpg" alt="tracatari auto bucuresti 1">
        <img class="col-sm-6 pb pt img-responsive" src="images/galerie10.jpg" alt="tractari auto bucuresti despre 2">
            
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