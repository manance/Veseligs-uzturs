<?php
$title = "Pievieno";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (!Validator::string($_POST['fruit'], min: 2, max: 40)) {
        $errors["fruits"] = "Saturs nedrīkstu būt īsāks par 2 un garāks par 40 rekstzīmēm!";
    }
    if (empty($errors["fruits"])) {
        $sql = "INSERT INTO fruits (`name`) VALUES (:fruit)";
        $params = ["fruit" => $_POST['fruit']];
        $db->query($sql, $params);
        header("location: /");
        exit();
    }
}

require "views/fruits/create.view.php";