<?php
$pdoatributi=[
    'PDO::ATTR_EMULATE_PREPARES, false',
    'PDO::ERRMODE, PDO::ERRMODE_EXCEPTION'
];
$db= new PDO('mysql: host=localhost;dbname=dbzad', 'root', '', $pdoatributi);
?>