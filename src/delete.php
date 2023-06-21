<?php
$config = require "config/data.php";
unset($config[$_GET['key']]);
$text = '<?php return '
    . var_export($config, true) . ';';
file_put_contents(
    'config/data.php',
    $text
);
header("Location: /index.php");