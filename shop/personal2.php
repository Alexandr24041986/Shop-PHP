<?php include "header.php";?>
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
                                <div id="memo">Введите данные</div>
                            </table>
                        <div class="registration">
                            <p><a target="top" href="registration2.php"> Зарегистрироваться</a></p>
                        </div>
                        <div class="submit">
                        
                            <input type="submit" value="Отправить">
                            <input type="reset" value="Отмена">
                        </div>
                        
                    </fieldset>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2 offset-5">
                        
                    </div>
                </div>
        </div>
        
    </body>

    </html>