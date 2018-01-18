<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>pilenga shop</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

    <div class="Logo" align="center">
        <img src="png/bn_PILENGA.png">
    </div>

    <div class="menu">

        <ul>
            <li><a href="index2.php">Главная</a></li>
            <li><a href="catalog2.php">Каталог</a></li>
            <li><a href="contacts2.php">Контакты</a></li>
            <li><a href="personal2.php">Личный кабинет</a></li>

        </ul>
    </div>


    <div class="col-4 offset-4">
        <div class="table">
            <fieldset align="center">
                <legend>
                    <h1>Личный кабинет</h1>
                </legend>
                	<table class="lk">
                		<tr>
                			<td>
                				<label><b>Логин</b></label>
                			</td>
                			<td>
                				<input id="Login" type="Login" placeholder="введите логин или почту" minlength="8" maxlength="20" autofocus required>
                			</td>
                		</tr>
                		<tr>
                			<td>
                				<label><b>Пароль</b></label>
                			</td>
                			<td>
                				<input id="pwd" type="pwd" placeholder="введите пароль" minlength="8" maxlength="16" required>
                			</td>
                		</tr>
                	</table>
                <div class="registration">
                    <p><a target="top" href="registration2.php"> Зарегистрироваться</a></p>
            </fieldset>
            </div>
        </div>
        <div class="row">
            <div class="col-2 offset-5">
                <div class="submit">
                    <input type="submit" value="Отправить">
                    <input type="reset" value="Отмена">
                </div>
            </div>
        </div>
        <div class="footer col-12-sm col-12-md"> 
            <p>
                @@@PILENGA SHOP@@@
            </p> 
        </div>




</body>

</html>