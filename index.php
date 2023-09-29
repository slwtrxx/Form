<?php

require_once __DIR__ . '/incs/data.php';
require_once __DIR__ . '/incs/functions.php';

if (!empty($_POST)) {
    debug($_POST);
    $fields = load($fields);
    debug($fields);
    if ($errors = validate($fields)) {
        debug($errors);
    } else {
        echo 'OK';
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <br>
            <form method="post">
                <div class="form-group">
                    <label for="name">Имя</label>
                    <br>
                    <input name="name" type="text" class="form-control" id="name">
                </div>
                <br>
                <div class="form-group">
                    <label for="email">Email</label>
                    <br>
                    <input name="email" type="email" class="form-control" id="email">
                </div>
                <br>
                <div class="form-group">
                    <label for="address">Адрес</label>
                    <br>
                    <input name="address" type="text" class="form-control" id="address">
                </div>
                <br>
                <div class="form-group">
                    <label for="phone">Телефон</label>
                    <br>
                    <input name="phone" type="text" class="form-control" id="phone">
                </div>
                <br>
                <div class="form-group">
                    <label for="comment">Комментарий</label>
                    <br>
                    <textarea name="comment" id="comment" rows="3" class="form-control"></textarea>
                </div>
                <br>
                <div class="form-check">
                    <input type="checkbox" name="agree" class="form-check-input" id="agree">
                    <label class="form-check-label" for="agree">
                        Соглашаюсь с обработкой персональных данных</label>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    </form>
</div>
</body>
</html>