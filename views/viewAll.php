<div id="container">
	<article id=main>
	<h1> Articles in this Blog:</h1>
<?php
foreach (array_reverse($data) as $key => $posts):?>
		<div>			
			<a href="viewPost.php?key=<?= $last-$key ?>"><h1><?= $posts['title'] ?></h1></a>
			<h4>Category: <?= $posts['category'] ?></h4>
			<h4>Created on: <?= $posts['articleDate']." ".$posts['articleTime']?></h4>
		</div>
		<?php endforeach;?>
		<?php if (empty($posts)):?>		
		<h1 style="color:red">No Articles in this Blog yet!</h1>
		<a href="addPost.php">Be the first to create one! :)</a>		
		<?php endif;?>
	</article>
	<article id="categories">
	<h3> Browse by category:</h3>
		<ul id="list">
			<li value="art"><a href="browseByCategory.php?category=art">Art</a></li>
			<li value="politics"><a href="browseByCategory.php?category=politics">Politics</a></li>
			<li value="science"><a href="browseByCategory.php?category=science">Science</a></li>
			<li value="news"><a href="browseByCategory.php?category=news">News</a></li>
			<li value="tech"><a href="browseByCategory.php?category=tech">Technologies</a></li>
			<li value="entertainment"><a href="browseByCategory.php?category=entertainment">Entertainment</a></li>
			<li value="fashion"><a href="browseByCategory.php?category=fashion">Fashion</a></li>
			<li value="business"><a  href="browseByCategory.php?category=business">Business</a></li>
		</ul>
</article>
</div>
