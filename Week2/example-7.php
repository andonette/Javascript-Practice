<?php require '../includes/header.php'; ?>
<div class="container-fluid mt-5 pt-4">
	<div class="row">
		<div class="col-3">
			<?php require 'includes/side-nav.php'; ?>
		</div>
		<div class="col-6" id="example-7">
			<h1>Welcome!</h1>

			<div class="content-container">

				<p>Please fill out the form below!</p>

				<form action="" method="get" id="main-contact" name="main-contact">

					<input type="hidden" name="secret" value="1n0skWt8fmZa9">

					<fieldset>
						<legend>Contact Information</legend>
						<div class="form-row">
							<div class="col-6">
								<div class="form-group">
									<label for="fullName">Your Full <abbr title="Name">N</abbr>ame:</label>
									<input class="form-control" type="text" id="fullName" name="fullName" value="" placeholder="First and last name" tabindex="1" accesskey="n"   autofocus="true" autocomplete="name" draggable="true">
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<label for="subject"><abbr title="Subject">S</abbr>ubject:</label>
									<select class="form-control" name="subject" tabindex="2" accesskey="s">
										<option value="project">I want to work with you on a project</option>
										<option value="question">I have a question</option>
										<option value="other">Other..</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="message"><abbr title="Subject">M</abbr>essage:</label>
							<textarea class="form-control" name="message" placeholder="Your message here" tabindex="3" accesskey="m" spellcheck="true"></textarea>

						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="contact-preference" value="email"  tabindex="4" checked="checked">
							<label class="form-check-label" for="contact-preference">Email:</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" id="contact-preference-phone" name="contact-preference" value="phone" tabindex="5">
							<label class="form-check-label" for="contact-preference-phone">Phone</label>
						</div>
						<div class="form-row">
							<div class="col-6">
								<div class="form-group">
									<label for="email">Email:</label>
									<input class="form-control" type="email" name="email" value="" autocomplete="email" required="true">
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<label for="phone">Phone:</label>
									<input class="form-control" type="tel" name="name" value="" autocomplete="tel">
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-4">
								<div class="form-group">
									<label for="date">Best Contact Date:</label>
									<input class="form-control" type="date" name="date" value="">
								</div>
							</div>
							<div class="col-4">
								<div class="form-group">
									<label for="date">Best Contact Time:</label>
									<input class="form-control" type="time" name="date" value="">
								</div>
							</div>
							<div class="col-4">
								<div class="form-group">
									<label for="datetime">Best Date and Time:</label>
									<input class="form-control" type="datetime-local" name="datetime" value="">
								</div>
							</div>
						</div>

						</fieldset>
						<fieldset>
							<legend>Additional Information</legend>

							<div class="form-group">
								<label for="recommend">Preferred Volume</label>
								<input class="form-control" type="range" name="recommend" min="1" max="10" value="1">
							</div>
							<div class="form-group">
								<label for="extra-info">Please upload any additional information we may need (.pdf only):</label>
								<input type="file" accept=".pdf" name="extra-info" value="">
							</div>
							<div class="form-group">
								<label for="cant-touch-this">Can't Touch This</label>
								<input class="form-control" type="input" name="cant-touch-this" value="Cannot edit" readonly>
							</p>
							</div>
							<div class="form-check">
								<label class="form-check-label" for="newsletter">Subscribe to Newsletter:</label><br>
								<input class="form-check-input" type="checkbox" name="newsletter" value="yes" checked tabindex="6"> Yes
							</p>
							</div>
								<input class="btn btn-primary" type="reset" name="reset" value="Reset">
								<input class="btn btn-primary" type="submit" name="submit" value="Submit" tabindex="7">
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
