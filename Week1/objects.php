<?php require '../includes/header.php'; ?>
<div class="container-fluid mt-5 pt-4">
	<div class="row">
		<div class="col-3">
			<?php require 'includes/side-nav.php'; ?>
		</div>
		<div class="col-9">
			<h1>Objects</h1>
			<p class="lead">View in console</p>

			<script type="text/javascript">

			// use empty curly braces
			// to declare a new object

			var post = {};

			//fill the object like so
			post = {
				id: 2,
				title: 'Hello JavaScript'
			};

			/********************************
			* Declaring and assigning
			* an Object
			*******************************/

			// or you can do it all at once
			var post = {
				id: 2,
				title: 'Hello JavaScript'
			};

			console.log( post );

			/********************************
			* Reassigning and adding
			* new Properties
			*******************************/

			// you can also change and add comtents like so
			post.title = 'Hello JavaScript!';
			post.slug = 'hello-javascript';

			console.log( post );

			/********************************
			* Getting an Object or Property
			*******************************/

			console.log( post );
			console.log( post.title );

			/********************************
			* Console logging objects
			* with strings
			*******************************/

			console.log( 'Post: ' + post );
			//you need to concat with a comma in console.log
			console.log( 'Post: ', post );

		</script>

	</div>
</div>
</div>
<?php require '../includes/footer.php'; ?>
