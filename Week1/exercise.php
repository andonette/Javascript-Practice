<?php require '../includes/header.php'; ?>
<div class="container-fluid mt-5 pt-4">
	<div class="row">
		<div class="col-3">
			<?php require 'includes/side-nav.php'; ?>
		</div>
		<div class="col-9">
			<h1>Function Values</h1>
			<p class="lead">View in console</p>


			<script>
			// 1. Create a variable with your name
			//variables must be declared using the var keyword
			var name = 'andonette';
			// 2. Create a function that logs your name with console.log()
			//function is declared by the function keyword
			//followed by the function name
			//function can be called by name and any arguments.
			function log( name ) {
				console.log( name );
			}
			log( name );
			// 3. Create an object called "me" that includes properties for your first and last names as well as other properties for your website and social media
			//This is like an array, but its using curly brace
			//note the colon syntax instead of equals signs
			var me = {
				firstName: 'andonette',
				lastName:  'Wilkinson',
				website:   'https://andiwilkinson.co.uk',
			}
			// 4. Create a boolean variable called loggedIn (set to either true or false)
			//boolean is stored as a variable
			var loggedIn = true;
			// 5. Write a conditional statement that logs "Logged In" when loggedIn is true and "Please login" when loggedIn is false
			if ( true === loggedIn ) {
				console.log( 'Logged In' );
			} else {
				console.log( 'Please Login' );
			}
			// 6. Create an array called ids filled with numbers that could represent post ids
			var ids = [
				1, 2, 3, 4, 5
			];
			// 7. Loop over the ids and log them all out
			// this is pretty much a foreach loop but its back to front, and
			// so it uses of instead of as.
			for (var id of ids){
				console.log(id);
			}
			// 8. Create an array of post objects.  Include an id, title and content property on each object
			var posts = [
				{
					id:      1,
					title:   'How To Be Awesome at Everything',
					content: 'Lorem Ipsum Cupcake Hipsters'
				},
				{
					id:      2,
					title:   'How To Be Awesome at Something',
					content: 'Lorem Ipsum Cupcake Shoes'
				},
				{
					id:      3,
					title:   'How To Be Awesome at Nothing',
					content: 'Lorem Ipsum Cupcake Banana'
				},

			];
			console.log( posts )
			// 9. Loop over the array of posts and log out the title of each one
			for ( var post of posts ) {
				console.log( post.title )
			}
			// 10. Create a function that will take an array of posts and log out the title and content of each post.
			function postInfo() {
				for (var post of posts) {
					console.log( post.title);
					console.log(post.content)
				}
			}
			postInfo();
			</script>


		</div>
	</div>
</div>
<?php require '../includes/footer.php'; ?>
