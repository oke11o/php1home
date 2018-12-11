<!doctype html>
<html lang="en">
<head>
    <?php include ROOT_DIR.'templates/chunks/head.chunk.php' ?>
</head>

<body>


<?php include ROOT_DIR.'templates/chunks/nav.chunk.php' ?>

<main role="main" class="site-main main">

    <div class="container">
        <h1 class="jumbotron-heading"><?= $pageH1 ?></h1>
    </div>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <?php
                $products = getProducts($mysqlConnect);
                foreach ($products as $product):
                    ?>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-header">
                                <?= $product['name'] ?> <?= $product['price'] ?> $
                            </div>
                            <img class="card-img-top"
                                 src="<?= $product['image'] ?>"
                                 alt="<?= $product['name'] ?>" style="height: 225px; width: 100%; display: block;"
                                 data-holder-rendered="true">
                            <div class="card-body">
                                <p class="card-text"><?= $product['description'] ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="product.php?id=<?= $product['id'] ?>" type="button" class="btn btn-sm btn-outline-secondary">Посмотреть</a>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Купить</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                endforeach;
                ?>
            </div>
        </div>
    </div>

</main>

<?php include ROOT_DIR.'templates/chunks/javascript.chunk.php' ?>
</body>
</html>

