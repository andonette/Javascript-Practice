<?php require '../includes/header.php'; ?>
<div class="container-fluid mt-5 pt-4">
	<div class="row">
		<div class="col-3">
			<?php require 'includes/side-nav.php'; ?>
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

			/********************************
			* If Else Statement
			*******************************/

			var loggedIn = true;

			if ( true === loggedIn ) {

				console.log( 'Show post' );

			} else {

				console.log( 'Please login' );

			}


			/********************************
			* Else If Statement
			*******************************/

			var user = {
				role: 'editor',
				username: 'test'
			};

			if ( 'admin' === user.role ) {

				console.log( 'Show admin' );

			} else if ( 'editor'  ===  user.role ) {

				console.log( 'Show all posts' );

			} else if ( 'author'  ===  user.role ) {

				console.log( 'Show author posts' );

			} else {

				console.log( 'Please contact admin' );

			}

			/********************************
			* Unrecommended If Statement
			*******************************/

			var loggedIn = false;

			// One line statements without curly braces

			if ( true === loggedIn )
			console.log( 'Show post' );
			else
			console.log( 'Please login' );


			// Missing spaces
			if(true===loggedIn){
				console.log('Show Post');
			}else{
				console.log('Please login');
			}



			</script>

		</div>
	</div>
</div>
<?php require '../includes/footer.php'; ?>
