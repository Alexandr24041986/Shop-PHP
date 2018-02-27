<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><? echo $title; ?></title>
  <script src="/static/js/jquery-3.2.1.js"></script>
  <link rel="stylesheet" type="text/css" href="static/css/style.css">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>
        <div class="wrapper">
            <div class="col-12 col-12-sm col-12-md">
                <div class="Logo" align="center">
                    <img src="static/images/png/bn_PILENGA.png">
                </div>
            </div>

            <div class="menu">
              <ul>
                <li><a href="/">Главная</a></li>
                <li><a href="catalog">Каталог</a></li>
                <li><a href="contacts">Контакты</a></li>
                <li><a href="personal">Личный кабинет</a></li>
              </ul>
            </div>
            <? require_once $view; ?>
            
            <script src="/static/js/checkInput.js"></script>
            <script src="/static/js/auth.js"></script>
            <script src="/static/js/index.js"></script>
            <script src="/static/js/registration.js"></script>
</body>
</html>  