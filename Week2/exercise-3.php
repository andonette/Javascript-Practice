<?php require '../includes/header.php'; ?>
<div class="container-fluid mt-5 pt-4">
	<div class="row">
		<div class="col-3">
			<?php require 'includes/side-nav.php'; ?>
		</div>
		<div class="col-9">
			<header>
				<h1><a href="#link-1">Esse reprehenderit</a></h1>
				<p>culpa nulla cillum do officia elit culpa dolor.</p>
			</header>
			<section id="main">
				<h2>Form</h2>
				<form action="">
					<p>
						<label for="name">Name</label>
						<input type="text" name="name" id="name" value="" />
					</p>
					<p>
						<label for="email">Email</label>
						<input type="text" name="email" id="email" value="" />
					</p>
					<p><input type="submit" value="Sign Up" /></p>
				</form>
			</section>
		</body>
		<script>
		// 3. Set the text for the h2 to "Newsletter Signup,"
		var h2 = document.querySelector('h2');
		h2.innerText = "Newsletter Signup"
		// set the value for the name input field to your name,
		var myName = document.getElementById('name');
		myName.value = "Andi Wilkinson"
		// set the value for the email input field to your email.
		var email = document.getElementById('email');
		email.value = "andi@madebyfactory.com"
		</script>
	</div>
</div>
</div>
<?php require '../includes/footer.php'; ?>
