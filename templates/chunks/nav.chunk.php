
<nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
    <div class="container">
        <a class="navbar-brand" href="#">PHP Level 1</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09"
                aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample09">
            <?php
            $menu = require(ROOT_DIR.'engine/menu_builder.php');
            include ROOT_DIR.'templates/chunks/menu_ul.php';
            ?>
            <form class="form-inline my-2 my-md-0" method="get">
                <input name="search" class="form-control" type="text" placeholder="Search" aria-label="Search"
                       value="<?= $search ?? '' ?>">
            </form>
        </div>
    </div>
</nav>