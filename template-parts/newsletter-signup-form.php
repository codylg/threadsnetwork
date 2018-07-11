<?php
/**
 * Template part for newsletter signup
 *
 * @package threadsnetwork
 */

?>

<?php
$blogname = get_bloginfo( 'name' );

if (strpos($blogname, 'Brisbane') !== false) :
  $listaction = 'https://brisbanethreads.us2.list-manage.com/subscribe/post?u=69ba35eb9adb1f295d4ffae0d&amp;id=403c16dcf0';

elseif (strpos($blogname, 'Melbourne') !== false) :
  $listaction = 'https://brisbanethreads.us2.list-manage.com/subscribe/post?u=69ba35eb9adb1f295d4ffae0d&amp;id=656e9623a3';

elseif (strpos($blogname, 'Sydney') !== false) :
  $listaction = 'https://brisbanethreads.us2.list-manage.com/subscribe/post?u=69ba35eb9adb1f295d4ffae0d&amp;id=7aebe3138d';

elseif (strpos($blogname, 'Perth') !== false) :
  $listaction = 'https://brisbanethreads.us2.list-manage.com/subscribe/post?u=69ba35eb9adb1f295d4ffae0d&amp;id=7f89fe8a27';

endif;
?>

<div id="mc_embed_signup" class="newsletter-prompt">
  <form action="<?php echo $listaction ?>;" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll" class="newsletter-signup-form-details">
      <h3>Sign up to our newsletter</h3>
      <div>
        <input type="text" value="" name="FNAME" class="required" id="mce-FNAME" placeholder="First name">
        <input type="text" value="" name="LNAME" class="" id="mce-LNAME" placeholder="Last name">
        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email">
      <div id="mce-responses" class="clear">
          <div class="response" id="mce-error-response" style="display:none"></div>
          <div class="response" id="mce-success-response" style="display:none"></div>
        </div>
        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_69ba35eb9adb1f295d4ffae0d_403c16dcf0" tabindex="-1" value=""></div>
        <input type="submit" value="Sign me up!" name="subscribe" id="mc-embedded-subscribe" class="button">
      </div>
    </div>
  </form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
