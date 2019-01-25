<?php require 'includes/header.php'; ?>
<div class="container-fluid mt-5 pt-4">
	<div class="row">
		<div class="col-3">
			<?php require 'includes/nav.php'; ?>
		</div>
		<div class="col-9">
			<h1>If Else</h1>
			<p class="lead">View in console</p>

			<script type="text/javascript">

			/********************************
			* If Statements with == and ===
			*******************************/

			var loggedIn = false;


			if ( false === loggedIn ) {

			console.log( 'Please login' );

			}


			loggedIn = 0;

			if ( false == loggedIn ) {

			console.log( 'Please login' );

			}

			/********************************
			* If statement with no =
			*******************************/

			//using one equal sign is weak
			// its just reading a string
			var loggedIn = 'false';

			if ( loggedIn ) {

			console.log( 'Welcome!' );

			}

			/********************************
			* Yoda style declarations
			*******************************/

			var username = 'yoda';

			if (  'yoda' === username ) {

				console.log( 'Proceed Yoda' );

			}


			username = 'rey';

			if ( username = 'yoda' ) {

				console.log( 'Proceed Yoda' );

			}

			// if ( 'yoda' = username ) {
			//
			// 	console.log( 'Proceed Yoda' );
			//
			// }

			</script>

		</div>
	</div>
</div>
<?php require 'includes/footer.php'; ?>
