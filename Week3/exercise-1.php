<?php require '../includes/header.php'; ?>
<div class="container-fluid mt-5 pt-4">
	<div class="row">
		<div class="col-3">
			<?php require 'includes/side-nav.php'; ?>
		</div>
		<div class="col-9">

			<header>
				<h1>1. Create a JSON string of 3 post objects</h1>
			</header>
			<hr />
			<main id="root"></main>

			<script>
			// 1. Create a JSON string of 3 post objects.
			// create the JSON string and store it in a variable
			var posts = `
			[
				{
					"id": 1,
					"title": "My awesome post",
					"content": "My awesome content."
				}, {
					"id": 1,
					"title": "My awesome post",
					"content": "My awesome content."
				}, {
					"id": 1,
					"title": "My awesome post",
					"content": "My awesome content."
				}
			]
			`;
			// log the parsed json to the console
			console.log(JSON.parse(posts))
			</script>




		</div>
	</div>
</div>
<?php require '../includes/footer.php'; ?>
