
<div class="reg">
	<div class="col-4 offset-4">
		<form id ="auth_form" method="post">
			<div class="table">
                        <fieldset>
                            <legend>
                                Личный кабинет
                            </legend>
                                <table class="lk">
                                    <tr>
                                        <td>
                                            <label><b>Логин</b></label>
                                        </td>
                                        <td>
                                            <input id="login" type="login" placeholder="введите логин" minlength="8" maxlength="20" autofocus required><br>
                                        </td>
                                    </tr>
                                    <br>
                                    <tr>
                                        <td>
                                            <label><b>Пароль</b></label>
                                        </td>
                                        <td>
                                            <input id="pwd" type="password" placeholder="введите пароль" minlength="8" maxlength="16" required>
                                        </td>
                                    </tr>

                                    <div id="response">Введите данные</div>
                                </table>
                                <br>
                            <div class="registration">
                                <p><a target="top" href="registration"> Зарегистрироваться</a></p>
                            </div>
                            <br>
                            <div class="submit">
                                <input type="submit" value="Отправить">
                                <input type="reset" value="Отмена">
                            </div>  
                        </fieldset>
                    </div>
                </form>    
