<?php
$title = "Rediģē";

if (!Validator::number($_GET['id'])) {
    redirectIfNotFound();
}
$sql = "SELECT * FROM fruits WHERE id = :id";
$params = ["id" => $_GET['id']];
$fruit = $db->query($sql, $params)->fetch();
if (!$fruit) {
    redirectIfNotFound();
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (!Validator::string($_POST['fruit'], min: 2, max: 40)) {
        $errors["fruits"] = "Saturs nedrīkstu būt īsāks par 2 un garāks par 40 rekstzīmēm!";
    }
    if (empty($errors["fruits"])) {
        $sql = "UPDATE fruits SET `name` = :content WHERE id = :id;";
        $params = ["content" => $_POST['fruit'], "id" => $fruit['id']];
        $db->query($sql, $params);
        header("location: /");
        exit();
    }
}
require "views/fruits/update.view.php";
