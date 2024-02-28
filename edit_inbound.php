<?
session_name("AUTHEN");
session_start();

$id = $_GET['id_qm'];
//echo"$SES_USERNAME";
if ($SES_hendi<>"")
{

include "konek_qm.php";
date_default_timezone_set('Asia/Jakarta');
 
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Detail Form Input</title>
<script language="javascript" src="js/jam.js"></script>
<script language="javascript" src="js/menit.js"></script>

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
        //datepicker
        jQuery('[datepicker="true"]').datepicker();
        
    });
</script>

<script type="text/javascript" >
	function refresh() {
	window.location.reload(false)
	}
	
</script>
	

<script language="javascript">

				function Checkfiles()
				{
					var fup = document.getElementById('file_action_done_qa');
					var fup2 = document.getElementById('file_action_done_ops');
					
					var fileName = fup.value;
					var fileName2 = fup2.value;
					
					var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
					var ext2 = fileName2.substring(fileName2.lastIndexOf('.') + 1);

					if(ext == "xls" ||ext == "xlsx" ||ext == "doc" ||ext == "docx" 
					||ext == "pdf" ||ext == "jpeg" ||ext == "jpg" || ext2 == "xls" ||ext2 == "xlsx" ||ext2 == "doc" ||ext2 == "docx" 
					||ext2 == "pdf" ||ext2 == "jpeg" ||ext2 == "JPG")
					
					{
						return true;
					}
					
					else
						{
							alert(" Format Tidak Sesuai ");
							fup.focus();
							return false;
						}
					}
	</script>

</head>
<body>

<? 
$query = "SELECT * FROM table_qm WHERE id_qm='{$id_qm}'";
$result = mssql_query( $query );
$data = mssql_fetch_assoc($result);

$id_qm = $data["id_qm"];

$query = "SELECT *, convert(varchar,interaction_date,108) as jam, convert(varchar,observation_date,101) as observ, 
			convert(varchar,interaction_date,101) as date, convert(varchar,date_prev_call,101) as prev 
			FROM table_qm_detail WHERE id_qm='{$id_qm}'";
$result = mssql_query( $query );
$data2 = mssql_fetch_assoc($result);
	
