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

$errors = [];
if ($_POST) {
	$data = $_POST;
	if (!getValue($data, 'title')) {
		$errors[] = 'Title is required!';
	}

	if (!getValue($data, 'content')) {
		$errors[] = 'Content of the article is required!';
	}

	if (!$errors) {
		if ($key) {
			$storage->update($key, $data);
		} else {
			$storage->insert($data);
			
		}

		header('Location: index.php');
		die;
	}
}

$data = (array)$data;

require 'views/header.php';
require 'views/form.php';
require 'views/footer.php';