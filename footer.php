    <footer>

      <?php
      wp_nav_menu([
        'theme_location' => 'footer_menu',
        'container'      => false,
        'menu_class'     => 'footer-menu'
      ]);
      ?>

    </footer>
    <?php wp_footer(); ?>

  </body>
</html>
