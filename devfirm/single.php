<?php 
  
 
  get_header();
  the_post();

?>


<section class="page-header services-header" data-parallax="scroll" data-image-src="<?php bloginfo('template_directory') ?>/images/header/blog-folding-img.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center">Our Blogs. <br> We Ensure Quality Design.</h1>
      </div>
    </div>
  </div>
</section>

  <!-- Blog Sections 
  =========================-->
  <section class="blog-single">
  	<div class="container">
  		<div class="row">
        <div class="title text-center">
          <h2>Our Blog</h2>
        </div>
  			<div class="col-md-9">
				  <!-- Blog Left Sections 
				  =========================-->
            <!-- Single Blog Page Main Img
            ============================== -->
            <div class="blog-single-section-img">
                    <?php 
                    
                      $imagepath= wp_get_attachment_image_src(
                        get_post_thumbnail_id(),'large'
                      );
                    
                    
                    ?>
              <img src="<?php echo $imagepath[0] ?>" alt="Blog Single Img">
            </div>
            <!-- Single Blog Page Main Content
            ================================== -->
            <div class="blog-single-content">
              <div class="blog-content-description">
                <h3><a class="blog-content-title" href="#"><?php the_title(); ?></a></h3>
                <div class="meta">
                  <div class="date">
                    <p><?php echo get_the_date(); ?></p>
                  </div>
                  <div class="author">
                    <p>By <?php the_author(); ?></p>
                  </div>
                </div>
                <p class="blog-description"><?php the_content() ?></p>
              </div>
              
            </div><!-- End Single Blog Content -->
            <!-- Single Blog Page Comments
            ================================== -->
            <div class="blog-single-comments">
              <h4 class="comments-title">Comments (2)</h4>
              <div class="blog-comments">
                <div class="media">
                  <div class="media-left blog-left-img">
                    <div class="blog-comments-img">
                      <img class="media-object" src="<?php bloginfo('template_directory') ?>/images/blog/comment-img1.png" alt="comments pic">
                    </div>
                  </div>
                  <div class="media-body comments-body">
                    <p class="blog-comments-text">“ This is the PERFECT conceal carry handgun..Only gave it a 4 because the slide is super hard to pull back but as I use it more I expect it to become easier. ” est etiam processus dynamicus</p>
                    <h4 class="media-heading comments-author">Garry Shepherd</h4>
                  </div>
                </div>
              </div>
              <div class="blog-comments">
                <div class="media">
                  <div class="media-left blog-left-img">
                    <div class="blog-comments-img">
                      <img class="media-object" src="<?php bloginfo('template_directory') ?>/images/blog/comment-img2.png" alt="comments pic">
                    </div>
                  </div>
                  <div class="media-body comments-body">
                    <p class="blog-comments-text">“ This is the PERFECT conceal carry handgun..Only gave it a 4 because the slide is super hard to pull back but as I use it more I expect it to become easier. ” est etiam processus dynamicus</p>
                    <h4 class="media-heading comments-author">Junaed Shepherd</h4>
                  </div>
                </div>
              </div>
            </div>
            <!-- Single Blog Page Form
            ================================== -->
            <div class="blog-single-form">
              <form>
                <div class="form-group col-md-6 padding-0">
                  <input type="text" class="form-control blog-form-input" placeholder="Your Name">
                </div>
                <div class="form-group col-md-6 padding-0 padding-left-15">
                  <input type="email" class="form-control blog-form-input" placeholder="Your Email">
                </div>
                <div class="form-group col-md-12 padding-0">
                  <textarea class="form-control blog-form-textarea" placeholder="Your Comment"></textarea>
                </div>
                <div class="col-md-12 padding-0">
                  <div class="form-submit-btn text-center">
                    <button type="submit" class="btn btn-default btn-main th-btn">Submit Comment</button>
                  </div>
                </div>
              </form>
            </div>
          <!-- See All Post -->
          <div class="col-md-12">
            <div class="see-all-post text-center">
              <a class="btn btn-default th-btn solid-btn" href="#" role="button"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back To All Posts </a>
            </div>
          </div>
  			</div>
  			<div class="col-md-3">
				  <!-- Blog Right Sections 
				  =========================-->
	  				<div class="blog-sidbar">
		<div class="search widgets">
			<form class="form-inline">
			  <div class="form-group search-input">
			    <input type="text" class="form-control" placeholder="Search ...">
			  </div>
			  <button type="submit" class="btn btn-default tf-search-btn"><i class="tf-search"></i></button>
			</form>
		</div>
		<div class="categories widgets">
			<div class="list-group text-center">
				<div class="list-group-item active"> Blog Categories </div>
				<a href="#" class="list-group-item">Web Design</a>
				<a href="#" class="list-group-item">User Interface</a>
				<a href="#" class="list-group-item">User Experience</a>
				<a href="#" class="list-group-item">Typography</a>
				<a href="#" class="list-group-item">Color Sense</a>
				<a href="#" class="list-group-item">Future Trend</a>
				<a href="#" class="list-group-item">Modern Design</a>
			</div>
		</div>
		<div class="related-post widgets">
			<div class="list-group">
				<div class="list-group-item active text-center">
				Related Post
				</div>
				<a href="#" class="list-group-item">
					<div class="media">
					  <div class="media-left media-middle"><p class="post-count">1</p></div>
					  <div class="media-body">
					    <p>Typography is  important fact for liusto odio dolore.</p>
					  </div>
					</div>
				</a>
				<a href="#" class="list-group-item">
					<div class="media">
					  <div class="media-left media-middle"><p class="post-count">2</p></div>
					  <div class="media-body">
					    <p>Typography is  important fact for liusto odio dolore.</p>
					  </div>
					</div>
				</a>
				<a href="#" class="list-group-item">
					<div class="media">
					  <div class="media-left media-middle"><p class="post-count">3</p></div>
					  <div class="media-body">
					    <p>Typography is  important fact for liusto odio dolore.</p>
					  </div>
					</div>
				</a>
				<a href="#" class="list-group-item">
					<div class="media">
					  <div class="media-left media-middle"><p class="post-count">4</p></div>
					  <div class="media-body">
					    <p>Typography is  important fact for liusto odio dolore.</p>
					  </div>
					</div>
				</a>
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