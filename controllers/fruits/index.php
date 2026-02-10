<?php

$sql_query = "SELECT * FROM fruits";
$params = [];
if (!Validator::string($_GET['search_query'], max: 40)) {
    $sql_query .= " WHERE content LIKE :search";
    $params["search"] = "%" . $_GET['search_query'] . "%";
}

$fruits = $db->query($sql_query, $params)->fetchAll();
require "./views/fruits/index.view.php";
