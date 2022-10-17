<?php $title = "Le blog du Dev Junior by Cédric"; ?>

<?php ob_start(); ?>
<h1>Le blog du Dev Junior by Cédric !</h1>
<p>Une erreur est survenue : <?= $errorMessage ?></p>
<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>
