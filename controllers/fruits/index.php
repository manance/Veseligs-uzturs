<?php

$sql_query = "SELECT * FROM fruits";
$params = [];
if (isset($_GET['search_query']) && trim($_GET['search_query']) != "") {
    $sql_query .= " WHERE name LIKE :search";
    $params["search"] = "%" . $_GET['search_query'] . "%";
    
}
$fruits = $db->query($sql_query, $params)->fetchAll();
require "./views/fruits/index.view.php";
