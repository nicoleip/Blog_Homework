<div class="container">
<?php
foreach (array_reverse($data) as $key => $posts):?>
		<?php if($posts['category'] == $category):?>
		<div>			
			<a href="viewPost.php?key=<?= $last-$key ?>"><h1><?= $posts['title'] ?></h1></a>
			<h4>Category: <?= $posts['category'] ?></h4>
			<h4>Created on: <?= $posts['articleDate']." ".$posts['articleTime']?></h4>
		</div>		
		<?php endif;?>
		<?php endforeach;?>
		<?php if (empty($posts)):?>		
		<h1 style="color:red">No Articles in this Blog yet!</h1>
		<a href="addPost.php">Be the first to create one! :)</a>
		<?php endif;?>
</div>
