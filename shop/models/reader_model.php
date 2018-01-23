<?
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

function addDataToFile($data, $filename) {
    return file_put_contents($filename, serialize($data), FILE_APPEND);
}
function getAllUsers() {
    $users = getDataFromFile("../files/users_lst.txt");
    return unserialize($users);
}




?>