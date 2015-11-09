<?php
/*
Template Name: Sign Up Training & Assessment
*/
get_header(); ?>

		<section role="main" class="schedule signup">
			<div class="two-column">
				<h1>Free Training & Assessment Sign Up</h1>
				<article class="loading">
					<div class="post">

						<?php if (have_posts()): while (have_posts()) : the_post(); the_content(); edit_post_link('[Edit]', '<p>', '</p>'); endwhile; endif; ?>

					</div><!--post-->
					<p id="confirmation">Thanks for your interest in X3 Sports!<br /><br />Your free class fitness assessment & training request has been submitted, and our team will be in touch to contact you to schedule an appointment. We look forward to seeing you soon.</p>
					<form method="post" action="http://google.com">
						<div class="user-info">
							<ul>
								<li>
									<label for="sign-up-first-name">First Name</label>
									<input type="text" id="sign-up-first-name" placeholder="First Name *">
								</li>
								<li>
									<label for="sign-up-last-name">Last Name</label>
									<input type="text" id="sign-up-last-name" placeholder="Last Name *">
								</li>
								<li>
									<label for="sign-up-email">Email *</label>
									<input type="text" id="sign-up-email" placeholder="Email *">
								</li>
								<li>
									<label for="sign-up-phone">Phone *</label>
									<input type="text" id="sign-up-phone" placeholder="Phone *">
								</li>
								<li>
									<label for="membership-status">Membership Status:</label>
									<select id="membership-status">
										<option value="0">Membership Status *</option>
										<option value="0">Current Member</option>
										<option value="0">Former Member</option>
										<option value="0">Not Yet a Member</option>
                  </select>
								</li>								
								<li>
									<label for="sign-up-source">How did you hear about us?</label>
									<select id="sign-up-source">
										<option value="0">How did you hear about us? *</option>
                  </select>
								</li>
								<li>
									<label for="sign-up-location">Select Location</label>
									<select id="sign-up-location">
										<option value="">Select Location *</option>
					          <option value="not sure">Not Sure</option>
									</select>
								</li>
								<li>
									<label for="sign-up-goals">Goals</label>
									<textarea id="sign-up-goals" placeholder="Goals"></textarea>
								</li>
									A trainer will contact you to schedule an appointment.
								</li>
							</ul>
						<h4><input type="submit" value="Submit"></h4>
						<p>
							<span id="validation-required">Some information appears to be missing. Please update the needed fields and try again.</span>
							<span id="validation-phone-length">Please provide a 10 digit phone number.</span>
							<span id="validation-choose-location">Please select a specific location so we may pair you with a trainer.</span>
						</p>
					</form>
<center><font color="#C0C0C0">* Phone and email are for scheduling purposes only. Your privacy is important to us.</font></center>
				</article>
			</div><!--two-column-->
		</section>

<?php get_footer(); ?>
