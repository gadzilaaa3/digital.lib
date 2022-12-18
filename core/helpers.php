<?php

function validate($data){
    if (is_array($data)){
        $result = [];
        foreach($data as $key => $value){
            $result[$key] = validateOne($value);
        }
    } else {
        $result = validateOne($data);
    }
    return $result;
}
function validateOne($data){
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data);
}