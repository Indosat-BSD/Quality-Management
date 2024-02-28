<?
 session_name("AUTHEN");
session_start();
  
  unset($_SESSION['SES_hendi']);
 
  if ($_SESSION["SSO"]=="1")
	{
		 unset($_SESSION['SES_hendi']);
		 session_destroy();
 
		  header("Location: http://cco");
	}
	else
	{
		 unset($_SESSION['SES_hendi']);
		 session_destroy();
 
	    header("Location: http://cco");
	}
	
	
	
?>