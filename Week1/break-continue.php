<?php require '../includes/header.php'; ?>
<div class="container-fluid mt-5 pt-4">
	<div class="row">
		<div class="col-3">
			<?php require 'includes/side-nav.php'; ?>
		</div>
		<div class="col-9">
			<h1>Break &amp; Continue</h1>
			<p class="lead">View in console</p>

			<script type="text/javascript">

			/********************************
			* Switch statement with break
			*******************************/

			var user = {
				role: 'editor',
				username: 'zgordon',
				twitter: 'zgordon'

			};

			switch ( user.role ) {
				case 'admin':
				console.log( 'Show admin' );
				break;
				case 'editor':
				console.log( 'Show all posts' );
				break;
				case 'author':
				console.log( 'Show author posts' );
				break;
				case 'contributor':
				console.log( 'Show admin' );
				break;
				default:
				console.log( 'Contact admin' );
			}


			/********************************
			* Break statement in a loop
			*******************************/

			var categories = [ 'JavaScript', 'WordPress', 'API', 'React', 'JSON' ],
			max = categories.length;

			for ( var i = 0; i < max; i++ ) {

				if( 'API' === categories[i] ) break;
				console.log( categories[i] );

			}

			/********************************
			* Continue statement in a loop
			*******************************/

			var categories = [ 'JavaScript', 'WordPress', 'API', 'React', 'JSON' ],
			max = categories.length,
			i;

			for ( i = 0; i < max; i++ ) {

				if( 'API' === categories[i] ) continue;
				console.log( categories[i] );

			}

			</script>

		</div>
	</div>
</div>
<?php require '../includes/footer.php'; ?>
