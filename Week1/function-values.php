<?php require '../includes/header.php'; ?>
<div class="container-fluid mt-5 pt-4">
	<div class="row">
		<div class="col-3">
			<?php require 'includes/side-nav.php'; ?>
		</div>
		<div class="col-9">
			<h1>Function Values</h1>
			<p class="lead">View in console</p>

			<script type="text/javascript">
			/********************************
			* Default Return Value of
			* a Function
			*******************************/

			var getPostTitle = function() {

				console.log( 'Title' );

			};
			var title = getPostTitle();

			console.log( title );


			/********************************
			* Using return in a Function
			* 1.2.22.2
			*
			*******************************/

			var getPostTitle = function() {

				return 'Title';

			};

			var title = getPostTitle();

			console.log( title );





			/********************************
			* Returning values in functions
			* with a variable

			*******************************/

			var getPostTitle = function() {

				var title = 'Title';
				return title;

			};

			var title = getPostTitle();

			console.log( title );


			/********************************
			* Multiple functions returning
			* values
			*******************************/

			var getPostTitle = function() {
				return 'Title';
			};

			var getPostAuthor = function() {
				return 'Zac';
			};

			var displayPostHeading = function() {

				var title = getPostTitle(),
				author = getPostAuthor();

				console.log( title +
					' by ' +
					author );

				};

				displayPostHeading();

				</script>

			</div>
		</div>
	</div>
	<?php require '../includes/footer.php'; ?>
