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
                <ul>

                    <?php
                    $products = getProducts($mysqlConnect);
                    foreach ($products as $product) :
                        ?>
                        <li>
                            <a href="/admin/catalog/edit.php?id=<?= $product['id'] ?>">
                                [<?= $product['id'] ?>]
                                <?= $product['name'] ?>
                            </a>
                            <span><?= $product['price'] ?></span>
                            <?php
                            if ($product['deleted_at']) :
                                echo 'Product deleted at '.$product['deleted_at'];
                            else:
                                ?>
                                <form method="post" action="/admin/catalog/delete.php">
                                    <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                                    <button type="submit" class="btn btn-danger">Удалить</button>
                                </form>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <div class="container">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Имя</label>
                    <input name="name" type="text" class="form-control" placeholder="Имя" required>
                </div>

                <div class="form-group">
                    <label>Описание</label>
                    <textarea name="description" class="form-control" rows="5" required
                              placeholder="Описание"></textarea>
                </div>
                <div class="form-group">
                    <label>Цена</label>
                    <input name="price" type="text" class="form-control" placeholder="Цена" required>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect2">Категоря товаров</label>
                    <select name="category" class="form-control">
                        <option value="electro">Электро товары</option>
                        <option value="technic">Бытовая техника</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Картинка</label>
                    <input name="image" type="file" class="form-control-file">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </div>
            </form>
        </div>
    </div>

</main>

<?php include ROOT_DIR.'templates/chunks/javascript.chunk.php' ?>
</body>
</html>

