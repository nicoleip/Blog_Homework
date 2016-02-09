<?php
use HttpStub\Storage\FileStorage;
require_once __DIR__ . '/config.php';
require_once 'functions.php';


$storage = new FileStorage('posts');
$key = getValue($_GET, 'key', 0);
$success = false;
if ($storage->keyExists($key)) {
	$storage->delete($key);
	$success = true;	
}

$message = $success ? 'The article was deleted' : 'Article not found';
header(sprintf('Location: editBlog.php?message=%s&status=%d', $message, $success));