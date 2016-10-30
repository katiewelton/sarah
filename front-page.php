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
  <main class="home-content">
    <div class="container">
      <div class="top-block grid">
        <div class="tl block">
          <div class="block-image"></div>
        </div>
        <div class="tr block">
          <div class="block-image"></div>
        </div>
        <div class="m block">
          <div class="block-image"></div>
        </div>
        <div class="bl block">
          <div class="block-image"></div>
        </div>
        <div class="br block">
          <div class="block-image"></div>
        </div>
      </div>
      <div class="bottom-block grid">
        <div class="bbl">
          <div class="block-image"></div>
        </div>
        <div class="bbr">
          <div class="block-image"></div>
        </div>
      </div>
    </div>
  </main>

<?php
endwhile; endif;
get_footer();
