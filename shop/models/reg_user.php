<?php
include "reader_model.php";
include "validator_model.php";

'user_data=' + JSON.stringify(user_data);

function reg_user()
{
	$post = $_POST;
	$user_data = check_data(json_decode($post['user_data']));
	if(!$user_data or (addDataToFile($user_data, '../files/users_lst.txt') === false)) {
		echo 'not add';
		return;
	} else {
		echo 'user added';
		return;
	}
}
reg_user();
 ?>