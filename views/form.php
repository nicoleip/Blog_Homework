<?php
$articleDate = date("d/m/Y");
$servertime = time ();
$servertime = $servertime + 3600;
$articleTime = date("G:i",$servertime);
?>

<form role="form" method="POST">
	<?php if ($errors):?>
	<div class="alert alert-danger">
		<?= implode('<br>', $errors)?>
	</div>
	<?php endif;?>
	<div class="form-group">		
		<label for="title">Title:</label>	
		<input type="text" class="form-control" value="<?= getValue($data, 'title')?>"name="title"/>
		<input type="hidden" name="articleDate" value="<?= $articleDate ?>" />
		<input type="hidden" name="articleTime" value="<?= $articleTime ?>" />		
	</div>
	<div class="form-group">
		<label for="category">Category</label>
						<select id="category" name="category">
 						<option value="art">Art</option>
						<option value="politics">Politics</option>
						<option value="science">Science</option>
						<option value="news">News</option>
						<option value="tech">Technologies</option>
						<option value="entertainment">Entertainment</option>
						<option value="fashion">Fashion</option>
						<option value="business">Business</option>
					</select>
	</div>	
	<div class="form-group">
		<label for="content">Content</label>
    <textarea name='content' cols='60' rows='10'></textarea>
    </div>
	<div>
		<button type="submit">Submit</button>
	</div>

<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
<script>
        tinymce.init({
            selector: "textarea",
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        });
</script>

</form>