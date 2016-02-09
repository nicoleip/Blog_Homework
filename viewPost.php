<?php
use HttpStub\Storage\FileStorage;
require_once __DIR__ . '/config.php';
require_once 'functions.php';

$storage = new FileStorage('posts');

if ($key = getValue($_GET, 'key')) {
	$data = $storage->read($key);
} else {
	$data = [];
}
$data = (array)$data;

require 'views/header.php';
require 'views/viewArticle.php';
require 'views/footer.php';