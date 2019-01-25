<?php require 'includes/header.php'; ?>
<div class="container-fluid mt-5 pt-4">
	<div class="row">
		<div class="col-3">
			<?php require 'includes/nav.php'; ?>
		</div>
		<div class="col-9">
			<h1>Arrays</h1>
			<p class="lead">View in console</p>


			<script type="text/javascript">

			/********************************
			* Declaring an Array
			*******************************/

			var postIds = [];

			/********************************
			* Declaring an Array with new
			*******************************/

			var postIds = new Array();

			/********************************
			* Declaring and assigning
			*******************************/

			var postIds = [ 1, 2, 3, 4 ],
			combo = [ 1, 'Text', true ];

			console.log( postIds );
			console.log( combo );

			/********************************
			* An Array of Objects
			*******************************/

			var posts = [
				{
					id: 1,
					title: 'Hello World'
				},
				{
					id: 2,
					title: 'Hello JavaScript'
				},
				{
					id: 3,
					title: 'Hello Arrays!'
				}
			];
			console.log( posts );

			/********************************
			* Nested Arrays
			*******************************/

			var postIds = [ 376, 400, 764 ],
			userIds = [ 1, 4, 9 ],
			data = [ postIds, userIds ];

			console.log( data );

			/********************************
			* Nested Arrays verses Objects
			*******************************/

			var postIds = [ 376, 400, 764 ],
			userIds = [ 1, 4, 9 ],
			data = [ postIds, userIds ];

			console.log( data );

			data = {
				postIds: postIds,
				userIds: userIds
			};

			console.log( data );

			/********************************
			* Getting a value based Index
			*******************************/

			var postIds = [ 3, 7, 18, 25 ];

			console.log( postIds[ 0 ] );
			console.log( postIds[ 1 ] );
			console.log( postIds[ 4 ] );

			/********************************
			* Reassigning a value in an
			*******************************/

			var postIds = [ 3, 7, 18, 25 ];

			postIds[ 0 ] = 5;

			console.log( postIds );

			/********************************
			* Adding a value to an Array
			*******************************/

			var postIds = [ 3, 7, 18, 25 ];

			postIds.push( 32 );
			console.log( postIds );

			postIds.push( 64, 78 );
			console.log( postIds );

			postIds.unshift( 32 );
			console.log( postIds );

			/********************************
			* Removing a value from an Array
			*******************************/

			var postIds = [ 3, 7, 18, 25 ];

			//Remove from end of array
			postIds.pop();
			console.log( postIds );

			//Remove from beginning of array
			postIds.shift();
			console.log( postIds );

			//Remove based on index
			//Takes index, number items to be removed
			postIds.splice( 2, 1 );
			console.log( postIds );

			/********************************
			* Getting length of an Array
			*******************************/

			var postIds = [ 3, 7, 18, 25, 38 ];

			// Get the number of items in an Array
			console.log( postIds.length );

			// // Get the last item in an Array
			console.log( postIds[ postIds.length ] );
			console.log( postIds[ postIds.length - 1] );

			/********************************
			* Concatenating Arrays
			*******************************/

			var savedPostIds = [ 3, 7, 18, 25, 38 ],
			newPostIds = [ 77, 84, 93, 101 ],
			postIds;

			postIds = savedPostIds.concat( newPostIds );
			console.log( postIds );

			/********************************
			* Slicing Arrays
			*******************************/

			var postIds = [ 3, 7, 18, 25, 38, 44, 57, 64, 72 ],
			selectedPosts;

			selectedPostIds = postIds.slice( 2, 7 );
			console.log( selectedPostIds );

			/********************************
			* Sorting Arrays
			*******************************/

			var postTitles = [
				'JavaScript',
				'WordPress',
				'Arrays'
			],
			postIds = [ 7, 44, 13, 21, 71 ];

			// Sort Text Ascending
			postTitles.sort();
			console.log( postTitles );

			// Sort Text Descending
			postTitles.reverse();
			console.log( postTitles );


			// Does not Sort as we would expect
			postIds.sort();
			console.log( postIds );

			// Sort Numbers Ascending
			postIds.sort( function( a, b ) {return a - b;} );
			console.log( postIds );

			// Sort Numbers Descending - Incorrect
			postIds.sort( function( a, b ) {return a + b;} );
			console.log( postIds );


			// FIX: Sort Numbers Descending - Correct
			postIds.sort( function( a, b ) {return b - a;} );
			console.log( postIds );

			/********************************
			* .forEach
			*******************************/

			var postTitles = [
				'JavaScript',
				'WordPress',
				'Arrays'
			];

			postTitles.forEach( function( title ) {

				console.log( 'Title: ' + title );

			});

			/********************************
			* .isArray
			*******************************/

			var postIds =  [ 7, 44, 13, 21 ],
			postId = 7;

			console.log( Array.isArray( postIds ) );
			console.log( Array.isArray( postId ) );

			/********************************
			* Convert Arrays to Strings
			*******************************/
			var postTitles = [
				'JavaScript',
				'WordPress',
				'Arrays'
			],
			userFields = 'Name, Email, Website',
			url = 'http://domain.com/learn/javascript/#content';


			// Convert an Array to a String
			console.log( postTitles.toString() );

			// Convert a String to an Array
			console.log( userFields.split( ',' ) );

			// Convert a String to an Array
			console.log( url.split( '/' ) );

		</script>

	</div>
</div>
</div>
<?php require 'includes/footer.php'; ?>
