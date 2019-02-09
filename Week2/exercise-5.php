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
			<section id="main">
				<h2>Posts</h2>
				<ul class="posts">
					<li class="post">
						<h2 class="entry-title"><a href="#">Aliquip</a></h2>
						<div class="entry-content">
							<p>Culpa nulla cillum do officia elit culpa dolor.</p>
						</div>
					</li>
				</ul>
			</section>
			<script>
			// 5. Create a clone of the list item and append it to the end of the list.

			// get the first ul element with the class of posts
			var list = document.querySelector("ul.posts");
			console.log(list);

			// get the first child of the list
			var listItem = list.children[0];
			console.log(listItem);

			// copy the list item deeply (meaning including all chiildren)
			var copyListItem = listItem.cloneNode(true);
			console.log(copyListItem);

			// append the copy to the end of the list
			list.appendChild(copyListItem);
			</script>
		</div>
	</div>
</div>
<?php require '../includes/footer.php'; ?>
