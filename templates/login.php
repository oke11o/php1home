<!doctype html>
<html lang="en">
<head>
    <?php include ROOT_DIR.'templates/chunks/head.chunk.php' ?>
    <link href="/css/signin.css" rel="stylesheet">
</head>

<body class="">

<div>
    <?php include ROOT_DIR.'templates/chunks/nav.chunk.php' ?>
</div>

<div class="text-center">
    <form class="form-signin form-horizontal" method="post">
        <img class="mb-4" src="https://getbootstrap.com/docs/4.1/assets/brand/bootstrap-solid.svg" alt="" width="72"
             height="72">
        <h1 class="h3 mb-3 font-weight-normal">Авторизуйтесь</h1>

        <?php if ($error): ?>
            <p class=" text-danger"><?= $error ?></p>
        <?php endif; ?>

        <label for="inputEmail" class="sr-only text-danger">Email</label>
        <input type="email" name="email" value="<?= $email ?? '' ?>" id="inputEmail" class="form-control <?php if ($error) {echo 'is-invalid';} ?>" placeholder="Email" required autofocus>

        <label for="inputPassword" class="sr-only">Пароль</label>
        <input type="password" name="password" id="inputPassword" class="form-control  <?php if ($error) {echo 'is-invalid';} ?>" placeholder="Пароль" required>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Запомнить меня
            </label>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>

        <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
</div>
</body>
</html>
