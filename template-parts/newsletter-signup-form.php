<?php
/**
 * Template part for newsletter signup
 *
 * @package threadsnetwork
 */

?>

<div id="mc_signup">
	<form method="post" action="#mc_signup" id="mc_signup_form">
		<input type="hidden" id="mc_submit_type" name="mc_submit_type" value="js">
		<input type="hidden" name="mcsf_action" value="mc_submit_signup_form">
		<input type="hidden" id="_mc_submit_signup_form_nonce" name="_mc_submit_signup_form_nonce" value="7148a6a12f">

		<div class="mc_form_inside">
			<h3>Sign up to our newsletter</h3>

			<div class="updated" id="mc_message">
			</div><!-- /mc_message -->

			<div class="mc_merge_var">
				<label for="mc_mv_EMAIL" class="mc_var_label mc_header mc_header_email">Email Address<span class="mc_required">*</span></label>
				<input type="text" size="18" placeholder="" name="mc_mv_EMAIL" id="mc_mv_EMAIL" class="mc_input">
			</div><!-- /mc_merge_var -->
			<div class="mc_merge_var">
				<label for="mc_mv_FNAME" class="mc_var_label mc_header mc_header_text">First Name<span class="mc_required">*</span></label>
				<input type="text" size="18" placeholder="" name="mc_mv_FNAME" id="mc_mv_FNAME" class="mc_input">
			</div><!-- /mc_merge_var -->
			<div class="mc_merge_var">
				<label for="mc_mv_LNAME" class="mc_var_label mc_header mc_header_text">Last Name</label>
				<input type="text" size="18" placeholder="" name="mc_mv_LNAME" id="mc_mv_LNAME" class="mc_input">
			</div><!-- /mc_merge_var -->

			<div class="mc_signup_submit">
				<input type="submit" name="mc_signup_submit" id="mc_signup_submit" value="Sign me up!" class="button">
			</div><!-- /mc_signup_submit -->

		</div><!-- /mc_form_inside -->
	</form><!-- /mc_signup_form -->
</div>
