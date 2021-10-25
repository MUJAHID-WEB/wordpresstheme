<?php 
  
 
  get_header();


?>

<section class="page-header services-header" data-parallax="scroll" data-image-src="<?php 
  bloginfo('template_directory') ?>/images/header/blog-folding-img.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Our Blogs. <br> We Ensure Quality Design.</h1>
                </div>
            </div>
        </div>
    </section>

<section class="blog">
        <div class="container">
            <div class="row">
                <div class="title text-center">
                    <h2>Our Blog</h2>
                </div>
                <div class="col-md-9">
                    <!-- Blog Left Sections 
          =========================-->

                    <!-- If you use to 1 by 1 section to blog content left or right use class
              blog content left is default but you use blog content right side 
              you mast use class="blog-content-right" class with blog-list-section div
             -->
                    <!-- Blog List Only Image
            ========================= -->

                    <?php 
                    while(have_posts()){
                      the_post();

                      $imagepath= wp_get_attachment_image_src(
                        get_post_thumbnail_id(),'large'
                      );
                    
                    
                    ?>

                    <div class="blog-list-section blog-content-right row">
                        <div class="col-md-9 blog-content-area">
                            <div class="blog-img">
                                <img class="img-responsive" src="<?php echo $imagepath[0] ?>" alt="">
                            </div>
                            <div class="blog-content">
                                <a href="blog-single.html">
                                    <h4 class="blog-title"><?php the_title(); ?></h4>
                                </a>
                                <div class="meta">
                                    <div class="date">
                                        <p><?php the_date(); ?></p>
                                    </div>
                                    <div class="author">
                                        <p>By Michal Lomans</p>
                                    </div>
                                </div>
                                <p class="blog-decisions"><?php the_content(); ?></p>
                                <a class="btn btn-default th-btn solid-btn" href="<?php the_permalink(); ?>" role="button">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>


                    <?php } ?>
                   

                    <!-- See All Post -->
                    <div class="col-md-12">
                        <div class="see-all-post text-center">
                        <?php //echo paginate_links(); ?>
                        
                        <?php the_posts_pagination(array(
                          'screen_reader_text' =>' '
                        )); ?> 
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
                                        <div class="media-left media-middle">
                                            <p class="post-count">1</p>
                                        </div>
                                        <div class="media-body">
                                            <p>Typography is important fact for liusto odio dolore.</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <p class="post-count">2</p>
                                        </div>
                                        <div class="media-body">
                                            <p>Typography is important fact for liusto odio dolore.</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <p class="post-count">3</p>
                                        </div>
                                        <div class="media-body">
                                            <p>Typography is important fact for liusto odio dolore.</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <p class="post-count">4</p>
                                        </div>
                                        <div class="media-body">
                                            <p>Typography is important fact for liusto odio dolore.</p>
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