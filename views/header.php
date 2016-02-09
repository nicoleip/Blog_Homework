<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Blog</title>
		<link rel="stylesheet" href="vendor/twbs/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/twbs/bootstrap-theme.min.css">	
		<style>
		p{
		font-size: 25px;
		}
		.container{
		background-image: url("../images/leather.png");
		}
	
article{
float: left;
}
#main{
width:80%;
}
#categories{
width: 20%;
}

#list li{
font-size: 20px;
cursor: pointer;
}

		</style>

	</head>
	<body>

	<div class="container">	
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-user"></span></a>
		    </div>
		
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      
		      <ul class="nav navbar-nav navbar-right">
		      <li <?php if (PHP_SELF == 'index.php'):?>class="active" <?php endif;?>><a href="index.php">View Blog</a></li>
		        <li <?php if (PHP_SELF == 'editBlog.php'):?> class="active" <?php endif;?>><a href="editBlog.php">Edit Blog</a></li>
		        <li <?php if (PHP_SELF == 'addPost.php'):?>class="active" <?php endif;?>><a href="addPost.php">Add New Post</a></li>
		         
		        
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		        