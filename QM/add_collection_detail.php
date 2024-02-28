<?
session_name("AUTHEN");
session_start();
//echo"$SES_USERNAME";
if ($SES_hendi<>"")
{
date_default_timezone_set('Asia/Jakarta');
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
  <p align="center">Form Input</p>
  <table width="386" border="1" align="center" class="table table-bordered table-infinite">
    <tr>
      <td width="181">Agent Name </td>
      <td width="195"><input name="full_name" type="text" disabled id="full_name" value="<? echo"$full_name";?>" class="input-large"></td>
    </tr>
    <tr>
      <td>TL / Supervisor Name </td>
      <td><input name="spv_name" type="text" id="spv_name" value="<? echo"$spv_name"; ?>" class="input-large"></td>
    </tr>
    <tr>
      <td>Observer Name </td>
      <td><input name="observer_name" type="text" disabled id="observer_name" value="<? echo"$observer_name"; ?>" class="input-large"></td>
    </tr>
    <tr>
      <td>Interaction Date </td>
      <td><span class="content">
        <input name="interaction_date" type="text" id="datepicker" value="<? echo "$interaction_date"; ?>" datepicker="true" datepicker_format="MM/DD/YYYY"  class="input-large" tabindex="2">
      </span></td>
    </tr>
    <tr>
      <td>Interaction Time </td>
      <td><input name="hh" type="text" id="hh" value="<? echo"$hh"; ?>" size="2" maxlength="2" class="input-small">
        :
        <input name="mm" type="text" id="mm" value="<? echo"$mm"; ?>" size="2" maxlength="2" class="input-small">        
        (hh:mm) </td>
    </tr>
    <tr>
      <td>Observation Date </td>
      <td>        <span class="content">
        <? $observation_date=date("m/d/Y");?>
        <input name="observation_date" disabled="disabled" type="text" id="datepicker" value="<? echo "$observation_date"; ?>" datepicker="true" datepicker_format="MM/DD/YYYY"  class="input-large" tabindex="2">
</span></td>
    </tr>
    <tr>
      <td>Week</td>
      <td><select name="week_" id="week_" class="uniformselect">
        <option value="0">Select
        <?php
			$katahh=array('1','2','3','4');
		$counthh = count($katahh);
							  
			for($i=0;$i<$counthh;$i++)
			{
				if($katahh[$i] == $week_)
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
      <td> Customer Name /MSISDN</td>
      <td><input name="customer_name" type="text" id="customer_name" value="<? echo"$customer_name"; ?>" class="input-large"></td>
    </tr>
    <tr>
      <td>Interaction Type</td>
      <td><select name="interaction_type" id="interaction_type" class="uniformselect" >
        <option value="0">Select
        <?php
			$katahh1=array('Inquiry','Request','Dispute','Complaint');
		$counthh1 = count($katahh1);
							  
			for($i=0;$i<$counthh1;$i++)
			{
				if($katahh1[$i] == $interaction_type)
				{
					echo "<option value='$katahh1[$i]' selected>$katahh1[$i]";
				}
				else
				{
					echo "<option value='$katahh1[$i]'>$katahh1[$i]";
				}
			}
			?>
        </option>
      </select></td>
    </tr>
    <tr>
      <td>Product Type</td>
      <td><input name="product_type" type="text" id="product_type" value="<? echo"$product_type"; ?>" class="input-large"></td>
    </tr>
    <tr>
      <td>Product Detail</td>
      <td><input name="product_detail" type="text" id="product_detail" value="<? echo"$product_detail"; ?>" class="input-large"></td>
    </tr>
    <tr>
      <td>Product Detail by Agent</td>
      <td><input name="product_detail_agent" type="text" id="product_detail_agent" value="<? echo"$product_detail_agent"; ?>" class="input-large"></td>
    </tr>
    <tr>
      <td>Call Activity </td>
      <td><select name="call_activity" id="select" class="uniformselect">
        <option value="0">Select
          <?php
			$katahh4=array('respon','update','close');
		$counthh4 = count($katahh4);
							  
			for($i=0;$i<$counthh4;$i++)
			{
				if($katahh4[$i] == $drop_call)
				{
					echo "<option value='$katahh4[$i]' selected>$katahh4[$i]";
				}
				else
				{
					echo "<option value='$katahh4[$i]'>$katahh4[$i]";
				}
			}
			?>
        </option>
      </select></td>
    </tr>
    <tr>
      <td>Handling time (duration)</td>
      <td><input name="hh_2" type="text" id="hh_2" value="<? echo"$hh_2"; ?>" size="2" maxlength="2" class="input-small">
:
  <input name="mm_2" type="text" id="mm_2" value="<? echo"$mm_2"; ?>" size="2" maxlength="2" class="input-small">
  :
  <input name="ss_2" type="text" id="ss_2" value="<? echo"$ss_2"; ?>" size="2" maxlength="2" class="input-small">
  (hh:mm:ss) </td>
    </tr>
    <tr>
      <td>Call Status </td>
      <td><select name="call_status" id="select9" class="uniformselect">
        <option value="0">Select
        <?php
			$katahh4=array('answered','mailbox');
		$counthh4 = count($katahh4);
							  
			for($i=0;$i<$counthh4;$i++)
			{
				if($katahh4[$i] == $drop_call)
				{
					echo "<option value='$katahh4[$i]' selected>$katahh4[$i]";
				}
				else
				{
					echo "<option value='$katahh4[$i]'>$katahh4[$i]";
				}
			}
			?>
        </option>
      </select></td>
    </tr>
    <tr>
      <td>Total Agent Score</td>
      <td><input name="total_score" type="text" disabled id="total_score" value="<? echo"$total_score"; ?>" size="3" maxlength="3" class="input-large"></td>
    </tr>
    <tr>
      <td>Evaluation Scale </td>
      <td><input name="skala" type="text" disabled id="skala" value="<? echo"$skala"; ?>" size="1" maxlength="1" class="input-large"></td>
    </tr>
	<tr>
      <td>Notes sample recording </td>
      <td><textarea name="notes_recording" cols="35" id="notes_recording"><? echo "$notes_recording"; ?></textarea>
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
			if ($repeat=="yes")
			{
			$s_date_prev_call="$date_prev_call"; 
			$s_prev_agent="$prev_agent";
			}
			if ($repeat=="no")
			{
			$s_date_prev_call="$observation_date"; 
			$s_prev_agent="-";
			}
			
		  if ($Submit)
	  {
	  
		if($spv_name=="" or $interaction_date=="" or $observation_date=="" or $week_=="0" or $customer_name=="" or $interaction_type=="0" or $product_type=="" or $product_detail=="" or $product_detail_agent=="" or $call_activity=="" or hh_2=="" or $mm_2=="" or $ss="" or $call_status=="0" or $notes_recording=="")
			{
			?>
            <script type="text/javascript">
			window.alert("Value not completed")
			</script>
            <?
			}
			
		else 
			
			{
		
		$s_notes_recording = str_replace("'", "", "$notes_recording");
		//$date_saved=date("03/01/2016 H:i:s");
		$date_saved=date("m/d/Y H:i:s");
		$slas=":";
		$ss2=00;	
		$interaction_date_save="$interaction_date $hh$slas$mm$slas$ss2"; 
		$q_addTemp="insert into table_qm_collection_detail(id_qm,spv_name,interaction_date,observation_date,week_,customer_name,interaction_type,product_type,product_detail,product_detail_agent,call_activity,hh_handling_time,mm_handling_time,ss_handling_time,call_status,notes_recording)
		  values('$id_qm','$spv_name','$interaction_date_save','$date_saved','$week_','$customer_name','$interaction_type','$product_type','$product_detail','$product_detail_agent','$call_activity','$hh_2','$mm_2','$ss_2','$call_status','$s_notes_recording')";
		  mssql_query($q_addTemp);
		  //echo "$q_addTemp";
		  
		$q_addTemp2="update table_qm_collection set status_save='complete',date_saved=getdate() where id_qm='$id_qm'";
		  mssql_query($q_addTemp2);

			echo "	<script type='text/javascript'>
			window.opener.document.welcome.submit()
			window.close();
			</script>";	 	}
	  }
	  
	 if ($cancel)
		{
		?>
          <script type="text/javascript">
		window.location="add_collection_detail.php"
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