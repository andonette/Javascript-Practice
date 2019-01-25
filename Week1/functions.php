<?php require '../includes/header.php'; ?>
<div class="container-fluid mt-5 pt-4">
	<div class="row">
		<div class="col-3">
			<?php require 'includes/side-nav.php'; ?>
		</div>
		<div class="col-9">
			<h1>Functions</h1>
			<p class="lead">View in console</p>

			<script type="text/javascript">
			/********************************
			* Function Declaration and
			* Function Call
			*******************************/

			// Function Declaration
			function displayPost() {

				console.log( 'Post Title' );
				console.log( 'Post Content' );

			}

			// Function Call
			displayPost();

			/********************************
			* An Anonymous Function
			*******************************/

			// function() {

			//   console.log( 'Post' );

			// }

			/********************************
			* A Named Function
			*******************************/

			// Function Declaration
			function displayPost() {

				console.log( 'Post Title' );
				console.log( 'Post Content' );

			}

			// Function Calls
			displayPost();
			displayPost();
			displayPost();

			/********************************
			* A Function Expression
			*******************************/

			var displayPost = function() {

				console.log( 'Post' );

			};

			displayPost();

			/********************************
			* Function Calls Inside a Function
			*******************************/

			var displayTitle = function() {

				console.log( 'Functions' );

			};

			var displayExcerpt = function() {

				console.log( 'Read more..' );

			};

			var displayPost = function() {

				displayTitle();
				displayExcerpt();

			};

			displayPost();

			</script>

		</div>
	</div>
</div>
<?php require '../includes/footer.php'; ?>
