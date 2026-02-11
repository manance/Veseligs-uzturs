<?php ob_start() ?>

<h1>Izveido jaunu emuāra ierakstu</h1>
<form method="POST">
    <label>Emuāra nosaukums: <input name="fruit" value="<?= $_POST['fruit'] ?? '' ?>"></label>
    <button>Iesniegt</button>
    <?php if (isset($errors['fruits'])) { ?>
        <p><?= $errors['fruits']; ?></p>
    <?php } ?>
</form>

<?php $content = ob_get_clean() ?>
<?php require "./views/components/layout.php"; ?>