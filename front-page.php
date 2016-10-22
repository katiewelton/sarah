<?php
/**
* Template Name: Front Page
*/
get_header();
if(have_posts()): while(have_posts()): the_post();
?>

  <section class="hero-banner hero-banner--home grid">
    <div class="logo"></div>
    <h1>SARAH WELTON</h1>
    <h2>UX & VISUAL DESIGNER</h2>
    <p class="hero-content">The more she shat davos oldtown your joy will turn to ashes in your mouth white walkers we do not kneel neck. Only Cat sunspear varamyr, i dreamed that I was old theon aerys kill the boy fear cuts deeper than swords davos wyman manderly ruby ford. The lone wolf dies but the pack survives I'm no one astapor, tywin barristan the twins white walkers. Valyria orell ashara rosby victarion jaehaerys tommen patchface astapor tower of joy quaithe tywin maegor elia.</p>
    <p class="hero-content">Please take a look at my <a href="#" class="hero-link js-scroll-down">portfolio</a> and don't hesitate to get in touch:
    <div class="button-box grid">
      <a href="#" class="btn">email: sarahtamsinwelton@gmail.com</a>
      <a href="#" class="btn">telephone: 07932370646</a>
    </div>

  </section>

<?php
endwhile; endif;
get_footer();
