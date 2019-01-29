<?php require '../includes/header.php'; ?>
<div class="container-fluid mt-5 pt-4">
	<div class="row">
		<div class="col-3">
			<?php require 'includes/side-nav.php'; ?>
		</div>
		<div class="col-9">
			<header>
				<h1><a href="#link-1">Esse reprehenderit</a></h1>
				<p>culpa nulla cillum do officia elit culpa dolor.</p>
			</header>
			<hr />
			<section id="main">
				<article class="post featured">
					<h2 class="entry-title"><a href="#">Rfficia</a></h2>
					<div class="entry-content">
						<p>Elit esse incididunt proident veniam.</p>
					</div>
				</article>
				<article class="post featured">
					<h2 class="entry-title"><a href="#">Aliquip</a></h2>
					<div class="entry-content">
						<p>Culpa nulla cillum do officia elit culpa dolor.</p>
					</div>
				</article>
				<article id="start-here" class="post">
					<h2 class="entry-title"><a href="#">Eiusmod</a></h2>
					<div class="entry-content">
						<p>Cillum ullamco tempor reprehenderit enim.</p>
					</div>
				</article>
				<article class="post">
					<h2 class="entry-title"><a href="#">Reprehenderit</a></h2>
					<div class="entry-content">
						<p>Et ipsum dolor ullamco voluptate duis ipsum.</p>
					</div>
				</article>
				<article class="post">
					<h2 class="entry-title"><a href="#">Velit</a></h2>
					<div class="entry-content"><p>Sunt aute ut in aliquip.</p></div>
				</article>
			</section>

			<script>
			// 2. Select the element with an id of "start-here."
			//This logs out the div with the ID of 'start here'
			var startHere = document.getElementById('start-here');
			console.log(startHere)
			// Then select the syblings of the element,

			// the parent of the element,
			//The parent element is 'main'
			var startHereParent = startHere.parentNode;
			console.log(startHereParent);
			// the parent of the parent of the element,
			//This gets my col-9
			var startHereGrandaddy = startHere.parentNode.parentNode;
			console.log(startHereGrandaddy);
			// and the children of the element and save them as variables.
			//get all the nodes including text

			//my solution
			var siblings = startHereParent.childNodes;
			console.log(siblings);

			var startHereKids = startHere.childNodes;
			console.log(startHereKids);

			var startHereKids = startHere.children;
			console.log(startHereKids);
			// Then log them all to the console.
			</script>
		</div>
	</div>
</div>
<?php require '../includes/footer.php'; ?>
