<nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
    <div class="container">
        <a class="navbar-brand" href="/">PHP Level 1</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09"
                aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample09">
            <?php
            $menu = require(ROOT_DIR.'engine/menu_builder.php');
            include ROOT_DIR.'templates/chunks/menu_ul.php';
            ?>

            <nav class="my-2 my-md-0 mr-md-3">
                <?php if ($user): ?>
                    <a href="#"><?= $user['email'] ?></a>
                    <a href="/logout.php">Выйти</a>
                <?php else: ?>
                    <a href="/login.php">Войти</a>
                <?php endif; ?>
            </nav>
        </div>
    </div>
</nav>

<?php if (isset($_SESSION['success_message'])): ?>
    <div class="text-success">
        <?= $_SESSION['success_message']; ?>
    </div>
    <?php
    unset($_SESSION['success_message']);
endif;
?>