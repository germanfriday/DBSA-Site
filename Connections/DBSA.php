<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_DBSA = "internal-db.s1364.gridserver.com";
$database_DBSA = "thegermanfriday_com_-_dbsametrodetroit";
$username_DBSA = "thegermanfrida";
$password_DBSA = "pissedoff";
$DBSA = mysql_connect($hostname_DBSA, $username_DBSA, $password_DBSA) or trigger_error(mysql_error(),E_USER_ERROR); 
?>