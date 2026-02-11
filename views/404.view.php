<?php ob_start(); ?>

<h1><strong>EROR 404</strong></h1>
<p>Nevarējām atrast šo lapu!</p>

<?php $content = ob_get_clean(); ?>
<?php require "./views/components/layout.php"; ?>