<?php require '../includes/header.php'; ?>
<div class="container-fluid mt-5 pt-4">
	<div class="row">
		<div class="col-3">
			<?php require 'includes/side-nav.php'; ?>
		</div>
		<div class="col-9">
			<h1>Switch</h1>
			<p class="lead">View in console</p>

			<script type="text/javascript">

			/********************************
			* Switch Statements
			*******************************/

			var user = {
				role: 'editor',
				username: 'Andonette',
				twitter: 'andonette'

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
			* Switch Statement
			*******************************/

			var user = {
				role: 'editor',
				username: 'Andonette',
				twitter: 'andonette'

			};

			switch ( user.role ) {
				case 'admin':
				console.log( 'Show admin' );
				//break;
				case 'editor':
				console.log( 'Show all posts' );
				//break;
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
			* Chaining Multiple Cases
			* in a Switch Statement
			*******************************/

			var user = {
				role: 'editor',
				username: 'Andonette',
				twitter: 'andonette'

			};

			switch ( user.role ) {
				case 'admin':
				case 'editor':
				case 'author':
				console.log( 'Show available posts' );
				break;
				case 'contributor':
				console.log( 'Show admin' );
				break;
				default:
				console.log( 'Contact admin' );
			}

			/********************************
			* Switch v. Else If
			* Things Switch cannot do
			*******************************/


			//Switch statements cannot test multiple conditions

			if ( 'admin' === user.role && 'zgordon' === user.username ) {

				console.log( 'Show Dashboard' );

			} else if ( 'admin' === user.role && 'dev' === user.username ) {

				console.log( 'Show Source' );

			} else if ( 'editor' === user.role && '' !== user.twitter ) {

				console.log( 'Please share this post!' );

			}

			// Switch statements always check for type

			var x = 2;

			if ( '2' == x ) {

				console.log( x );

			} else if ( 4 == x ) {

				console.log( x );

			}


			/********************************
			* Example of Else If that
			* Switch Statement could do
			*******************************/

			var user = {
				role: 'editor',
				username: 'Andonette',
				twitter: 'andonette'

			};

			if ( 'admin' === user.role ) {

				console.log( 'Show admin' );

			} else if ( 'editor'  ===  user.role ) {

				console.log( 'Show all posts' );

			} else if ( 'author'  ===  user.role ) {

				console.log( 'Show author posts' );

			} else {

				console.log( 'Show contact admin' );
			}

			/********************************
			* Possible WP use case
			* for Switch Statement
			*******************************/

			var user = {
				role: 'editor',
				username: 'zgordon',
				twitter: 'zgordon'

			};

			switch ( user.role ) {
				case 'admin':
				case 'editor':
				case 'author':
				case 'custom1':
				case 'custom2':
				case 'custom3':
				case 'custom4':
				case 'custom5':
				console.log( 'Show admin' );
				break;
				case 'contributor':
				console.log( 'Show submit post form' );
				break;
				default:
				console.log( 'Please login' );
			}

			</script>

		</div>
	</div>
</div>
<?php require '../includes/footer.php'; ?>
