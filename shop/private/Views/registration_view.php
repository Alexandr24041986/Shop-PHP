

			<div class="reg">
				<div class="col-4 offset-4">
					<form id ="registr" method="post">
						<div class="table">
											<fieldset>
												<legend><strong>Регистрация</strong></legend>
													<table>
														<tr>
															<td>
																<label for="name">Имя</label>
															</td>
															<td>
																<input id="name" type="text" placeholder="введи имя" name="login" autofocus required>
															</td>
														</tr>
														<tr>
															<td>
																<label for="login">Логин</label>
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
																<input id="pwd" type="password" placeholder="password" required>
															</td>
														</tr>
													</table>
													<div id="memo">Введите данные</div>
													<div class="submit">                    
														<input type="submit" value="Отправить">
														<input type="reset" value="Отмена">                     
													</div>
											</fieldset>
										</div>
									</form>
								</div>
							</div>
						</div>				
			<? include "down_page.php";?>
							
