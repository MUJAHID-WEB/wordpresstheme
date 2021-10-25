<?php 
//Template Name: portfolio
  get_header();
 
?>

  <!-- Portfolio header-section 
  =========================-->
<section class="page-header services-header" data-parallax="scroll" data-image-src="<?php 
  bloginfo('template_directory') ?>/images/header/portfolio-folding-img.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center">Our Portfolio.<br> We Ensure Quality Design.</h1>
      </div>
    </div>
  </div>
</section>

 <!-- Portfolio Sections 
 =========================-->
 <section class="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title text-center">
          <h2>Our Portfolio</h2>
        </div>
        <div class="protfolio-mixitup-btn text-center">
          <button class="filter btn btn-default btn-main active" data-filter="all">all</button>
          <button class="filter btn btn-default btn-main" data-filter="category-1">branding</button>
          <button class="filter btn btn-default btn-main" data-filter="category-2">User interface</button>
          <button class="filter btn btn-default btn-main" data-filter="category-3">print design</button>
        </div>
        <div id="Container" class="filtr-container row">
          <div class="filtr-item col-md-4 col-sm-6 col-xs-12" data-category="category-1">
            <div class="portfolio-list">
              <a href="portfolio-single.html">
                <div class="th-mouse-portfolio-card">
                  <div class="thumbnail portfolio-thumbnail">
                    <img src="<?php bloginfo('template_directory') ?>/images/portfolio/portfolio-img1.jpg" alt="Portfolio">
                    <div class="caption portfolio-caption">
                      <p class="date">16.03.2015</p>
                      <h3 class="portfolio-title">Merit wogmonk</h3>
                      <p class="portfolio-subtitle">Branding</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="filtr-item col-md-4 col-sm-6 col-xs-12" data-category="category-2">
            <div class="portfolio-list">
              <a href="portfolio-single.html">
                <div class="th-mouse-portfolio-card">
                  <div class="thumbnail portfolio-thumbnail">
                    <img src="<?php bloginfo('template_directory') ?>/images/portfolio/portfolio-img2.jpg" alt="Portfolio">
                    <div class="caption portfolio-caption">
                      <p class="date">16.03.2015</p>
                      <h3 class="portfolio-title">Merit wogmonk</h3>
                      <p class="portfolio-subtitle">Branding</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="filtr-item col-md-4 col-sm-6 col-xs-12" data-category="category-3">
            <div class="portfolio-list">
              <a href="portfolio-single.html">
                <div class="th-mouse-portfolio-card">
                  <div class="thumbnail portfolio-thumbnail">
                    <img src="<?php bloginfo('template_directory') ?>/images/portfolio/portfolio-img3.jpg" alt="Portfolio">
                    <div class="caption portfolio-caption">
                      <p class="date">16.03.2015</p>
                      <h3 class="portfolio-title">Merit wogmonk</h3>
                      <p class="portfolio-subtitle">Branding</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="filtr-item col-md-4 col-sm-6 col-xs-12" data-category="category-1">
            <div class="portfolio-list">
              <a href="portfolio-single.html">
                <div class="th-mouse-portfolio-card">
                  <div class="thumbnail portfolio-thumbnail">
                    <img src="<?php bloginfo('template_directory') ?>/images/portfolio/portfolio-img4.jpg" alt="Portfolio">
                    <div class="caption portfolio-caption">
                      <p class="date">16.03.2015</p>
                      <h3 class="portfolio-title">Merit wogmonk</h3>
                      <p class="portfolio-subtitle">Branding</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="filtr-item col-md-4 col-sm-6 col-xs-12" data-category="category-2">
            <div class="portfolio-list">
              <a href="portfolio-single.html">
                <div class="th-mouse-portfolio-card">
                  <div class="thumbnail portfolio-thumbnail">
                    <img src="<?php bloginfo('template_directory') ?>/images/portfolio/portfolio-img5.jpg" alt="Portfolio">
                    <div class="caption portfolio-caption">
                      <p class="date">16.03.2015</p>
                      <h3 class="portfolio-title">Merit wogmonk</h3>
                      <p class="portfolio-subtitle">Branding</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="filtr-item col-md-4 col-sm-6 col-xs-12" data-category="category-3">
            <div class="portfolio-list">
              <a href="portfolio-single.html">
                <div class="th-mouse-portfolio-card">
                  <div class="thumbnail portfolio-thumbnail">
                    <img src="<?php bloginfo('template_directory') ?>/images/portfolio/portfolio-img6.jpg" alt="Portfolio">
                    <div class="caption portfolio-caption">
                      <p class="date">16.03.2015</p>
                      <h3 class="portfolio-title">Merit wogmonk</h3>
                      <p class="portfolio-subtitle">Branding</p>
                    </div>
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