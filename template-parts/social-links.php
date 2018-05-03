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
    'theme_location' => 'social-links'
  ) );
  ?>

  <!-- <ul>
    <li>
      <?php get_template_part( 'template-parts/icons/instagram' );?>
      <a class="underline-link" href="https://instagram.com/brisbanethreads" target="_blank">@brisbanethreads</a>
    </li>
    <li>
      <?php get_template_part( 'template-parts/icons/facebook' );?>
      <a class="underline-link" href="https://facebook.com/brisbanethreads" target="_blank">@brisbanethreads</a>
    </li>
    <li>
      <?php get_template_part( 'template-parts/icons/twitter' );?>
      <a class="underline-link" href="http://twitter.com/brisbanethreads" target="_blank">@brisbanethreads</a>
    </li>
    <li>
      <?php get_template_part( 'template-parts/icons/pinterest' );?>
      <a class="underline-link" href="http://pinterest.com/brisbanethreads" target="_blank">@brisbanethreads</a>
    </li>
  </ul> -->
</div>
