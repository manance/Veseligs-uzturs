<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? "All fruits" ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php require "views/components/header.php"; ?>
    <?= $content; ?>
</body>

</html>