<?php require '../includes/header.php'; ?>
<div class="container-fluid mt-5 pt-4">
	<div class="row">
		<div class="col-3">
			<?php require 'includes/side-nav.php'; ?>
		</div>
		<div class="col-9">
			<h1>Function Paramaters</h1>
			<p class="lead">View in console</p>

			<script type="text/javascript">
			/********************************
			* A Function with Single Parameter
			*******************************/

			var post = {
				id: 1,
				title: 'Function Parameters'
			};

			var displayTitle = function( title ) {

				console.log( title );

			};

			displayTitle( post.title );

			/********************************
			* Function Calls
			* with Different Parameters
			*******************************/

			var posts = [
				{
					id: 1,
					title: 'Function Parameters'
				},
				{
					id: 2,
					title: 'Parameters are so flexible!'
				}
			];


			var displayTitle = function( title ) {

				console.log( title  );

			};

			for( var post of posts ) {

				displayTitle( post.title );

			}

			/********************************
			* Function w Multiple Parameters
			* And Multiple Function Calls
			*******************************/

			var title = 'Post about Parameters',
			author = 'Zac',
			recommendedPost = 'Learn JavaScript';


			var displayPost = function( title, author, recommendedPost ) {

				console.log( title + ' by ' + author );
				console.log( 'Read next: ' + recommendedPost );

			};

			displayPost( title, author, recommendedPost );

			/********************************
			* Function w Multiple Parameters
			* And Multiple Function Calls
			*******************************/

			var post = {
				id: 1,
				title: 'Post about Parameters'
			},
			author = {
				id: 1,
				displayName: 'Zac'
			},
			relatedPosts = [
				'Learn JavaScript',
				'JavaScript Functions',
				'Multiple Parameters'
			];

			var displayTitle = function( title ) {
				console.log( '<h2>' + title + '<h2>'  );
			}

			var displayAuthor = function( author ) {
				console.log( '<p>By: ' + author + '<p>'  );
			}

			var displayRelatedPosts = function( relatedPosts ) {

				console.log( '<p>Related Posts</p>' );
				console.log( '<ul>' );
				for ( var post of relatedPosts ) {
					console.log( '<li>' + post + '</li>' );
				}
				console.log( '</ul>' );

			}

			var displayPost = function( title, author, relatedPosts ) {

				displayTitle( title );
				displayAuthor( author );
				displayRelatedPosts( relatedPosts );

			};

			displayPost( post.title, author.displayName, relatedPosts );

			</script>

		</div>
	</div>
</div>
<?php require '../includes/footer.php'; ?>
