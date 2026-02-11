<?php ob_start(); ?>
<h1>Augļi</h1>
<form>
    <input name='search_query' value="<?= $_GET['search_query'] ?? "" ?>" />
    <button>Meklēt</button>
</form>
<?php if (count($fruits) == 0) { ?>
    <p>❌ Nav atrasts neviens ieraksts! ❌</p>
<?php } else { ?>
    <ul>
        <?php foreach ($fruits as $fruit) { ?>
            <li><a href="/show?id=<?= $fruit['id'] ?>"><?= htmlspecialchars($fruit['name']) ?></a></li>
        <?php } ?>
    </ul>
<?php } ?>
<?php $content = ob_get_clean(); ?>
<?php require "./views/components/layout.php"; ?>