<?php





?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>pilenga shop</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

    <div class="Logo" align="center" >
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
        	
	   			<form action="#" method="post">
	   				<div class="table">
	   					<fieldset>
	   						<legend>Регистрация</legend>
	   							<table class="reg">
	   								<tr>
	   									<td>
	   										<label for="login">Имя</label>
	   									</td>
	   									<td>
	   										<input id="login" type="text" placeholder="введи логин" name="login" autofocus required>
	   									</td>
	   								</tr>
	   								<tr>
	   									<td>
	   										<label for="email">E-mail</label>	
	   									</td>
	   									<td>
	   										<input id="email" type="email" placeholder="введи email" required>
	   									</td>
	   								</tr>
	   								<tr>
	   									<td>
	   										<label for="pwd">Password</label>
	   									</td>
	   									<td>
	   										<input id="prwd" type="password" placeholder="password" required>
	   									</td>
	   								</tr>
	   								<tr>
	   									<td>
	   										<label for="pwd">Confirm Password</label>
	   									</td>
	   									<td>
	   										<input  id="pwd" type="password" placeholder="подтвердите пароль" required>
	   									</td>
	   								</tr>
	   								<tr>
	   									<td>
	   										 <label for="number_tel:">Number Tel:</label>
	   									</td>
	   									<td>
	   										<input id="number_tel:" type="number tel:" placeholder="введите номер телефона" minlength="7" maxlength="11" required>
	   									</td>
	   								</tr>
	   								<tr>
	   									<td>
	   										<label for="text_area">Оставить сообщение</label>
	   									</td>
	   									<td>
	   										<textarea rows="10" 
						                      id="text_area"
						                      cols="50" 
						                      wrap="on" >
						   				    </textarea>
	   									</td>
	   								</tr>
	   							</table>
	              		<div class="submit">                    
		                    <input type="submit" value="Отправить">
		                    <input type="reset" value="Отмена">                     
	                    </div>
        				</fieldset>
    				</div>
     			</form>
     		</div>
     		<div class="footer col-12-sm col-12-md"> 
                <p>
                    @@@PILENGA SHOP@@@
                </p> 
            </div>
   </body>
</html>
   		
