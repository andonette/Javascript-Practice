<?php require '../includes/header.php'; ?>
<div class="container-fluid mt-5 pt-4">
	<div class="row">
		<div class="col-3">
			<?php require 'includes/side-nav.php'; ?>
		</div>
		<div class="col-9">
			<h1>Object Methods</h1>
			<p class="lead">View in console</p>

			<script type="text/javascript">

			/********************************
			 * Object with Properties
			 *******************************/

			var post = {
			  id: 2,
			  title: 'Hello JavaScript'
			};

			console.log( post );
			console.log( post.title );

			/********************************
			 * Object with Properties
			 *******************************/

			var post = {
			  id: 2,
			  title: 'Hello JavaScript',
			  displayTitle: function() {
			    console.log( post.title );
			  }
			};

			post.displayTitle();

			/********************************
			 * Dot method declaration
			 *******************************/

			var post = {
			  id: 2,
			  title: 'Hello JavaScript'
			};

			post.displayTitle = function() {
			    console.log( post.title );
			};

			post.displayTitle();


			/********************************
			 * Method with parameters and
			 * return value
			 *******************************/

			var post = {
			  id: 2,
			  title: 'Hello JavaScript',
			  getTitleMarkup: function( tag ) {

			    var markup = '';

			    markup += '<' + tag + '>';
			    markup += post.title;
			    markup += '</' + tag + '>';

			    return markup;

			  }
			};

			var titleHTML = post.getTitleMarkup( 'h2' );

			console.log( titleHTML );



			/********************************
			 * this in a Method
			 *******************************/

			var post = {
			  id: 2,
			  title: 'Hello JavaScript'
			};

			post.displayTitle = function() {
			    console.log( this.title );
			};

			post.displayTitle();




			/********************************
			 * this in a Method
			 *******************************/

			var post = {
			  id: 2,
			  slug: 'hello-javascript',
			  title: 'Hello JavaScript',
			};

			post.getTitleLink = function() {

			  var markup = '';

			  markup += '<a href="' + this.slug + '">';
			  markup += this.title;
			  markup += '</a>';

			  return markup;

			};

			var title = post.getTitleLink();

			console.log( title );


				</script>

			</div>
		</div>
	</div>
	<?php require '../includes/footer.php'; ?>
