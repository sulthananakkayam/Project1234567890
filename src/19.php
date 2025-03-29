<?php
function getRandomString($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters)-1)];
    }
    return $randomString;
}

$randomCode = getRandomString(8);
echo "Generated Random Code: $randomCode";
?>
