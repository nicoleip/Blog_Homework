<?php
use HttpStub\Storage\FileStorage;
require_once __DIR__ . '/config.php';
require_once 'functions.php';

$storage = new FileStorage('posts');

$category = getValue($_GET, 'category') ;

$data = $storage->readAll();

$data = (array)$data;
end($data); //moving the internal pointer to the last element of the array
$last = key($data); //getting the value of the index of the last element of the array 

require 'views/header.php';
require 'views/browse.php';
require 'views/footer.php';