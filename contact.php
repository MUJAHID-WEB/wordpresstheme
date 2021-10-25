

<?php 
//Template Name: contact
  get_header();
 
?>

<!-- Contact header-section 
  =========================-->
<section class="page-header services-header" data-parallax="scroll" data-image-src="<?php 
  bloginfo('template_directory') ?>/images/header/contact-folding-img.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center">Contact Us. <br> We Ensure Quality Design.</h1>
      </div>
    </div>
  </div>
</section>

  <!-- Google map Study Sections 
  =========================-->
<section class="contact-map">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 padding-0">
        <!-- map -->
         <div id="map" data-latitude="51.507351" data-longitude="-0.127758"></div>
        <!-- Contact Information -->
        <div class="contact-info">
          <div class="contact-img">
            <img src="<?php bloginfo('template_directory') ?>/images/contact/contact-img1.png" alt="">
          </div>
          <div class="contact-content">
            <div class="content-title-section">
              <h3 class="content-title">redcodder solution</h3>
            </div>
            <div class="home-address">
              <div class="flex">
                <div class="contact-icon">
                  <i class="tf-ion-ios-home-outline"></i>
                </div>
                <p class="ct-info">24 Golden Tower (2nd Floor),  Sylhet.</p>
              </div>
            </div>
            <div class="web-address">
              <div class="flex">
                <div class="contact-icon">
                  <i class="tf-global"></i>
                </div>
                <a href="#" class="ct-info">deviserweb.com</a>
              </div>
            </div>
            <div class="phone-address">
              <div class="flex">
                <div class="contact-icon">
                  <i class="fa fa-phone" aria-hidden="true"></i>
                </div>
                <p class="ct-info">01771-299299 (Mobile)</p>
              </div>
            </div>
            <div class="contact-protfolio">
              <img src="<?php bloginfo('template_directory') ?>/images/contact/contact-img2.png" alt="">
              <img src="<?php bloginfo('template_directory') ?>/images/contact/contact-img3.png" alt="">
              <img src="<?php bloginfo('template_directory') ?>/images/contact/contact-img4.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

 <!-- Contact From Study Sections 
  =========================-->
 <section class="contact-form">
   <div class="container">
     <div class="row">
       <div class="title text-center">
         <h2>Contact Us</h2>
       </div>
       <form class="" method="post">
         <div class="col-md-6">
           <div class="form-group">
             <input type="text" class="form-control" placeholder="Subject">
           </div>
           <div class="form-group">
             <input type="email" class="form-control" placeholder="Email">
           </div>
           <div class="form-group margin-0">
             <input type="text" class="form-control" placeholder="Name">
           </div>
         </div>
         <div class="col-md-6 margin-0">
           <div class="form-group">
             <textarea class="form-control " rows="3" placeholder="Message"></textarea>
           </div>
         </div>
         <div class="col-md-12">
           <div class="contact-btn text-center">
             <input class="btn btn-default btn-main" type="submit" value="Sent Message">
           </div>
         </div>
       </form>
     </div>
   </div>
 </section>

 <?php 
  get_footer();

?>