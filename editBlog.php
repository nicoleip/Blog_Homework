<?php
use HttpStub\Storage\FileStorage;
require_once __DIR__ . '/config.php';
require_once 'functions.php';

$storage = new FileStorage('posts');
$data = $storage->readAll();

require 'views/header.php';
require 'views/edit.php';
require 'views/footer.php';