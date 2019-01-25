<?php require 'includes/header.php'; ?>
<div class="container-fluid mt-5 pt-4">
	<div class="row">
		<div class="col-3">
			<?php require 'includes/nav.php'; ?>
		</div>
		<div class="col-9">


			<script type="text/javascript">

			/********************************
			* Assignment Operators
			*******************************/

			var username = 'andonette',
			x = 5,
			y = 10;

			// Same as x = x + y
			x += y;
			console.log( x );

			// Same as x = x - y
			x -= y;
			console.log( x );

			// Same as x = x * y
			x *= y;
			console.log( x );

			// Same as x = x / y
			x /= y;
			console.log( x );


			/********************************
			* Comparison Operators
			*******************************/

			var isLoggedIn = true,
			currentPostId = 500,
			userRole = 1;

			if ( true === isLoggedIn ) {
				console.log( 'Show Dashboard' );
			}

			if ( 2 > userRole ) {
				console.log( 'Show Admin Options' );
			}

			if ( 500 <= currentPostId ) {
				console.log( 'Award points' );
			}

			if ( 1 !== userRole ) {
				console.log( 'Not an Admin' );
			}

			/********************************
			* Arithmetic Operators
			*******************************/

			var x = 1;
			//first x will be 1
			console.log( x );
			// Add 1
			x++;
			//now x will be 2
			console.log( x );

			// Subtract 1
			x--;
			//x was 2 so
			//x wil go back to 1 again
			console.log( x );

			//Add 1 after assign
			//this displays x but then adds after it
			//so it still shows 1
			console.log( x++ );
			//so now when we log x again, its 2
			console.log( x );

			//Add 1 before assign
			//this one immediately outputs 3
			console.log( ++x );
			//so when we log x again, there's no change
			console.log( x );

			/********************************
			* Logical Operators
			*******************************/

			var user =  {
				id: 1,
				name: 'Andi',
				role: 'admin',
				loggedIn: true
			},
			post = {
				id: 777,
				status: 'private',
				authorId: 1
			};

			if(  'admin' ===  user.role && post.authorId === user.id ) {

				console.log( 'Edit your posts.' );

			}


			if( true === user.loggedIn || 'private' !== post.status ){

				console.log( 'Show post' );

			}

			/********************************
			* String operators
			*******************************/

			var firstName = 'Andi',
			lastName = 'Wilkinson',
			html = '';

			console.log( 'Andi' + 'Wilkinson' );
			console.log( firstName + lastName );
			console.log( firstName + ' ' + lastName );


			html += '<ul>\n';
			html += '<li>Name</li>\n';
			html += '<li>Email</li>\n';
			html += '<li>Website</li>\n';
			html += '</ul>';

			console.log( html );

			/********************************
			* Conditional or Ternary Operator
			*******************************/

			var post = {
				status: 'draft'
			},
			displayPost;

			displayPost = ( 'published' === post.status ) ? true : false;
			console.log( displayPost );

			</script>

		</div>
	</div>
</div>
<?php require 'includes/footer.php'; ?>
