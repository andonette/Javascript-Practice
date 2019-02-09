<?php require '../includes/header.php'; ?>
<div class="container-fluid mt-5 pt-4">
	<div class="row">
		<div class="col-3">
			<?php require 'includes/side-nav.php'; ?>
		</div>
		<div class="col-9">
			<header>
				<h1><a href="#link-1" class="special">Esse reprehenderit</a></h1>
				<p>culpa nulla cillum do officia elit culpa dolor.</p>
			</header>
			<hr />
			<section id="main">
				<article class="post featured">
					<h2 class="entry-title"><a href="#" class="special">Rfficia</a></h2>
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
					<h2 class="entry-title">
						<a href="#" class="special">Reprehenderit</a>
					</h2>
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
			// 6. Create an event handler on all links with a class of "special" that prevents the event default and logs the text of the link and the url of the link to the console.

			// getting all links with the class special
			var links = document.querySelectorAll("a.special");
			console.log(links);

			// loop through all the special links
			for (let link of links) {
				// add a click event listener to each of the links
				link.addEventListener("click", handleLinkClick);
			}
			
			function handleLinkClick(event) {
				// store the event.target in a local variable
				var link = event.target;

				// prevent the default behavior
				event.preventDefault();

				// log the links text
				console.log("Text:", link.innerText);
				// log the links href
				console.log("Link:", link.href);
			}
			</script>
			</html>
		</div>
	</div>
</div>
<?php require '../includes/footer.php'; ?>
