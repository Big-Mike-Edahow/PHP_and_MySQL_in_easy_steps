<!-- connect_db.php -->

<?php
    $dbc =
    mysqli_connect('127.0.0.1', 'foo', 'bar', 'site_db')
    OR die (mysqli_connect_error());
    mysqli_set_charset($dbc, 'utf8');
?>

