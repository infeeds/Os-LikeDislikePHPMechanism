<?php
//connecting with server
$db_host = "localhost"; // server location/IP address
$db_username = "root"; // write your database login username here
$db_pass = ""; // write your database login password
$db_name = "notes"; // write database name where posts table is located
mysql_connect(''.$db_host.'',''.$db_username.'',''.$db_pass.'') or die(mysql_error());
mysql_select_db(''.$db_name.'') or die('no database by that name');
?>