if(!$_POST){
	$sc1 = $data["q1"];
	$sc2 = $data["q2"];
	$sc3 = $data["q3"];
	$sc4 = $data["q4"];
	$sc5 = $data["q5"];
	$sc6 = $data["q6"];
	$sc7 = $data["q7"];
	$sc8 = $data["q8"];
	$sc9 = $data["q9"];
	$sc10 = $data["q10"];
	$sc11 = $data["q11"];
	$sc12 = $data["q12"];
	$notes1 = $data["notes1"];
	$notes2 = $data["notes2"];
	$notes3 = $data["notes3"];
	$notes4 = $data["notes4"];
	$notes5 = $data["notes5"];
	$notes6 = $data["notes6"];
	$notes7 = $data["notes7"];
	$notes8 = $data["notes8"];
	$notes9 = $data["notes9"];
	$notes10 = $data["notes10"];
	$notes11 = $data["notes11"];
	$notes12 = $data["notes12"];
	$tot1 = $data["save_q1"];
	$tot2 = $data["save_q2"];
	$tot3 = $data["save_q3"];
	$tot4 = $data["save_q4"];
	$tot5 = $data["save_q5"];
	$tot6 = $data["save_q6"];
	$tot7 = $data["save_q7"];
	$tot8 = $data["save_q8"];
	$tot9 = $data["save_q9"];
	$tot10 = $data["save_q10"];
	$tot11 = $data["save_q11"];
	$tot12 = $data["save_q12"];

	$spv_name = $data2["spv_name"];
	$interaction_date = $data2["date"];
	$week_=$data2["week_"];
	$customer_name=$data2["customer_name"];
	$msisdn=$data2["msisdn"];
	$interaction_type=$data2["interaction_type"];
	$jam = $data2['jam'];
	$jamm = explode (":", $jam);
	$hh = $jamm[0];
	$mm = $jamm[1];
	$product_type=$data2["product_type"];
	$product_detail=$data2["product_detail"];
	$product_detail_agent=$data2["product_detail_agent"];
	$fcr=$data2["fcr"];
	$repeat=$data2["repeat"];
	$date_prev_call = $data2['prev'];
	$prev_agent=$data2["prev_agent"];
	$hh_2=$data2["hh_handling_time"];
	$mm_2=$data2["mm_handling_time"];
	$ss_2=$data2["ss_handling_time"];
	$drop_call=$data2["drop_call"];
	$strength_agent=$data2["strength_agent"];
	$improved=$data2["improved"];
	$recommendation=$data2["recommendation"];
	$action_done_qa=$data2["action_done_qa"];
	$action_done_ops=$data2["action_done_ops"];
	$file_action_done_qa=$data2["file_action_done_qa"];
	$file_action_done_ops=$data2["file_action_done_ops"];
	$notes_recording=$data2["notes_recording"];
}
$total_score = $data["tot_score"];
$observation_date=$data2["observ"];
?>
<form action="<? $PHP_SELF; ?>" method="post"  name="welcome" onKeyPress="return noenter()" enctype="multipart/form-data" >
<table width="1000" border="1"  class="table table-bordered table-infinite">
  <thead>
    <tr bgcolor="#CCCCCC">
      <th width="17" class="head0"><div align="center">No</div></th>
      <th width="100" class="head0"><div align="center">Category</div></th>
      <th width="300" class="head0"><div align="center">Attributes</div></th>
      <th width="50" class="head0"><div align="center">Bobot</div></th>
	  <th width="100" class="head0"><div align="center">Absolute Score</div></th>
	  <th width="300" class="head0"><div align="center">Notes</div></th>
    </tr>
	</thead>
    <tr>
      <td rowspan="2">1</td>
      <td rowspan="2">Opening</td>
	  <td>Greeting with Antusiasm</td>
      <td><div align="center">3</div></td>
	  <td><div align="left"><input name="sc1" type="radio"  value="y" <? if ($sc1=="y") {echo "checked";} else {echo "";} ?>/>
  Y
    <input name="sc1" type="radio"  value="n" <? if ($sc1=="n") {echo "checked";} else {echo "";} ?>/>
  N
	  </div></td>
	  <td><textarea name="notes1" cols="35" id="notes1" onkeypress="javascript: checkValuenotes1();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes1="";}?><? echo "$notes1"; ?></textarea>
		  <input name="jml_notes1" type="text" "disabled" id="jml_notes1" style="border-style:none; width:50px; background-color: white" value="0" />
	  </td>
    </tr>
	<tr>
	  <td>Verify (refer to verification rules )</td>
      <td><div align="center">5</div></td>
	  <td><div align="left"><input name="sc2" type="radio"  value="y" <? if ($sc2=="y") {echo "checked";} else {echo "";} ?>/>
  Y
    <input name="sc2" type="radio"  value="n" <? if ($sc2=="n") {echo "checked";} else {echo "";} ?>/>
  N
	  </div></td>
	  <td><textarea name="notes2" cols="35" id="notes2" onkeypress="javascript: checkValuenotes2();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes2="";}?><? echo "$notes2"; ?></textarea>
          <input name="jml_notes2" type="text" "disabled" id="jml_notes2" style="border-style:none; width:50px; background-color: white" value="0" />
	  </td>
    </tr>
	
	<tr>
      <td rowspan="6">2</td>
      <td rowspan="6">Interaksi, Konfirmasi & Solusi</td>
	  <td>Probing</td>
      <td><div align="center">5</div></td>
	  <td><div align="left"><input name="sc3" type="radio"  value="y" <? if ($sc3=="y") {echo "checked";} else {echo "";} ?>/>
  Y
    <input name="sc3" type="radio"  value="n" <? if ($sc3=="n") {echo "checked";} else {echo "";} ?>/>
  N
	  </div></td>
	  <td><textarea name="notes3" cols="35" id="notes3" onkeypress="javascript: checkValuenotes3();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes3="";}?><? echo "$notes3"; ?></textarea>
          <input name="jml_notes3" type="text" "disabled" id="jml_notes3" style="border-style:none; width:50px; background-color: white" value="0" />
	  </td>
    </tr>
	<tr>
	  <td>Correct Answer / solution & Process Complience</td>
      <td><div align="center">45</div></td>
	  <td><div align="left"><input name="sc4" type="radio"  value="y" <? if ($sc4=="y") {echo "checked";} else {echo "";} ?>/>
  Y
    <input name="sc4" type="radio"  value="n" <? if ($sc4=="n") {echo "checked";} else {echo "";} ?>/>
  N
	  </div></td>
	  <td><textarea name="notes4" cols="35" id="notes4" onkeypress="javascript: checkValuenotes4();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes4="";}?><? echo "$notes4"; ?></textarea>
          <input name="jml_notes4" type="text" "disabled" id="jml_notes4" style="border-style:none; width:50px; background-color: white" value="0" />
	  </td>
    </tr>
	<tr>
	  <td>Input Accuracy Data</td>
      <td><div align="center">5</div></td>
	  <td><div align="left"><input name="sc5" type="radio"  value="y" <? if ($sc5=="y") {echo "checked";} else {echo "";} ?>/>
  Y
    <input name="sc5" type="radio"  value="n" <? if ($sc5=="n") {echo "checked";} else {echo "";} ?>/>
  N
	  </div></td>
	  <td><textarea name="notes5" cols="35" id="notes5" onkeypress="javascript: checkValuenotes5();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes5="";}?><? echo "$notes5"; ?></textarea>
          <input name="jml_notes5" type="text" "disabled" id="jml_notes5" style="border-style:none; width:50px; background-color: white" value="0" />
	  </td>
    </tr>
	<tr>
	<tr>
	  <td>Information/Notes</td>
      <td><div align="center">3</div></td>
	  <td><div align="left"><input name="sc6" type="radio"  value="y" <? if ($sc6=="y") {echo "checked";} else {echo "";} ?>/>
  Y
    <input name="sc6" type="radio"  value="n" <? if ($sc6=="n") {echo "checked";} else {echo "";} ?>/>
  N
	  </div></td>
	  <td><textarea name="notes6" cols="35" id="notes6" onkeypress="javascript: checkValuenotes6();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes6="";}?><? echo "$notes6"; ?></textarea>
          <input name="jml_notes6" type="text" "disabled" id="jml_notes6" style="border-style:none; width:50px; background-color: white" value="0" />
	  </td>
    </tr>
	<tr>	
	  <td>FCR</td>
      <td><div align="center">15</div></td>
	  <td><div align="left"><input name="sc7" type="radio"  value="y" <? if ($sc7=="y") {echo "checked";} else {echo "";} ?>/>
  Y
    <input name="sc7" type="radio"  value="n" <? if ($sc7=="n") {echo "checked";} else {echo "";} ?>/>
  N
	  </div></td>
	  <td><textarea name="notes7" cols="35" id="notes7" onkeypress="javascript: checkValuenotes7();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes7="";}?><? echo "$notes7"; ?></textarea>
        <input name="jml_notes7" type="text" "disabled" id="jml_notes7" style="border-style:none; width:50px; background-color: white" value="0" />
	  </td>
    </tr>
	
	<tr>
      <td>3</td>
      <td>Additional program</td>
	  <td>Campaign / Cross selling/ upselling / survey</td>
      <td><div align="center">5</div></td>
	  <td><div align="left"><input name="sc8" type="radio"  value="y" <? if ($sc8=="y") {echo "checked";} else {echo "";} ?>/>
  Y
    <input name="sc8" type="radio"  value="n" <? if ($sc8=="n") {echo "checked";} else {echo "";} ?>/>
  N
	  </div></td>
	  <td><textarea name="notes8" cols="35" id="notes8" onkeypress="javascript: checkValuenotes8();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes8="";}?><? echo "$notes8"; ?></textarea>
        <input name="jml_notes8" type="text" "disabled" id="jml_notes8" style="border-style:none; width:50px; background-color: white" value="0" />
	  </td>
    </tr>
	
	<tr>
      <td>4</td>
      <td>Teknis berbicara/ Effective Communication</td>
	  <td>Effective Communication</td>
      <td><div align="center">5</div></td>
	  <td><div align="left"><input name="sc9" type="radio"  value="y" <? if ($sc9=="y") {echo "checked";} else {echo "";} ?>/>
  Y
    <input name="sc9" type="radio"  value="n" <? if ($sc9=="n") {echo "checked";} else {echo "";} ?>/>
  N
	  </div></td>
	  <td><textarea name="notes9" cols="35" id="notes9" onkeypress="javascript: checkValuenotes9();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes9="";}?><? echo "$notes9"; ?></textarea>
        <input name="jml_notes9" type="text" "disabled" id="jml_notes9" style="border-style:none; width:50px; background-color: white" value="0" />
	  </td>
    </tr>
	
	<tr>
      <td>5</td>
      <td>Teknis Telephony</td>
	  <td>Hold</td>
      <td><div align="center">5</div></td>
	  <td><div align="left"><input name="sc10" type="radio"  value="y" <? if ($sc10=="y") {echo "checked";} else {echo "";} ?>/>
  Y
    <input name="sc10" type="radio"  value="n" <? if ($sc10=="n") {echo "checked";} else {echo "";} ?>/>
  N
	  </div></td>
	  <td><textarea name="notes10" cols="35" id="notes10" onkeypress="javascript: checkValuenotes10();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes10="";}?><? echo "$notes10"; ?></textarea>
        <input name="jml_notes10" type="text" "disabled" id="jml_notes10" style="border-style:none; width:50px; background-color: white" value="0" />
	  </td>
    </tr>
	
	<tr>
      <td rowspan="2">6</td>
      <td rowspan="2">Closing</td>
	  <td>Reconfirm the Agreement</td>
      <td><div align="center">2</div></td>
	  <td><div align="left"><input name="sc11" type="radio"  value="y" <? if ($sc11=="y") {echo "checked";} else {echo "";} ?>/>
  Y
    <input name="sc11" type="radio"  value="n" <? if ($sc11=="n") {echo "checked";} else {echo "";} ?>/>
  N
	  </div></td>
	  <td><textarea name="notes11" cols="35" id="notes11" onkeypress="javascript: checkValuenotes11();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes11="";}?><? echo "$notes11"; ?></textarea>
        <input name="jml_notes11" type="text" "disabled" id="jml_notes11" style="border-style:none; width:50px; background-color: white" value="0" />
	  </td>
    </tr>
	<tr>
	  <td>Closing Greeting</td>
      <td><div align="center">2</div></td>
	  <td><div align="left"><input name="sc12" type="radio"  value="y" <? if ($sc12=="y") {echo "checked";} else {echo "";} ?>/>
  Y
    <input name="sc12" type="radio"  value="n" <? if ($sc12=="n") {echo "checked";} else {echo "";} ?>/>
  N
	  </div></td>
	  <td><textarea name="notes12" cols="35" id="notes12" onkeypress="javascript: checkValuenotes12();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes12="";}?><? echo "$notes12"; ?></textarea>
        <input name="jml_notes12" type="text" "disabled" id="jml_notes12" style="border-style:none; width:50px; background-color: white" value="0" />
	  </td>
    </tr>
	<tr>
      <td colspan="6">
	  
	  <?
	  	if($sc1=="y"){ $tot1="3"; }else{ $tot1=0; }
		if($sc2=="y"){ $tot2="5"; }else{ $tot2=0; }
		if($sc3=="y"){ $tot3="5"; }else{ $tot3=0; }
		if($sc4=="y"){ $tot4="45"; }else{ $tot4=0; }
		if($sc5=="y"){ $tot5="5"; }else{ $tot5=0; }
		if($sc6=="y"){ $tot6="3"; }else{ $tot6=0; }
		if($sc7=="y"){ $tot7="15"; }else{ $tot7=0; }
		if($sc8=="y"){ $tot8="5"; }else{ $tot8=0; }
		if($sc9=="y"){ $tot9="5"; }else{ $tot9=0; }
		if($sc10=="y"){ $tot10="5"; }else{ $tot10=0; }
		if($sc11=="y"){	$tot11="2"; }else{ $tot11=0; }
		if($sc12=="y"){ $tot12="2"; }else{ $tot12=0; }
		
		$save_total=$tot1+$tot2+$tot3+$tot4+$tot5+$tot6+$tot7+$tot8+$tot9+$tot10+$tot11+$tot12;
		  
		  $s_notes1 = str_replace('"', '', "$notes1");
		  $s_notes2 = str_replace('"', '', "$notes2");
		  $s_notes3 = str_replace('"', '', "$notes3");
		  $s_notes4 = str_replace('"', '', "$notes4");
		  $s_notes5 = str_replace('"' ,'', "$notes5");
		  $s_notes6 = str_replace('"', '', "$notes6");
		  $s_notes7 = str_replace('"', '', "$notes7");
		  $s_notes8 = str_replace('"', '', "$notes8");
		  $s_notes9 = str_replace('"', '', "$notes9");
		  $s_notes10 = str_replace('"', '', "$notes10");
		  $s_notes11 = str_replace('"', '', "$notes11");
		  $s_notes12 = str_replace('"', '', "$notes12");

	  ?>	  <div align="center">
	    <input name="cek_score" type="submit" id="cek_score" value="Cek Score"  class="btn"/>
      	<? echo round($save_total,2);?>
