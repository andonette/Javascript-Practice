<?php require 'includes/header.php'; ?>
	<div class="container-fluid mt-5 pt-4">
		<div class="row">
			<div class="col-3">
			<?php require 'includes/nav.php' ?>
			</div>
			<div class="col-9">

				<script type="text/javascript">

					//declare a variable
					var username;

					//assign a value
					username = 'andonette'

					//log it to the console
					console.log( username );

					//You can declare and assign at the same time
					var username = 'andonette'

					//log it to the console
					console.log( username );

					//this one is undefined
					var user;
					console.log( user );

					//boolean valye
					var isLoggedIn = true;

					// Yoda style
					if ( true === isLoggedIn ) {

					console.log( 'Show admin area' );

					}

					//strings
					var title = 'Hello JavaScript!';
					var content = 'Lorem to the Ipsum';

					//combining strings
					var content = 'Lorem ' + ' ipsum';

					var post = title + " - " + content;

					console.log( post );

					//this is multiple variables being created
					//you do not need to say var every time
					// if you separate them by line
					//with a comma
					var title = 'Hello JavaScript!',
						content = 'Lorem ' + 'ipsum',
						post;

					post = title + " - " + content;

					console.log( post );


					var title = 'Hello, my world!',
						content = 'Lorem',
						spacey = ' username ';

					//logs second char in a string
					console.log( title.charAt( 1 ) );

					//slices from start to end
					//note use of -1
					console.log( title.slice( 0, -1 ) );

					//slices from 2
					console.log( title.slice( 2 ) );

					//concatenates 2 strings
					console.log( content.concat( ' ', title ) );

					//trims the space in the spacey var
					console.log( spacey.trim() );


				</script>


			</div>
		</div>
	</div>
	<?php require 'includes/footer.php'; ?>
