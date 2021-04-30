<!DOCTYPE html>
<html>
<head>
  <title>Auto CRY 24| Pagina nu a fost gasita</title>
<?php include("header.php"); ?>


<section  class="pb pt">
  <div class="container">
    <div  class="row">

            
    </div>
  </div>
</section>

<section style="height: 100%;"  class="pb">
  <div class="container">
    <div  class="row">
      <h1 class="pb">Pagina nu a ofst gasita</h1>
      <a href='https://www.autocry24.ro' class=" btn btn-default btn-top" id="button-contact"><h4>Inapoi la pagina principala</h4></a>


      
            
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