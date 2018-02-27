<?php
namespace Alex\Shop\Models;

class FileModel
{
    function addDataToFile($data, $filename)
    {
        $from_file = file_get_contents($filename);
        $from_file = unserialize($from_file);
        $from_file[] = $data;
        return file_put_contents($filename, serialize($from_file));
    }

    function getDataFile($filename)
    {
        $users = $this->getDataFromFile($filename);
        return unserialize($users);
    }

    function getDataFromFile($filename)
    {
        $fp = fopen($filename, "r");
        if ($fp) {
            while (($data = fread($fp, 4096)) !== false) {
                return $data;
            }

            fclose($fp);
        }
        return false;
    }
}

//    function imageUpload($path, $upload_path)
//    {
//        $name = $path["file"]["name"];
//        $type = $path["file"]["type"];
//        $size = $path["file"]["size"];
//        $temp = $path["file"]["tmp_name"];
//        $error = $path["file"]["error"];
//
//        if ($error > 0) {
//            return "Error file! code $error.";
//        } else {
//            if ($type === "image/jpeg" || $type === "image/png") {
//                if ($size > 2097152) {
//                    return " file too big!";
//                } else {
//                    move_uploaded_file($temp, $upload_path . $name);
//                    return "Upload complete!";
//                }
//            } else {
//                ;
//                return "Format not allowed!";
//            }
//        }
//    }


//function getDataFromFileShort($filename) {
//    return file_get_contents($filename);
//}


//
//function getAllUsers() {
//    $users = getDataFromFileShort("../private/files/users_lst.txt");
//    return unserialize($users);
//}



?>