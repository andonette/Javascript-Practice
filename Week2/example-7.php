<?php require '../includes/header.php'; ?>
<div class="container-fluid mt-5 pt-4">
	<div class="row">
		<div class="col-3">
			<?php require 'includes/side-nav.php'; ?>
		</div>
		<div class="col-9" id="example-7">
			<h1>Welcome!</h1>

			<div class="content container">

				<p>Please fill out the form below!</p>

				<form action="" method="get" id="main-contact" name="main-contact">

					<input type="hidden" name="secret" value="1n0skWt8fmZa9">

					<fieldset>
						<legend>Contact Information</legend>
						<p>
							<label for="fullName">Your Full <abbr title="Name">N</abbr>ame:</label>
							<input type="text" id="fullName" name="fullName" value="" placeholder="First and last name" tabindex="1" accesskey="n"   autofocus="true" autocomplete="name" draggable="true">
						</p>
						<p>
							<label for="subject"><abbr title="Subject">S</abbr>ubject:</label>
							<select name="subject" tabindex="2" accesskey="s">
								<option value="project">I want to work with you on a project</option>
								<option value="question">I have a question</option>
								<option value="other">Other..</option>
							</select>
						</p>
						<p>
							<label for="message"><abbr title="Subject">M</abbr>essage:</label>
							<textarea name="message" placeholder="Your message here" tabindex="3" accesskey="m" spellcheck="true"></textarea>
						</p>
						<p>

							<label for="contact-preference">Contact Preference:</label>
							<input type="radio" name="contact-preference" value="email"  tabindex="4" checked="checked"> Email<br>

							<label for="contact-preference-phone">
								<input type="radio" id="contact-preference-phone" name="contact-preference" value="phone" tabindex="5"> Phone</label>

							</p>
							<p>
								<label for="email">Email:</label>
								<input type="email" name="email" value="" autocomplete="email" required="true">
							</p>
							<p>
								<label for="phone">Phone:</label>
								<input type="tel" name="name" value="" autocomplete="tel">
							</p>
							<p>
								<label for="date">Best Contact Date:</label>
								<input type="date" name="date" value="">
							</p>
							<p>
								<label for="date">Best Contact Time:</label>
								<input type="time" name="date" value="">
							</p>
							<p>
								<label for="datetime">Best Date and Time:</label>
								<input type="datetime-local" name="datetime" value="">
							</p>
						</fieldset>
						<fieldset>
							<legend>Additional Information</legend>
							<p>
								<label for="recommend">Preferred Volume</label>
								<input type="range" name="recommend" min="1" max="10" value="1">
							</p>
							<p>
								<label for="extra-info">Please upload any additional information we may need (.pdf only):</label>
								<input type="file" accept=".pdf" name="extra-info" value="">
							</p>
							<p>
								<label for="cant-touch-this">Can't Touch This</label>
								<input type="input" name="cant-touch-this" value="Cannot edit" readonly>
							</p>
							<p>
								<label for="newsletter">Subscribe to Newsletter:</label>
								<input type="checkbox" name="newsletter" value="yes" checked tabindex="6"> Yes
							</p>
							<p>
								<input type="reset" name="reset" value="Reset">
								<input type="submit" name="submit" value="Submit" tabindex="7">
							</p>

						</fieldset>
					</form>


					<p>I will get back to you right away.</p>

				</div>

				<div class="content">

					<p>To learn more, please <a href="https://javascriptforwp.com/">visit my site</a>.</p>

				</div>
				<footer class="bg-dark text-light content">
					<div class="container">
						<div class="row">
							<div class="col-4">
								<p>Footer outro..</p>
							</div>
						</div>
					</div>
				</footer>

				<?php require '../includes/footer.php'; ?>
				<script src="app-7.js"></script>