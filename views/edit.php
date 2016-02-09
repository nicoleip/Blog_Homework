<?php if ($message = getValue($_GET, 'message')):?>
<?php $success = getValue($_GET, 'status');?>
<div class="flash-message alert alert-<?= $success ? 'success' : 'danger'?> alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  	<span aria-hidden="true">&times;</span>
  </button>
  <strong><?= $message ?></strong>
</div>
<?php endif;?>

<table class="table">
	<thead>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Category</th>			
			<th>Date Created</th>
			<th>Remove this article</th>
		</tr>		
	</thead>
	<tbody>
		<?php 
		$i = 1;
		foreach ($data as $key => $posts):?>
		<tr>
			<td><?= $i++ ?></td>
			<td><a href="viewPost.php?key=<?= $key ?>"><?= $posts['title'] ?></a></td>
			<td><?= $posts['category'] ?></td>			
			<td><?= $posts['articleDate']." ".$posts['articleTime']?></td>
			<td>				
				<a href="delete.php?key=<?= $key ?>" data-role="delete-button" class="btn btn-small btn-danger"><span class="glyphicon glyphicon-minus"></span></a>
			</td>
		</tr>
		<?php endforeach;?>
		<?php if (empty($posts)):?>
		<tr>
			<td align="center" colspan="5"><strong>No Articles </strong></td>
		</tr>
		<?php endif;?>
	</tbody>
</table>