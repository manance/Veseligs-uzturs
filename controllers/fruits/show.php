<?php

if (!Validator::number($_GET['id'])) {
    redirectIfNotFound();
}
$sql = "SELECT * FROM fruits WHERE id = :id";
$params = ["id" => $_GET['id']];
$fruit = $db->query($sql, $params)->fetch();

if (!$fruit) {
    redirectIfNotFound();
}
$title = $fruit['name'];
require "views/fruits/show.view.php";
