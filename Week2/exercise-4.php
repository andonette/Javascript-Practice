<?php require '../includes/header.php'; ?>
<div class="container-fluid mt-5 pt-4">
	<div class="row">
		<div class="col-3">
			<?php require 'includes/side-nav.php'; ?>
		</div>
		<div class="col-9">
			<script>
			//create a variable called article
			//select col 9 (The element this is in)
			var article = document.querySelector('.col-9'),
			//create a second var called html
			html;
			//here's the html for the article
			//but we have appended it to the var nicely
			html = '<article class="post">';
			html += '<h2 class="entry-title"><a href="#">Title</a></h2>';
			html += '<div class="entry-excerpt">';
			html += '<p>Excerpt here...</p>';
			html += '</div>';
			html += '</article>';
			//finally variable article outputs the variable html
			//including all its outer HTML 
			article.outerHTML = html;

			/*
			4. Create the following markup using createElement() and createTextNode() and then append it to the page.

			<article class="post">
			<h2 class="entry-title"><a href="#">Title</a></h2>
			<div class="entry-excerpt">
			<p>Excerpt here...</p>
			</div>
			</article>
			*/
			</script>
		</div>
	</div>
</div>
<?php require '../includes/footer.php'; ?>
