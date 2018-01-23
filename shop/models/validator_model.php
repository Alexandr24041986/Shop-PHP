<?php
function check_entry_field($str) {
    return !empty(strip_tags(trim($str)));
}


function check_array_data($arr) {
    foreach ($arr as $value) {
        if (!check_entry_field($value)) {
            return false;
        }
    }
    return $arr;
}