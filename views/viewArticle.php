
<div id="container">		
		<div>			
			<h1><?= $data['title'] ?></h1>
			<h4>Category: <?= $data['category'] ?></h4>
			<h4>Created on: <?= $data['articleDate']." ".$data['articleTime']?></h4>
			<p> Content:<br><?= $data['content']?> </p>
		</div>		
		
		<?php if (empty($data)):?>		
		<h1 style="color:red">Article Not Found!</h1>		
		<?php endif;?>

</div>
