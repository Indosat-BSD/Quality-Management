<?
session_name("AUTHEN");
session_start();
//echo"$SES_USERNAME";
if ($SES_hendi<>"")
{
// Time now 
// Add script ini tgl 10 Juli 2012 08:28 ++
$timezone = "Asia/Bangkok";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Detail Form Input</title>
<link rel="stylesheet" href="css/style.default2.css" type="text/css" />

<link rel="stylesheet" href="css/responsive-tables.css">
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.9.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-fileupload.min.js"></script>
<script type="text/javascript" src="js/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="js/jquery.uniform.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="js/jquery.autogrow-textarea.js"></script>
<script type="text/javascript" src="js/charCount.js"></script>
<script type="text/javascript" src="js/colorpicker.js"></script>
<script type="text/javascript" src="js/ui.spinner.min.js"></script>
<script type="text/javascript" src="js/chosen.jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/modernizr.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/forms.js"></script>

<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        // dynamic table
        jQuery('#dyntable').dataTable({
            "sPaginationType": "full_numbers",
            "aaSortingFixed": [[0,'asc']],
            "fnDrawCallback": function(oSettings) {
                jQuery.uniform.update();
            }
        });
        
        jQuery('#dyntable2').dataTable( {
            "bScrollInfinite": true,
            "bScrollCollapse": true,
            "sScrollY": "300px"
        });
        
    });
</script>

<script type="text/javascript" >
	function refresh() {
	window.location.reload(false)
	}
	
</script>
	
<SCRIPT TYPE="text/javascript">

<!--
function popup(mylink, windowname)
{
if (! window.focus)return true;
var href;
if (typeof(mylink) == 'string')
   href=mylink;
else
   href=mylink.href;
window.open(href, windowname, 'width=700,height=500,scrollbars=yes');
return false;
}
function popupBig(mylink, windowname)
{
if (! window.focus)return true;
var href;
if (typeof(mylink) == 'string')
   href=mylink;
else
   href=mylink.href;
window.open(href, windowname, 'width=790,height=500,scrollbars=yes');
return false;
}

//-->
</SCRIPT>
<script type="text/javascript" >
	function refresh() {
	window.location.reload(false)
	}
	
</script>
</head>

<body>
	<form  type="text" action="<? $PHP_SELF; ?>" method="post" name="satu" onkeypress="return noenter()">
  <br><p align="center">Form Input</p><br>
  <table border="0" align="center" class="table table-bordered table-infinite">
    <tr>
      <td width="181">CEC Name </td>
      <td width="195"><input name="full_name" type="text" disabled id="full_name" value="<? echo"$full_name";?>" class="input-large"></td>
    </tr>
    <tr>
      <td>TL / Supervisor Name </td>
      <td><input name="spv_name" type="text" disabled id="spv_name" value="<? echo"$spv_name"; ?>" class="input-large"></td>
    </tr>
    <tr>
      <td>Observer Name </td>
      <td><input name="observer_name" type="text" disabled id="observer_name" value="<? echo"$observer_name"; ?>" class="input-large"></td>
    </tr>
    <tr>
      <td>Customer Name </td>
      <td><input name="cus_name" type="text" id="cus_name" value="<? echo"$cus_name"; ?>" class="input-large"></td>
    </tr>
    <tr>
      <td>MSISDN </td>
      <td><input name="msisdn" type="text" id="msisdn" value="<? echo"$msisdn"; ?>" class="input-large" maxlength="13" onChange="phonenumber(document.satu.msisdn)">
	  		<script type="text/javascript">
			function phonenumber(inputtxt) 
			{ 
			  var phoneno = /^\(?([62]{2})\)?([0-9]+)$/; 
			  if(inputtxt.value.match(phoneno)) 
				 { 
				   return true; 
				 } 
			   else 
				 { 
				   alert("Not a valid Phone Number, Start with 62"); 
				   return false; 
				 } 
			} 
			</script>

	  </td>
    </tr>	
    <tr>
      <td>Survey Date </td>
      <td>
	  <span class="content">
        <input name="survey_date" type="text" id="datepicker" value="<? echo "$survey_date"; ?>" datepicker="true" datepicker_format="MM/DD/YYYY" class="input-large" tabindex="2">
      </span></td>
    </tr>
    <tr>
      <td>Survey Time </td>
      <td><input name="hh" type="text" id="hh" value="<? echo"$hh"; ?>" size="2" maxlength="2" class="input-small" onChange="htime(document.satu.hh)">
        :
        <input name="mm" type="text" id="mm" value="<? echo"$mm"; ?>" size="2" maxlength="2" class="input-small" onChange="mtime(document.satu.mm)">        
        (hh:mm)
	  		<script type="text/javascript">
			function htime(inputtxt) 
			{ 
			  var no = /^[0-9]+$/; 
			  if(inputtxt.value.match(no)) 
				 { 
				   return true; 
				 } 
			   else 
				 { 
				   alert("Must input numbers"); 
				   return false; 
				 } 
			} 
			</script>
	  		<script type="text/javascript">
			function mtime(inputtxt) 
			{ 
			  var no = /^[0-9]+$/; 
			  if(inputtxt.value.match(no)) 
				 { 
				   return true; 
				 } 
			   else 
				 { 
				   alert("Must input numbers"); 
				   return false; 
				 } 
			} 
			</script>			
		</td>
    </tr>
    <tr>
      <td>Observation Date </td>
      <td><? $observation_date=date("m/d/Y");?>
        <span class="content">
        <input name="observation_date" disabled type="text" id="datepicker" value="<? echo "$observation_date"; ?>" datepicker="true" datepicker_format="MM/DD/YYYY"  class="input-large" tabindex="2">
      </span></td>
    </tr>
    <tr>
      <td>Survey Methode</td>
      <td><select name="methode" id="methode" class="uniformselect">
        <option value="0">Select
        <?php
			$katahh=array('SMS','WEB');
			$counthh = count($katahh);
							  
			for($i=0;$i<$counthh;$i++)
			{
				if($katahh[$i] == $methode)
				{
					echo "<option value='$katahh[$i]' selected>$katahh[$i]";
				}
				else
				{
					echo "<option value='$katahh[$i]'>$katahh[$i]";
				}
			}
			?>
        </option>
      </select></td>
    </tr>
    <tr>
      <td>Activity Code </td>
      <td><input name="activity_code" maxlength="20" type="text" id="activity_code" value="<? echo"$activity_code"; ?>"></td>
    </tr>
  </table>
  <p align="center">
    <input name="id_qm"  id="id_qm" type="hidden" value="<? echo"$id_qm"; ?>">
			  <?

