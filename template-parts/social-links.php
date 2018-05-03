<?php
/**
 * Template part for social links
 *
 * @package threadsnetwork
 */

?>

<div class="social-prompt">
  <h3>Check out our socials</h3>

  <?php
  wp_nav_menu( array(
    'theme_location' => 'social-links',
    'menu_class' => 'social-links'
  ) );
  ?>

</div>
