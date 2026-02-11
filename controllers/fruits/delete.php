<?php
if (!Validator::number($_POST['id'])) {
    redirectIfNotFound();
}
$params = ["id" => $_POST['id']];
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $sql = "DELETE FROM fruits WHERE id = :id;";
    $db->query($sql, $params);
    header("location: /");
    exit();
}
