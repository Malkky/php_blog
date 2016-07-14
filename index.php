<?php include 'includes/header.php' ; ?>
<?php
	//Create DB Object
	$db = new Database(); //this is how we create an object in PHP

	//Create query
	$query = "SELECT * FROM posts ORDER BY id DESC";

	//Run Query
	$posts = $db->select($query); //we got the $query from above

	//Create query
	$query = "SELECT * FROM categories";

	//Run Query
	$categories = $db->select($query); //we got the $query from above
?>
<?php if ($posts) :?>
	<?php while($row = $posts->fetch_assoc()) : ?>
		<div class="blog-post">
			<h2 class="blog-post-title"><?php echo $row['title']; ?></h2>
			<p class="blog-post-meta"><?php echo formatDate($row['date']); ?> by <a href="#"><?php echo $row['author']; ?></a></p>
				<?php echo shortenText($row['body']); ?>
			<a class="readmore" href="post.php?id=<?php echo urlencode($row['id']); ?>">Read More</a>
		</div><!-- /.blog-post -->
	<?php endwhile; ?>


<?php else : ?>
	<p>There are no posts</p>
<?php endif; ?> <!-- endif needs ; always -->
<?php include 'includes/footer.php' ; ?>