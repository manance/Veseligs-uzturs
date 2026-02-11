<?php ob_start() ?>

<h1><?= htmlspecialchars($fruit['name']) ?></h1>

<a href="/edit?id=<?= $fruit['id'] ?>">Rediģēt</a>

<form action="/delete" method="POST">
    <button name="id" value="<?= $fruit['id'] ?>">Dzēst</button>
</form>

<?php $content = ob_get_clean() ?>
<?php require "./views/components/layout.php"; ?>