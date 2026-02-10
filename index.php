<?php

require_once "Fruits.php";
require_once "Validator.php";
require_once "functions.php";
$config = require "config.php";

$db = new Fruits($config['database']);

require "router.php";
?>