</div></td>
    </tr>
	
  </table>

          <p></p>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>


<body>

   <p align="center">Form Input</p>
  <table width="386" border="1" align="center"  class="table table-bordered table-infinite">
  <input name="userid" type="hidden" disabled id="userid" value="<? echo "$userid"; ?>" />
    <tr>
      <td width="181">Agent Name </td>
      <td width="195"><input name="full_name" type="text" disabled id="full_name" value="<? echo"$full_name";?>" class="input-large"></td>
    </tr>
    <tr>
      <td>TL / Supervisor Name </td>
      <td><input name="spv_name" type="text" id="spv_name" value="<? echo"$spv_name"; ?>"class="input-large"></td>
    </tr>
    <tr>
      <td>Observer Name </td>
      <td><input name="observer_name" type="text" disabled id="observer_name" value="<? echo"$observer_name"; ?>"class="input-large"></td>
    </tr>
    <tr>
      <td>Interaction Date </td>
      <td><span class="content">
        <input name="interaction_date" type="text" id="datepicker" value="<? echo "$interaction_date"; ?>" datepicker="true" datepicker_format="MM/DD/YYYY" tabindex="2" class="input-large">
      </span></td>
    </tr>
    <tr>
      <td>Interaction Time </td>
      <td><input name="hh" type="text" id="hh" value="<? echo"$hh"; ?>" size="2" maxlength="2"class="input-small">
        :
        <input name="mm" type="text" id="mm" value="<? echo"$mm"; ?>" size="2" maxlength="2"class="input-small">        
        (hh:mm) </td>
    </tr>
    <tr>
      <td>Observation Date </td>
      <td>
        <span class="content">
        <input name="observation_date" type="text" disabled id="datepicker1" value="<? echo "$observation_date"; ?>" datepicker="true" datepicker_format="MM/DD/YYYY" class="input-large" tabindex="2">
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
      <td> Customer Name </td>
      <td><input name="customer_name" type="text" id="customer_name" value="<? echo"$customer_name"; ?>"class="input-large"></td>
    </tr>
	<tr>
      <td> MSISDN </td>
      <td><input name="msisdn" type="text" id="msisdn" value="<? echo"$msisdn"; ?>"class="input-large"></td>
    </tr>
    <tr>
      <td>Interaction Type</td>
      <td><select name="interaction_type" id="interaction_type" class="uniformselect">
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
      <td><input name="product_type" type="text" id="product_type" value="<? echo"$product_type"; ?>"class="input-large"></td>
    </tr>
    <tr>
      <td>Product Detail</td>
      <td><input name="product_detail" type="text" id="product_detail" value="<? echo"$product_detail"; ?>"class="input-large"></td>
    </tr>
    <tr>
      <td>Product Detail by Agent</td>
      <td><input name="product_detail_agent" type="text" id="product_detail_agent" value="<? echo"$product_detail_agent"; ?>"class="input-large"></td>
    </tr>
    
    <tr>
      <td>Repeat (Y / N)</td>
      <td><select name="repeat" id="repeat" class="uniformselect" onchange="welcome.submit()">
        <option value="0">Select
        <?php
			$katahh3=array('yes','no');
		$counthh3 = count($katahh3);
							  
			for($i=0;$i<$counthh3;$i++)
			{
				if($katahh3[$i] == $repeat)
				{
					echo "<option value='$katahh3[$i]' selected>$katahh3[$i]";
				}
				else
				{
					echo "<option value='$katahh3[$i]'>$katahh3[$i]";
				}
			}
			?>
        </option>
      </select></td>
    </tr>
    <tr>
      <td> Date of previous call</td>
      <td><span class="content">
        <input name="date_prev_call" <? if ($repeat=="no"){?> disabled <? } else {}?> type="text" id="date_prev_call" value="<? echo "$date_prev_call"; ?>" datepicker="true" datepicker_format="MM/DD/YYYY" tabindex="2" class="input-large"/>
      </span></td>
    </tr>
    <tr>
      <td>Previous Agent </td>
      <td><input name="prev_agent"  <? if ($repeat=="no"){?> disabled <? } else {}?> type="text" id="prev_agent" value="<? echo"$prev_agent"; ?>"class="input-large"></td>
    </tr>
    <tr>
      <td>Handling time (duration)</td>
      <td><input name="hh_2" type="text" id="hh_2" value="<? echo"$hh_2"; ?>" size="2" maxlength="2"class="input-small">
