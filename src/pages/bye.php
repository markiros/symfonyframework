<!-- example.com/src/pages/bye.php -->

<?php $name = $request->get('name', 'World') ?>

Bye <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?>