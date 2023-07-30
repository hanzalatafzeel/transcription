<?php 
session_start();
include 'log_in.php';
include 'sign_up.php';
include 'config.php';

?>
<form class="cd-form" action="" method="post">
					
                    <p class="fieldset">
						<!-- <label class="image-replace cd-email" for="signup-email">E-mail</label> -->
						<input class="full-width has-padding has-border" id="signup-name" name="signup-name" type="text" placeholder="John Smith">
						<span class="cd-error-message" id="email_error">Error message here!</span>
					</p>
                    <p class="fieldset">
						<!-- <label class="image-replace cd-email" for="signup-email">E-mail</label> -->
						<input class="full-width has-padding has-border" id="signup-email" name="signup-email" type="email" placeholder="example@gmail.com">
						<span class="cd-error-message" id="email_error">Error message here!</span>
					</p>

					<p class="fieldset">
						<!-- <label class="image-replace cd-password" for="signup-password">Password</label> -->
						<input class="full-width has-padding has-border" id="signup-password" type="text" name="signup-password" placeholder="password" >
						<a href="#0" class="hide-password">Hide</a>
						<span class="cd-error-message" id="password_error">Error message here!</span>
					</p>

					<p class="fieldset">
						<input type="checkbox" id="accept-terms" required>
						<label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding hide" type="submit" name="signup" id="signup" value="Create account">
					</p>
				</form>
                <script src="validate.js"></script>