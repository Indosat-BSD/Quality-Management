<?
$hostname = "cco";
$userdb		= "sa";
$password 	= "hasuuuuut";
$dbName 	= "hrms";

$db_connection=mssql_connect($hostname,$userdb,$password) or die("Gagal connect server");
mssql_select_db($dbName) or die("Gagal connect db");
$result = mssql_query("SET ANSI_NULLS ON") or die(mssql_get_last_message());
  $result2 = mssql_query("SET ANSI_WARNINGS ON") or die(mssql_get_last_message());
?>