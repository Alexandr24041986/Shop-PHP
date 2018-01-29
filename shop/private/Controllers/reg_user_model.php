<?php
include "file_reader_model.php";
include "validator_model.php";



function reg_user(){
	$post = $_POST;
	$user_data = check_array_data(json_decode ($post['user_data']));
	if(!$user_data or (addDataToFile($user_data, '../files/users_lst.txt') === false)) {
		echo 'not add';
		return;
	} else {
		echo 'user added';
		return;
	}
    echo 'user add';
    return;
}
	
reg_user();
 ?>