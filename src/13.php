  <?php
$secret_code = 'QWERTYUIOPASDFGHJKLZXCVBNM';
$length = rand(10, 20);
for ($i = 0; $i < $length; $i++) {
    echo substr($secret_code, rand(0, strlen($secret_code) - 1), 1);
}
?>