echo"<SCRIPT TYPE='text/javascript'>
function confirmDelete()
{
    return confirm('Are you sure you wish to save this entry?');
}
</script>";

		  ?>
    <input type="submit" name="Submit" value="Submit" onclick="return confirmDelete();" class="btn btn-primary">
    <input name="cancel" type="submit" id="cancel" value="Refresh"  class="btn btn-primary"/>
	<?          
	include "konek_qm.php";
	$Submit	= $_POST['Submit'];		
			
	if ($Submit)	  
	{  
			if($cus_name=="" or $msisdn="" or $survey_date=="" or $hh=="" or $mm=="" or $methode=="0" or $activity_code==""){?>
			<script type="text/javascript">window.alert("Value not completed")</script><?}
			//cek msidn
			else if (!preg_match("/^\(?([62]{2})\)?([0-9]+)$/", $_POST['msisdn'])) {?>
			<script type="text/javascript">window.alert("Wrong format msisdn ex:(62xxxxxxxxxxx).")</script><?}
			//cek angka
			else if (!is_numeric($_POST['msisdn'])){?>
			<script type="text/javascript">window.alert("MSISDN can't alphabet.")</script><?}		
			//cek angka hh
			else if (!is_numeric($_POST['hh'])){?>
			<script type="text/javascript">window.alert("can't alphabet in Hour")</script><?}
			//cek angka mm
			else if (!is_numeric($_POST['mm'])){?>
			<script type="text/javascript">window.alert("can't alphabet in Minute")</script><?}				
			else{
				$slas=":";
				$ss2=00;	
				$survey_date_save="$survey_date $hh$slas$mm$slas$ss2";
				
				$q_addTemp="insert into table_qm_voce_detail(id_qm,customer_name,msisdn,survey_date,observation_date,survey_methode,activity_code,spv_name)
				values('$id_qm','$cus_name','$_POST[msisdn]','$survey_date_save','$observation_date','$methode','$activity_code','$spv_name')";
				 $simpan_data=mssql_query($q_addTemp);
				 echo "$q_addTemp";
				if ($simpan_data){ 
					$q_addTemp2="update table_qm_voce set status_save='complete' where id_qm='$id_qm'";
					mssql_query($q_addTemp2);

					echo "	<script type='text/javascript'>
					window.opener.document.welcome.submit()
					window.close();
					</script>";	  
				}
				else
				{
					echo"<script type='text/javascript'>window.alert('Error Please Cek Your Data and Capture this Page')</script> ";
					echo $q_addTemp;
				}
			}
	}
	  
	 if ($cancel)
		{
		?>
          <script type="text/javascript">
		window.location="add_voce_detail.php"
		</script> 
          <?php
		}
	 
	  ?>

</p>
</form>
<script type="text/javascript">
    jQuery(document).ready(function() 
    {
        
           
        //datepicker
        jQuery('#datepicker').datepicker();
        jQuery('#datepicker1').datepicker();
  
    
    });
</script>
</body>
</html>
<? }
elseif ($SES_hendi=="")
{
	
?>
	<script type="text/javascript">
	window.alert("Anda belum login")
	window.location="login.php"
	</script>
<?
}
?>