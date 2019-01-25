<?php require 'includes/header.php'; ?>
	<div class="container-fluid mt-5 pt-4">
		<div class="row">
			<div class="col-3">
			<?php require 'includes/nav.php'; ?>
			</div>
			<div class="col-9">
				<h1>Numbers</h1>
				<p class="lead">View in console</p>

				<script type="text/javascript">

				var a = 4,
					b = 3,
					c;

					console.log( 'a = ' + a );
					console.log( 'b = ' + b );
					console.log( 'c = ' + c );

					c = a + b;
					console.log( 'a + b =  ' + c );

					c = a - b;
					console.log( 'a - b =  ' + c );

					c = a * b;
					console.log( 'a * b =  ' + c );

					c = a / b;
					console.log( 'a / b =  ' + c );

					c = a % b;
					console.log( 'a % b =  ' + c );


					var a = 4,
						b = '3',
						c;

					//this treats 4 as a string so outputs 43
					c = a + b;
					console.log( c );


					var a = 4,
					    b = '3',
					    c = '3.333',
					    sum;

					sum = a + b;
					console.log( sum );

					//this tells us to treat b as an integer
					sum = a + parseInt( b );
					console.log( sum );

					//same as above but converts to a float
					sum = a + parseFloat( c );
					console.log( sum );


					var a = 3.333;


					console.log( a );
					//fixes to two decimal places
					//this is also a string
					console.log( a.toFixed( 2 ) );

					//same result but its a number.
					console.log( parseFloat( a.toFixed( 2 ) ) );


					var a = 3,
					    b = '4';

					//this is a handy way to check
					//what youre getting
					console.log( typeof a );
					console.log( typeof b );


					//When something's not a number
					console.log( parseInt( 'tK3Vz9' ) );
					console.log( 1 / '#fff' );

					//finds pi
					console.log( Math.PI );
					//square root
					console.log( Math.sqrt( 144 ) );
					//power of
					console.log( Math.pow( 13, 13 ) );

					var  g = 3.33333333,
						 h = 3.77777777;

					//dounds
					console.log( Math.round( g ) );
					console.log( Math.round( h ) );

					var i = Number.POSITIVE_INFINITY,
					    j = 1000000000,
					    k = -222;

					 console.log( Math.max( g, h, i, j, k ) );
					 console.log( Math.min( g, h, i, j, k ) );





				</script>



			</div>
		</div>
	</div>
	<?php require 'includes/footer.php'; ?>
