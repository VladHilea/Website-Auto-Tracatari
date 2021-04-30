<!DOCTYPE html>
<html>
<head>
  <title>Auto CRY 24| Contact</title>
<?php

include("header.php");

?>



<section  class="pb pt">
  <div class="container">
    <div  class="row">
      <div><h2>Unde ne gasesti?</b></h2></div>
            
    </div>
  </div>
</section>

<section id="first-section"   >
  <section class="opacity-black position-relative pb pt">
    <div class="container display-table height-560" >
      <div class="row  color-white" >
          <div style="display: none" class="mobile-show-map col-sm-6 vertical-align pt text-left">
           

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11410.02386212542!2d26.13234503445692!3d44.36119911565222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1fdf7dd8e9d1d%3A0xdcb85e43be4b984f!2sZona%20industriala%2C%20Bucure%C8%99ti%2C%20Romania!5e0!3m2!1sen!2suk!4v1580411235482!5m2!1sen!2suk" width="350" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

          </div>
		  
		  <div class="mobile-hide col-sm-6 vertical-align pt text-left">
           

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11410.02386212542!2d26.13234503445692!3d44.36119911565222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1fdf7dd8e9d1d%3A0xdcb85e43be4b984f!2sZona%20industriala%2C%20Bucure%C8%99ti%2C%20Romania!5e0!3m2!1sen!2suk!4v1580411235482!5m2!1sen!2suk" width="650" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

          </div>
          <div class="col-sm-offset-2 col-sm-4 text-center">
            <section class="opacity-black  ">
             <form class="form-top text-left" method="post" action="mail.php">
              <div class="form-group">
                <h4><b>Prenume</b></h4>
                <input required="" type="name" class="form-control" id="exampleInputEmail1" name="prenume" >
              </div>
              <div class="form-group">
                <h4><b>Nume</b></h4>
                <input required="" type="name" class="form-control" id="exampleInputEmail1" name="nume">
              </div>
              <div class="form-group">
                <h4><b>Email</b></h4>
                <input required="" type="email" class="form-control" id="exampleInputEmail1" name="mail">
              </div>
              <div class="form-group">
                <h4><b>Telefon</b></h4>
                <input required="" type="phone" class="form-control" id="exampleInputEmail1"  name="phone">
              </div>
              <div class="form-group">
                <h4><b>Mesaj</b></h4>
              <textarea required="" class="form-control" rows="3"  name="message"></textarea>
              </div>
            
              <button type="submit" class="btn btn-default btn-form-top">Submit</button>
            </form>
          </section>
          </div>
      </div>
    </div>
  </section>
</section>

<section id="intrebari" class="pb pt">
  <div class="container">

    <div class="row">
      <div class="col-sm-12 pb pt text-left"><h1>Contacti-ne <span class="text-blue"><b>Oricand</b></span></h1>
        <p>Este important pentru noi sa va oferim toate informatiile necesare. Nu ezitati sa ne intrebati.</p>
      </div>
    </div>
    <div class="row text-center">
      <div class="box-contact col-sm-3">
        <i class="fa fa-mobile contact-image" aria-hidden="true"></i>
        <p class="contact-info">0723259595</p>
      </div>
       <div class="box-contact col-sm-3">
        <i class="fa fa-envelope contact-image" aria-hidden="true"></i>
        <p class="contact-info">contact@autocry24.ro</p>
      </div>
       <div class="box-contact col-sm-3">
        <i class="fa fa-map-marker contact-image" aria-hidden="true"></i>
        <p class="contact-info">Bucuresti</p>
      </div>
       <div class="box-contact col-sm-3">
        <i class="fa fa-globe contact-image" aria-hidden="true"></i>
        <p class="contact-info">www.autocry24.ro</p>
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