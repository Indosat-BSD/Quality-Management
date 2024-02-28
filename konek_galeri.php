<?
$hostname = "vmcrmce2";
$username = "sa";
$password = "hasuuuuut";
$dbName = "assest_galeri";

$db_connection=mssql_connect($hostname,$username,$password) or DIE("DATABASE FAILED TO RESPOND.");
mssql_select_db($dbName) or DIE("Table unavailable");
$result = mssql_query("SET ANSI_NULLS ON") or die(mssql_get_last_message());
  $result2 = mssql_query("SET ANSI_WARNINGS ON") or die(mssql_get_last_message());
$ipc="10.128.128.58";
?>