:
  <input name="mm_2" type="text" id="mm_2" value="<? echo"$mm_2"; ?>" size="2" maxlength="2"class="input-small">
  :
  <input name="ss_2" type="text" id="ss_2" value="<? echo"$ss_2"; ?>" size="2" maxlength="2"class="input-small">
  (hh:mm:ss) </td>
    </tr>
    <tr>
      <td>Drop Call</td>
      <td><select name="drop_call" id="select9" class="uniformselect">
        <option value="0">Select
        <?php
			$katahh4=array('yes','no');
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
      <td><input name="total_score" type="text" disabled id="total_score" value="<? echo"$total_score"; ?>" size="3" maxlength="3"class="input-large"></td>
    </tr>
    <tr>
      <td>Evaluation Scale </td>
      <td><input name="skala" type="text" disabled id="skala" value="<? echo"$skala"; ?>" size="1" maxlength="1"class="input-large"></td>
    </tr>
	 <tr>
      <td>Strength Agent</td>
      <td><textarea name="strength_agent" cols="35" id="strength_agent"><? echo "$strength_agent"; ?></textarea></td>
    </tr>
	<tr>
      <td>Area to be improved</td>
      <td><textarea name="improved" cols="35" id="improved"><? echo "$improved"; ?></textarea></td>
    </tr>
	 <tr>
      <td>Recommendation</td>
      <td><textarea name="recommendation" cols="35" id="recommendation"><? echo "$recommendation"; ?></textarea></td>
    </tr>
	<tr>
      <td>Action to be done - QA</td>
      <td><textarea name="action_done_qa" cols="35" id="action_done_qa"><? echo "$action_done_qa"; ?></textarea>
	  <input type="file" name="file_action_done_qa" id="file_action_done_qa" value="<? echo "$file_action_done_qa"; ?>"/></td>
    </tr>
	<tr>
      <td>Action to be done - Opers</td>
      <td><textarea name="action_done_ops" cols="35" id="action_done_ops"><? echo "$action_done_ops"; ?></textarea>
	  <input type="file" name="file_action_done_ops" id="file_action_done_ops" value="<? echo "$file_action_done_ops"; ?>"/></td>
    </tr>
	<tr>
      <td>Notes sample recording </td>
      <td><textarea name="notes_recording" cols="35" id="notes_recording"><? echo "$notes_recording"; ?></textarea>
    </tr>
  </table>
  <p align="center">
    <input name="id_qm"  id="id_qm" type="hidden" value="<? echo"$id_qm"; ?>"class="input-large">
			  <?

