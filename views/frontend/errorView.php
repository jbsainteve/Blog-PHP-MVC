<?php $title = 'Erreur fatale'; ?>

<?php ob_start(); ?>

    <h1>Erreur fatale</h1>

    <div class="errorMsg">
        <h2>Message : <?= htmlspecialchars($errorMessage) ?> </h2>
    </div>

<?php $content = ob_get_clean(); ?>

<?php require('views/frontend/template.php'); ?>
