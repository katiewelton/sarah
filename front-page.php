<?php
/**
* Template Name: Front Page
*/
get_header();
if(have_posts()): while(have_posts()): the_post();
$home_fields = new CMB2Fields(get_the_ID());
?>

  <section class="hero-banner hero-banner--home grid">
    <div class="logo"></div>
    <h1><?php the_title(); ?></h1>
    <h2><?php echo $home_fields->field('home_subtitle'); ?></h2>
    <div class="hero-content"><?php the_content(); ?></div>
    <div class="button-box grid">
      <a href="mailto:<?php echo $home_fields->field('email'); ?>" class="btn">email: <?php echo $home_fields->field('email'); ?></a>
      <a href="tel:<?php echo $home_fields->field('telephone'); ?>" class="btn">telephone: <?php echo $home_fields->field('telephone'); ?></a>
    </div>
  </section>
  <main class="home-content">
    <div class="portfolio-grid container">
      <h3>Projects</h3>
      <div class="top-block grid">
        <div class="tl block">
          <div class="block-image"></div>
          <div class="block-details">
            <h4 class="block-title">Project Title</h4>
            <div class="block-hover">
              <ul class="block-list">
                <li>List point one</li>
                <li>List item 2</li>
                <li>Third</li>
                <li>List buller no.4</li>
                <li>List point one</li>
                <li>List item 2</li>
              </ul>
              <a href="#" class="btn caps">View Project</a>
              <div class="spacer"></div>
            </div>
          </div>
        </div>
        <div class="tr block">
          <div class="block-image"></div>
          <div class="block-details">
            <h4 class="block-title">Project Title</h4>
            <div class="block-hover">
              <ul class="block-list">
                <li>List point one</li>
                <li>List item 2</li>
                <li>Third</li>
                <li>List buller no.4</li>
              </ul>
              <a href="#" class="btn caps">View Project</a>
              <div class="spacer"></div>
            </div>
          </div>
        </div>
        <div class="m block">
          <div class="block-image"></div>
          <div class="block-details">
            <h4 class="block-title">Project Title</h4>
            <div class="block-hover">
              <ul class="block-list">
                <li>List point one</li>
                <li>List item 2</li>
                <li>Third</li>
              </ul>
              <a href="#" class="btn caps">View Project</a>
              <div class="spacer"></div>
            </div>
          </div>
        </div>
        <div class="bl block">
          <div class="block-image"></div>
          <div class="block-details">
            <h4 class="block-title">Project Title</h4>
            <div class="block-hover">
              <ul class="block-list">
                <li>List point one</li>
                <li>List item 2</li>
                <li>Third</li>
                <li>List buller no.4</li>
                <li>List buller no.4</li>
              </ul>
              <a href="#" class="btn caps">View Project</a>
              <div class="spacer"></div>
            </div>
          </div>
        </div>
        <div class="br block">
          <div class="block-image"></div>
          <div class="block-details">
            <h4 class="block-title">Project Title</h4>
            <div class="block-hover">
              <ul class="block-list">
                <li>List point one</li>
                <li>List item 2</li>
                <li>Third</li>
                <li>List buller no.4</li>
              </ul>
              <a href="#" class="btn caps">View Project</a>
              <div class="spacer"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="bottom-block grid">
        <div class="bbl block">
          <div class="block-image"></div>
          <div class="block-details">
            <h4 class="block-title">Project Title</h4>
            <div class="block-hover">
              <ul class="block-list">
                <li>List point one</li>
                <li>List item 2</li>
                <li>Third</li>
                <li>List buller no.4</li>
                <li>Third</li>
                <li>List buller no.4</li>
              </ul>
              <a href="#" class="btn caps">View Project</a>
              <div class="spacer"></div>
            </div>
          </div>
        </div>
        <div class="bbr block">
          <div class="block-image"></div>
          <div class="block-details">
            <h4 class="block-title">Project Title</h4>
            <div class="block-hover">
              <ul class="block-list">
                <li>List point one</li>
                <li>List item 2</li>
                <li>Third</li>
                <li>List buller no.4</li>
              </ul>
              <a href="#" class="btn caps">View Project</a>
              <div class="spacer"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

<?php
endwhile; endif;
get_footer();
