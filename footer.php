<hr>

<footer>
  <p>&copy; Company 2017</p>
  <?php
  $defaults = array(
    'theme_location'  => 'secondary-menu',
    'container'       => 'nav',
    'menu_class'      => 'footer-navigation',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'depth'           => 0,
    'walker'          => ''
  );
  wp_nav_menu( $defaults );
  ?>
</footer>
</div> <!-- /container -->

<?php wp_footer(); ?>
</body>
</html>
