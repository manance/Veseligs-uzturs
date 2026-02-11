<?php ob_start() ?>

<h1>Rediģē augli</h1>
<form action="" method="POST">
    <label>Auglis: <input name="fruit" value="<?= htmlspecialchars($_POST['fruit'] ?? $fruit['name']) ?>"></label>
    <input name="id" value="<?= $fruit['id'] ?>" type="hidden">
    <button>Iesniegt</button>
    <?php if (isset($errors['fruits'])) { ?>
        <p><?= $errors['fruits']; ?></p>
    <?php } ?>
</form>

<?php $content = ob_get_clean() ?>
<?php require "./views/components/layout.php"; ?>