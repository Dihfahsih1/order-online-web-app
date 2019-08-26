<?php

$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'dbcnp';

/* Database config
$db_host		= 'localhost';
$db_user		= 'id7489310_eazicakes';
$db_pass		= 'namonoritah2018';
$db_database	= 'id7489310_dbcnp';
/* End config */

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_database);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
