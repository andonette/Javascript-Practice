<?php require '../includes/header.php'; ?>
<div class="container-fluid mt-5 pt-4">
	<div class="row">
		<div class="col-3">
			<?php require 'includes/side-nav.php'; ?>
		</div>
		<div class="col-9">

			<header>
				<h1>2. Log </h1>
			</header>
			<hr />
			<main id="root"></main>

			<script>
			// 2. Create a JSON string of 3 post objects then
			// render them to the page with the following markup
			// ```
			// <article class="post">
			//   <h2 class="entry-title"><a href="#">Title</a></h2>
			//   <div class="entry-excerpt">
			//     <p>Excerpt here...</p>
			//   </div>
			// </article>
			// ```
			var postsJson = `
			[
				{
					"id": 1,
					"title": "My awesome post",
					"content": "My awesome content."
				}, {
					"id": 2,
					"title": "My awesome seccond post",
					"content": "My awesome content."
				}, {
					"id": 3,
					"title": "My awesome third post",
					"content": "My awesome content."
				}
			]
			`;
			function createArticle( title, content, link) {
				// create the necessary elements
				var article = document.createElement('article');
				var heading = document.createElement('h2');
				var headingLink = document.createElement('a');
				var entryExcerpt = document.createElement('div');
				var entryExcerptText = document.createElement('p');
				// add classes to their respective elements
				article.classList.add('post');
				heading.classList.add('entry-title');
				entryExcerpt.classList.add('entry-excerpt');
				// set the href attribute
				headingLink.href = link;
				// set the innerText & innerHTML
				headingLink.innerText = title;
				entryExcerptText.innerHTML = content;
				// append all children to their respective parents
				heading.appendChild(headingLink);
				entryExcerpt.appendChild(entryExcerptText);
				article.appendChild(heading);
				article.appendChild(entryExcerpt);
				// return the new article
				return article;
			}
			function addToPage( element ) {
				// select the element with the id root
				var root = document.querySelector('#root');

				// append the passed in element to the root
				root.appendChild(element);
			}
			// parse the JSON and assign the result to our posts variable
			var posts = JSON.parse(postsJson);
			// loop over all the posts
			for (var post of posts) {
				// create an article using our createArticle function and assign it to a local variable
				var article = createArticle(post.title, post.content, '#');

				// add that new article to the page
				addToPage(article);
			}
			</script>

		</div>
	</div>
</div>
<?php require '../includes/footer.php'; ?>
