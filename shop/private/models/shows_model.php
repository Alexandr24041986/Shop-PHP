<?php
include "file_reader_model.php";
function getAllShows() {
    $shows_json = getDataFromFile('..private/files/users_lst.txt');
    $shows_json .= ']';
    $shows = json_decode($shows_json, true);
    return $shows;
}
?>