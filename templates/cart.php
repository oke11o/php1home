<!doctype html>
<html lang="en">
<head>
    <?php include ROOT_DIR.'templates/chunks/head.chunk.php' ?>
</head>

<body>


<?php include ROOT_DIR.'templates/chunks/nav.chunk.php' ?>

<main role="main" class="site-main main">
    <?php if (isset($pageH1)): ?>
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading"><?= $pageH1 ?></h1>
        </div>
    </section>
    <?php endif; ?>



    <div class="container">
        <?php if($cartTableData): ?>
            <table id="cart" class="table table-hover table-condensed">
                <thead>
                <tr>
                    <th style="width:50%">Product</th>
                    <th style="width:10%">Price</th>
                    <th style="width:8%">Quantity</th>
                    <th style="width:22%" class="text-center">Subtotal</th>
                    <th style="width:10%"></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($cartTableData as $cartItem): ?>
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-sm-2 hidden-xs"><img src="<?= $cartItem['image'] ?>" width="100" alt="..." class="img-responsive"/></div>
                                <div class="col-sm-10">
                                    <h4 class="nomargin"><?= $cartItem['name'] ?></h4>
                                    <p><?= $cartItem['short_description'] ?></p>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price"><?= $cartItem['price'] ?> руб</td>
                        <td data-th="Quantity">
                            <input type="number" class="form-control text-center" value="<?= $cartItem['quantity'] ?>">
                        </td>
                        <td data-th="Subtotal" class="text-center"><?= $cartItem['subtotal'] ?> руб</td>
                        <td class="actions" data-th="">
                            <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                            <form method="post" action="/cart/delete.php">
                                <input type="hidden" name="product_id" value="<?= $cartItem['id'] ?>">
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr class="visible-xs">
                    <td class="text-center"><strong>Total <?= $cartTotalSum ?> руб</strong></td>
                </tr>
                <tr>
                    <td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Обратно в магазин</a></td>
                    <td colspan="2" class="hidden-xs"></td>
                    <td class="hidden-xs text-center"><strong>Total <?= $cartTotalSum ?> руб</strong></td>
                    <td><a href="#" class="btn btn-success btn-block">Оформить <i class="fa fa-angle-right"></i></a></td>
                </tr>
                </tfoot>
            </table>
        <?php else: ?>
            <h3>Ваша корзина пуста</h3>
        <?php endif; ?>
    </div>
</main>

<?php include ROOT_DIR.'templates/chunks/javascript.chunk.php' ?>
</body>
</html>