echo"<SCRIPT TYPE='text/javascript'>
function confirmDelete()
{
    return confirm('Are you sure you wish to save this entry?');
}
</script>";

		  ?>
    <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
    <input name="cancel" type="submit" id="cancel" value="Cancel" class="btn btn-primary"/>
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
			$s_strength_agent = str_replace("'", "", "$strength_agent");
			$s_improved = str_replace("'", "", "$improved");
			$s_recommendation = str_replace("'", "", "$recommendation");
			$s_action_done_qa = str_replace("'", "", "$action_done_qa");
			$s_action_done_ops = str_replace("'", "", "$action_done_ops");
			$s_notes_recording = str_replace("'", "", "$notes_recording");
			
		  if ($Submit)
	  {
	  
		if($sc1=="" or $sc2==""  or $sc4=="" or $sc3=="" or $sc5=="" or $sc6=="" or $sc7=="" or $sc8=="" or $sc9=="" or $sc10=="" or $sc11=="" or $sc12=="" or $ss="" or $spv_name=="" or $interaction_date=="" or $observation_date=="" or $week_=="0" or $customer_name=="" or $interaction_type=="0" or $product_type=="" or $product_detail=="" or $product_detail_agent=="" or $repeat=="0" or $s_date_prev_call=="" or $s_prev_agent=="" or hh_2=="" or $mm_2=="" or $drop_call=="0" or $strength_agent==""or $improved =="" or  $recommendation=="" or $notes_recording=="" or $msisdn="")
		{
			 
			?>
			
            <script type="text/javascript">
			window.alert("Value not completed")
			</script>
            <?
			}
			
		else 
			
			{
			
				
	    	    $uploadDir = "upload_path/";
	
				$uploadFile = $_FILES['file_action_done_qa'];
				$uploadFile2 = $_FILES['file_action_done_ops'];
				

				// Extract nama file
				$extractFile = pathinfo($uploadFile['name']);
				$extractFile2 = pathinfo($uploadFile2['name']);
				
				$size = $_FILES['file_action_done_qa']['size']; //untuk mengetahui ukuran file
				$tipe = $_FILES['file_action_done_qa']['type'];// untuk mengetahui tipe file
				
				$size2 = $_FILES['file_action_done_ops']['size']; //untuk mengetahui ukuran file
				$tipe2 = $_FILES['file_action_done_ops']['type'];// untuk mengetahui tipe file


				//Dibawah ini adalah untuk mengatur format gambar yang dapat di uplada ke server.
				//nda bisa tambahakan jika ingin memasukan format yang lain tergantung kebutuhan anda.

				$exts =array('image/jpg','image/jpeg','image/pjpeg','image/png','image/x-png','doc','docx','pdf','xls','xlsx');
				
				// dibawah ini script untuk mengatur ukuran file yang dapat di upload ke server
				/* if(($size !=0)&&($size>130000))
				{
					exit('Ukuran gambar terlalu besar?');
				}*/
		//}

		$sameName = 0; // Menyimpan banyaknya file dengan nama yang sama dengan file yg diupload
		$handle = opendir($uploadDir);
		
		while(false !== ($file = readdir($handle)))
		{ // Looping isi file pada directory tujuan
			// Apabila ada file dengan awalan yg sama dengan nama file di uplaod
			if(strpos($file,$extractFile['filename']) !== false)
			$sameName++; // Tambah data file yang sama
		}
		$newName = empty($sameName) ? $uploadFile['name'] : $extractFile['filename'].'('.$sameName.').'.$extractFile['extension'];
		
		
		$sameName2 = 0; // Menyimpan banyaknya file dengan nama yang sama dengan file yg diupload
		$handle2 = opendir($uploadDir);
		
		while(false !== ($file2 = readdir($handle2)))
		{ // Looping isi file pada directory tujuan
			// Apabila ada file dengan awalan yg sama dengan nama file di uplaod
			if(strpos($file2,$extractFile2['filename']) !== false)
			$sameName2++; // Tambah data file yang sama
		}

		/* Apabila tidak ada file yang sama ($sameName masih '0') maka nama file pakai 
		* nama ketika diupload, jika $sameName > 0 maka pakai format "namafile($sameName).ext */
	
		$newName2 = empty($sameName2) ? $uploadFile2['name'] : 
		$extractFile2['filename'].'('.$sameName2.').'.$extractFile2['extension'];

		
		if ($uploadFile!='' )
		{
			move_uploaded_file($uploadFile['tmp_name'],$uploadDir.$newName);
		}
		if ($uploadFile2!='' )
		{
			move_uploaded_file($uploadFile2['tmp_name'],$uploadDir.$newName2);
		}
		
		//$date_saved_e=date("m/d/Y H:i:s");
		$slas_e=":";
		$ss2_e=00;	
		$interaction_date_save="$interaction_date $hh$slas_e$mm$slas_e$ss2_e"; 
		
			$add="update table_qm_detail set 
			id_qm = '$id_qm', 
			spv_name = '$spv_name',
			interaction_date = '$interaction_date_save', 
			observation_date ='$observation_date', 
			week_ ='$week_', 
			customer_name ='$customer_name', 
			msisdn='$msisdn',
			interaction_type ='$interaction_type', 
			product_type ='$product_type',
			product_detail ='$product_detail',
			product_detail_agent = '$product_detail_agent',
			repeat = '$repeat',
			date_prev_call = '$date_prev_call',
			prev_agent = '$prev_agent',
			hh_handling_time = '$hh_2',
			mm_handling_time = '$mm_2',
			ss_handling_time = '$ss_2',
			drop_call = '$drop_call',
			recommendation = '$s_recommendation',
			strength_agent = '$s_strength_agent',
			improved = '$s_improved',
			action_done_qa = '$s_action_done_qa',
			action_done_ops = '$s_action_done_ops',
			notes_recording = '$s_notes_recording'
			
			where id_qm='$id'";
			mssql_query($add);
		 //echo "$add";
		
		if ($newName !='')
		{
			$add22="update table_qm_detail set 
			file_action_done_qa = '$newName' where id_qm='$id'";
			mssql_query($add22);
			
		}
		if ($newName2 !='')
		{
			$add2="update table_qm_detail set 
			file_action_done_ops = '$newName2' where id_qm='$id'";
			mssql_query($add2); 
		}
		
		$add2="update table_qm set 
		notes1 = '$s_notes1',
		notes2 = '$s_notes2',
		notes3 = '$s_notes3',
		notes4 = '$s_notes4',
		notes5= '$s_notes5',
		notes6= '$s_notes6',
		notes7='$s_notes7',
		notes8='$s_notes8',
		notes9='$s_notes9',
		notes10='$s_notes10',
		notes11='$s_notes11',
		notes12='$s_notes12',
		q1='$sc1',
		q2='$sc2',
		q3='$sc3',
		q4='$sc4',
		q5='$sc5',
		q6='$sc6',
		q7='$sc7',
		q8='$sc8',
		q9='$sc9',
		q10='$sc10',
		q11='$sc11',
		q12='$sc12',
		save_q1='$tot1',
		save_q2='$tot2',
		save_q3='$tot3',
		save_q4='$tot4',
		save_q5='$tot5',
		save_q6='$tot6',
		save_q7='$tot7',
		save_q8='$tot8',
		save_q9='$tot9',
		save_q10='$tot10',
		save_q11='$tot11',
		save_q12='$tot12',
		tot_score='$save_total' where id_qm='$id'";
		  mssql_query($add2);
		  //echo "$q_addTemp";

			echo "<script type='text/javascript'>
			window.opener.location.reload();
			window.close();
			</script>";  	}
	  }
	  
	 if ($cancel)
		{
		?>
          <script type="text/javascript">
		window.close();
		</script> 
          <?php
		}
	 
	  ?>

</p>
</form>
<SCRIPT type="text/javascript" LANGUAGE=JavaScript>

function checkValuenotes1() {
                TextVal = document.forms['welcome'].notes1.value;
                if (TextVal.length > 2999) {
                        document.forms['welcome'].notes1.value = TextVal.substring(0,3000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes1.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes2() {
                TextVal = document.forms['welcome'].notes2.value;
                if (TextVal.length > 2999) {
                        document.forms['welcome'].notes2.value = TextVal.substring(0,3000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes2.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes3() {
                TextVal = document.forms['welcome'].notes3.value;
                if (TextVal.length > 2999) {
                        document.forms['welcome'].notes3.value = TextVal.substring(0,3000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes3.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes4() {
                TextVal = document.forms['welcome'].notes4.value;
                if (TextVal.length > 2999) {
                        document.forms['welcome'].notes1.value = TextVa4.substring(0,3000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes4.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes5() {
                TextVal = document.forms['welcome'].notes5.value;
                if (TextVal.length > 2999) {
                        document.forms['welcome'].notes5.value = TextVal.substring(0,3000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes5.value = TextVal.length+1;
                        return;
                }
        }
		
		
function checkValuenotes6() {
                TextVal = document.forms['welcome'].notes6.value;
                if (TextVal.length > 2999) {
                        document.forms['welcome'].notes6.value = TextVal.substring(0,3000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes6.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes7() {
                TextVal = document.forms['welcome'].notes7.value;
                if (TextVal.length > 2999) {
                        document.forms['welcome'].notes1.value = TextVa7.substring(0,3000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes7.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes8() {
                TextVal = document.forms['welcome'].notes8.value;
                if (TextVal.length > 2999) {
                        document.forms['welcome'].notes8.value = TextVal.substring(0,3000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes8.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes9() {
                TextVal = document.forms['welcome'].notes9.value;
                if (TextVal.length > 2999) {
                        document.forms['welcome'].notes9.value = TextVal.substring(0,3000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes9.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes10() {
                TextVal = document.forms['welcome'].notes10.value;
                if (TextVal.length > 2999) {
                        document.forms['welcome'].notes10.value = TextVal.substring(0,3000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes10.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes11() {
                TextVal = document.forms['welcome'].notes11.value;
                if (TextVal.length > 2999) {
                        document.forms['welcome'].notes11.value = TextVal.substring(0,3000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes11.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes12() {
                TextVal = document.forms['welcome'].notes12.value;
                if (TextVal.length > 2999) {
                        document.forms['welcome'].notes12.value = TextVal.substring(0,3000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes12.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes13() {
                TextVal = document.forms['welcome'].notes13.value;
                if (TextVal.length > 2999) {
                        document.forms['welcome'].notes13.value = TextVal.substring(0,3000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes13.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes14() {
                TextVal = document.forms['welcome'].notes14.value;
                if (TextVal.length > 2999) {
                        document.forms['welcome'].notes14.value = TextVal.substring(0,3000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes14.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes15() {
                TextVal = document.forms['welcome'].notes15.value;
                if (TextVal.length > 2999) {
                        document.forms['welcome'].notes15.value = TextVal.substring(0,3000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes15.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes16() {
                TextVal = document.forms['welcome'].notes16.value;
                if (TextVal.length > 2999) {
                        document.forms['welcome'].notes16.value = TextVal.substring(0,3000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes16.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes17() {
                TextVal = document.forms['welcome'].notes17.value;
                if (TextVal.length > 2999) {
                        document.forms['welcome'].notes17.value = TextVal.substring(0,3000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes17.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes18() {
                TextVal = document.forms['welcome'].notes18.value;
                if (TextVal.length > 2999) {
                        document.forms['welcome'].notes18.value = TextVal.substring(0,3000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes18.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes19() {
                TextVal = document.forms['welcome'].notes19.value;
                if (TextVal.length > 2999) {
                        document.forms['welcome'].notes19.value = TextVal.substring(0,3000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes19.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes20() {
                TextVal = document.forms['welcome'].notes20.value;
                if (TextVal.length > 2999) {
                        document.forms['welcome'].notes20.value = TextVal.substring(0,3000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes20.value = TextVal.length+1;
                        return;
                }
        }
		
		
</SCRIPT>

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
	parent.window.location="login.php"
	window.close();
	</script>
<?
}
?>