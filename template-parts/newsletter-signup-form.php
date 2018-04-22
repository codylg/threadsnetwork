<?php
/**
 * Template part for newsletter signup
 *
 * @package threadsnetwork
 */

?>

<div id="mc_signup" class="newsletter-prompt">
	<form method="post" action="#mc_signup" id="mc_signup_form">
		<input type="hidden" id="mc_submit_type" name="mc_submit_type" value="js">
		<input type="hidden" name="mcsf_action" value="mc_submit_signup_form">
		<input type="hidden" id="_mc_submit_signup_form_nonce" name="_mc_submit_signup_form_nonce" value="7148a6a12f">

		<div class="newsletter-signup-form-details mc_form_inside">
			<h3>Sign up to our newsletter</h3>

			<div>
				<input type="email" required placeholder="Your email *" name="mc_mv_EMAIL" id="mc_mv_EMAIL" class="mc_input" />
				<input type="text" required placeholder="First name *" name="mc_mv_FNAME" id="mc_mv_FNAME" class="mc_input" />
				<input type="text" placeholder="Last name" name="mc_mv_LNAME" id="mc_mv_LNAME" class="mc_input" />

				<input type="submit" name="mc_signup_submit" id="mc_signup_submit" value="Sign me up!" class="button">
			</div>

		</div><!-- /mc_form_inside -->
	</form><!-- /mc_signup_form -->
</div>
