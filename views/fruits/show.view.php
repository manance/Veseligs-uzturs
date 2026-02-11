<?php ob_start() ?>

<div class="container">
    <div class="container_content">
        <h1><?= htmlspecialchars($fruit['name']) ?></h1>

        <a class="edit" href="/edit?id=<?= $fruit['id'] ?>">Rediģē</a>

        <form class="delete_form" action="/delete" method="POST">
            <button class="delete" name="id" value="<?= $fruit['id'] ?>">DELETE</button>
        </form>
    </div>
</div>

<?php $content = ob_get_clean() ?>
<?php require "./views/components/layout.php"; ?>