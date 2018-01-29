<?php
function getDataFromFile($filename){
    $fp = fopen($filename, "r");
    if($fp){
        while(($data = fread($fp, 4096)) !== false){
            return $data;
        }
        
        fclose($fp);
    }
    return false;
}

function getDataFromFileShort($filename) {
    return file_get_contents($filename);
}

function addDataToFile($data, $filename) {
    $from_file = file_get_contents($filename);
    $from_file = unserialize($from_file);
    $from_file[] = $data;
    return file_put_contents($filename, serialize($from_file));
}

function getAllUsers() {
    $users = getDataFromFileShort("../private/files/users_lst.txt");
    return unserialize($users);
}



?>