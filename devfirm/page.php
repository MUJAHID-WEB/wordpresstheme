<?php 
  get_header();
  the_post();
?>
<section class="page-header services-header" data-parallax="scroll" data-image-src="<?php 
  bloginfo('template_directory') ?>/images/header/blog-folding-img.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center">Our <?php the_title() ?>. <br> We Ensure Quality Design.</h1>
      </div>
    </div>
  </div>
</section>

<section class="blog">
    <div class="container">
      <div class="row">
        <div class="title text-center">
          <h2>Our <?php the_title() ?></h2> 
          
          
        </div>
        <div class="col-md-12">
          <div class="text-center">

          <!-- content, thumbnail image -->
            <?php 
                the_content();
                the_post_thumbnail(array(600,500)); 
                //the_post_thumbnail('medium');
                //the_post_thumbnail('large');
                //the_post_thumbnail('thumbnail');
                //the_post_thumbnail('full');

                $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
                
            ?>

            <img src="<?php echo $imagepath[0] ?>"/>

            

          </div>
        </div>
        
            
        
            
        
        
	</div>
        </div>

      </div>
    </div>
  </section>

<?php 
  get_footer();

?>