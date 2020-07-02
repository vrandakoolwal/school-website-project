<?php
$con = mysql_connect ("localhost", "root" , "");
$db = mysql_select_db("website" , $con);

if (!($db))
{echo "Server not connected";}




?>