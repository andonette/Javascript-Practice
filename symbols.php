<?php require 'includes/header.php'; ?>
<div class="container-fluid mt-5 pt-4">
	<div class="row">
		<div class="col-3">
			<?php require 'includes/nav.php'; ?>
		</div>
		<div class="col-9">
			<h1>Symbols</h1>
			<p class="lead">View in console</p>

			<script type="text/javascript">

			/********************************
			* Symbols
			*******************************/
			//declare an object
			var post = {
				id: 2,
				slug: 'hello-js',
				title: 'Hello JavaScript!'
			},
			//symbols prevent conflicts
			IS_ACTIVE = Symbol();

			post[IS_ACTIVE] = true;

			console.log( post[IS_ACTIVE] );

			/********************************
			* Symbols as keys
			*******************************/

			UNIQUE_KEY = Symbol();

			post.key = UNIQUE_KEY;

			console.log( post.key );



		</script>



	</div>
</div>
</div>
<?php require 'includes/footer.php'; ?>
