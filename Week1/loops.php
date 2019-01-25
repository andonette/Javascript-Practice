<?php require '../includes/header.php'; ?>
<div class="container-fluid mt-5 pt-4">
	<div class="row">
		<div class="col-3">
			<?php require 'includes/side-nav.php'; ?>
		</div>
		<div class="col-9">
			<h1>Loops</h1>
			<p class="lead">View in console</p>

			<script type="text/javascript">

			/********************************
			* The For Loop
			*******************************/

			for ( var count = 1; count < 6; count++ ) {

				console.log( 'Display post #' + count );

			}

			/********************************
			* For Loop i variable
			*******************************/

			for ( var i = 0; i < 5; i++ ) {

				console.log( 'Display post #' + i );

			}

			/********************************
			* For Loop
			* Multiple Initial Expressions
			*******************************/

			var postIds = [ 1, 7, 14, 34, 88, 117 ];


			for ( var i = 0, max = postIds.length; i < max; i++ ) {

				console.log( 'Display post #' + postIds[i] );

			}

			for ( var i = 0; i < postIds.length; i++ ) {

				console.log( 'Display post #' + postIds[i] );

			}


			/********************************
			* For Loop
			* Multiple Conditional Conditions
			*******************************/

			var site1PostIds = [ 1, 2, 3, 4, 5, 6 ],
			site2PostIds = [ 1, 2, 3 ];


			for ( var i = 0,
				max1 = site1PostIds.length,
				max2 = site2PostIds.length;
				i < max1 && i < max2;
				i++ ) {

					console.log( 'Site 1: Post #' + site1PostIds[i] );
					console.log( 'Site 2: Post #' + site2PostIds[i] );

				}


				/********************************
				* For Loop
				* Multiple Increment Expressions
				*******************************/

				var orderIds = [ 1, 2, 3, 4, 5 ],
				stock = 100;
				console.log( 'Stock: ' + stock );
				for ( var i = 1, max = orderIds.length; i <= max; i++, stock-- ) {
					stock--
					console.log( 'Processing Order#' + i );
					console.log( 'Stock: ' + stock );

				}

				/********************************
				* Initial expressions declared before loop,
				* conditional statement placed inside loop,
				* iterator statement included at end of loop
				*******************************/

				// var i = 1;
				//
				// for ( ; ; ) {
				//
				//   if ( i <= 5 ) {
				//
				//     console.log( 'Display post: ' + i );
				//
				//   }
				//
				//   i++;
				//
				// }

				/********************************
				* An Infinite Loop
				*******************************/

				// for( i = 0, max = 10; i < max; max++ ) {

				//   console.log( 'Hello' );

				// }

				/********************************
				* Do While Loop
				*******************************/

				// do runs loop once first
				// then checks condition
				var postIds = [ 1, 2, 37, 44, 88, 122 ],
				i = 0,
				max = postIds.length;

				do {

					console.log( postIds[i] );
					i++;

				} while ( i < max );


				/********************************
				* Do While Loop
				* Still runs at least once
				*******************************/

				var loggedIn = false;

				do {

					console.log( 'Display admin bar' );

				} while ( true === loggedIn );


				/********************************
				* Do While Loop
				* With Window

				*******************************/

				var signedUp = false,
				askAgain = true;


				// do {
				//
				//   // Wait some time
				//   signedUp = window.confirm( 'Sign Up!' );
				//
				// } while ( false === signedUp && true === askAgain );


				/********************************
				* While Loop
				*******************************/

				var postsToDisplay = 10;

				while ( postsToDisplay > 0 ) {

					console.log( 'Display post' );
					postsToDisplay--;

				}




				</script>

			</div>
		</div>
	</div>
	<?php require '../includes/footer.php'; ?>
