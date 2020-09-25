<?php
$f = file('nick.txt');
$search = $_GET['nick'];
foreach ($f as $v) {
    $v = trim($v);
    if ($v==$search) {
        echo 'ok';
        break;
    }
}
?>
