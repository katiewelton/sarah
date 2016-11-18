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

  <?php
  $home_fields->render('templates/portfolio-grid-tpl.php');

endwhile; endif;
get_footer();
