<?php require '../includes/header.php'; ?>
<div class="container-fluid mt-5 pt-4">
	<div class="row">
		<div class="col-3">
			<?php require 'includes/side-nav.php'; ?>
		</div>
		<div class="col-9">
			<h1>For In & For Of</h1>
			<p class="lead">View in console</p>

			<script type="text/javascript">

			/********************************
 * For In Loops
 *******************************/



/********************************
 * For In Loop
 * With an object
 *******************************/


var post = {
      id: 1,
      slug: 'for-in',
      title: 'For In'
    };


for( var prop in post ) {
  console.log( post[prop] );
}

/********************************
 * For In Loop
 * With an object
 * Showing keys and values

 *******************************/

var post = {
      id: 1,
      slug: 'for-in',
      title: 'For In'
    };

for( var prop in post ) {

  console.log(  prop + ': ' + post[prop] );

}

/********************************
 * For In Loop
 * with an array
 *******************************/


var postIds = [ 1, 2, 34, 55, 77 ];

for(var prop in postIds ) {
  console.log(  prop + ': ' + postIds[prop] );
}


/********************************
 * For Of Loop
 *******************************/

var postIds = [ 1, 3, 10, 15 ];

for( var id of postIds ) {

  console.log( id );

}


/********************************
 * For Of Loop
 * Showing Keys
 *******************************/

var postIds = [ 1, 3, 10, 15 ];

postIds.author = 'zgordon';

for( var i of postIds ) {

  console.log( i );

}

console.log( '---' );

for( var i in postIds ) {

  console.log( i );

}



			</script>

		</div>
	</div>
</div>
<?php require '../includes/footer.php'; ?>
