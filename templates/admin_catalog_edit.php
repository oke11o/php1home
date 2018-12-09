<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Navbar Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/navbars/navbar.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.css"/>
</head>

<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
    <div class="container">
        <a class="navbar-brand" href="#">PHP Level 1</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09"
                aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample09">
            <?php
            $menu = require('../engine/menu_builder.php');
            include '../templates/chunks/menu_ul.php';
            ?>
            <form class="form-inline my-2 my-md-0" method="get">
                <input name="search" class="form-control" type="text" placeholder="Search" aria-label="Search"
                       value="<?= $search ?? '' ?>">
            </form>
        </div>
    </div>
</nav>

<main role="main" class="site-main main">

    <div class="container">
        <h1 class="jumbotron-heading"><?= $pageH1 ?></h1>
    </div>

    <div class="album py-5 bg-light">
        <div class="container">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Имя</label>
                    <input name="name" type="text" value="<?= $product['name'] ?>" class="form-control" placeholder="Имя" required>
                </div>

                <div class="form-group">
                    <label>Описание</label>
                    <textarea name="description" class="form-control" rows="5" required
                              placeholder="Описание"> <?= $product['description'] ?></textarea>
                </div>
                <div class="form-group">
                    <label>Цена</label>
                    <input name="price" type="text" value="<?= $product['price'] ?>" class="form-control" placeholder="Цена" required>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect2">Категоря товаров</label>
                    <select name="category" class="form-control">
                        <option value="electro" <?php if ($product['category'] == 'electro') {echo 'selected';} ?>>Электро товары</option>
                        <option value="technic" <?php if ($product['category'] == 'technic') {echo 'selected';} ?>>Бытовая техника</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Картинка (<?= $product['image'] ?>)</label>
                    <input name="image" type="file" class="form-control-file">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </div>
            </form>
        </div>
    </div>

</main>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.js"></script>
</body>
</html>

