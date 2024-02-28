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
					||ext2 == "pdf" ||ext2 == "jpeg" ||ext2 == "jpg")
					
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
	<form  type="text" action="<? $PHP_SELF; ?>"  enctype="multipart/form-data" method="post" name="satu" onkeypress="return noenter()">
  <p align="center">Form Input</p>
  <table width="386" border="1" align="center" class="table table-bordered table-infinite">
    <tr>
      <td width="181">Agent Name </td>
      <td width="195"><input name="full_name" type="text" disabled id="full_name" value="<? echo"$full_name";?>" class="input-large"></td>
    </tr>
    <tr>
      <td>TL / Supervisor Name </td>
      <td><input name="spv_name" type="text" id="spv_name"  required value="<? echo"$spv_name"; ?>" class="input-large"></td>
    </tr>
    <tr>
      <td>Observer Name </td>
      <td><input name="observer_name" type="text" disabled id="observer_name" value="<? echo"$observer_name"; ?>" required class="input-large"></td>
    </tr>
    <tr>
      <td>Interaction Date </td>
      <td><span class="content">
        <input name="interaction_date" type="text" required id="datepicker" value="<? echo "$interaction_date"; ?>" datepicker="true" datepicker_format="MM/DD/YYYY"  class="input-large" tabindex="2">
      </span></td>
    </tr>
    <tr>
      <td>Interaction Time </td>
      <td><input name="hh" type="text" id="hh" required value="<? echo"$hh"; ?>" size="2" maxlength="2" class="input-small">
        :
        <input name="mm" type="text" id="mm" required value="<? echo"$mm"; ?>" size="2" maxlength="2" class="input-small">        
        (hh:mm) </td>
    </tr>
    <tr>
      <td>Observation Date </td>
      <td>        <span class="content">
        <? $observation_date=date("m/d/Y");?>
        <input name="observation_date" type="text" required id="datepicker1" disabled="disabled" value="<? echo "$observation_date"; ?>" datepicker="true" datepicker_format="MM/DD/YYYY"  class="input-large" tabindex="2">
</span></td>
    </tr>
    <tr>
      <td>Week</td>
      <td><select name="week_" required id="week_" class="uniformselect"  >
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
      <td><input name="customer_name" type="text" id="customer_name" required value="<? echo"$customer_name"; ?>" class="input-large"></td>
    </tr>
    <tr>
      <td>Interaction Type</td>
      <td><select name="interaction_type" id="interaction_type" required class="uniformselect" >
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
      <td><input name="product_type" maxlength="200"type="text" required id="product_type" value="<? echo"$product_type"; ?>" class="input-large"></td>
    </tr>
    <tr>
      <td>Product Detail</td>
      <td><input name="product_detail" maxlength="200" type="text" required id="product_detail" value="<? echo"$product_detail"; ?>" class="input-large"></td>
    </tr>
    <tr>
      <td>Product Detail by Agent</td>
      <td><input name="product_detail_agent" maxlength="200" required type="text" id="product_detail_agent" value="<? echo"$product_detail_agent"; ?>" class="input-large"></td>
    </tr>
    <tr>
      <td>FCR atau Not FCR</td>
      <td><select name="fcr" id="fcr" class="uniformselect" required>
        <option value="0">Select
        <?php
			$katahh2=array('FCR','Not FCR');
		$counthh2 = count($katahh2);
							  
			for($i=0;$i<$counthh2;$i++)
			{
				if($katahh2[$i] == $fcr)
				{
					echo "<option value='$katahh2[$i]' selected>$katahh2[$i]";
				}
				else
				{
					echo "<option value='$katahh2[$i]'>$katahh2[$i]";
				}
			}
			?>
        </option>
      </select></td>
    </tr>
    <tr>
      <td>Repeat (Y / N)</td>
      <td><select name="repeat" id="repeat" class="uniformselect" required onchange="satu.submit()">
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
        <input name="date_prev_call" required id="datepicker2" <? if ($repeat=="no"){?> disabled <? } else {}?> type="text" id="date_prev_call" value="<? echo "$date_prev_call"; ?>" datepicker="true" datepicker_format="MM/DD/YYYY"  class="input-large" tabindex="2">
      </span></td>
    </tr>
    <tr>
      <td>Previous Agent </td>
      <td><input name="prev_agent" required  <? if ($repeat=="no"){?> disabled <? } else {}?> type="text" id="prev_agent" value="<? echo"$prev_agent"; ?>" class="input-large"></td>
    </tr>
    <tr>
      <td>Handling time (duration)</td>
      <td><input name="hh_2" type="text" required id="hh_2" value="<? echo"$hh_2"; ?>" size="2" maxlength="2" class="input-small">
:
  <input name="mm_2" type="text" id="mm_2" required value="<? echo"$mm_2"; ?>" size="2" maxlength="2" class="input-small">
  :
  <input name="ss_2" type="text" id="ss_2" required value="<? echo"$ss_2"; ?>" size="2" maxlength="2" class="input-small">
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
      <td>FE Accuracy</td>
      <td><input name="sc_fe" type="text" disabled id="sc_fe" value="<? echo"$sc_fe"; ?>" size="3" maxlength="3" class="input-large"></td>
    </tr>
    <tr>
      <td>NFE Accuracy</td>
      <td><input name="sc_nfe" type="text" disabled id="sc_nfe" value="<? echo"$sc_nfe"; ?>" size="3" maxlength="3" class="input-large"></td>
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
      <td>Strength Agent</td>
      <td><textarea name="strength_agent" cols="35" id="strength_agent" required ><? echo "$strength_agent"; ?></textarea></td>
    </tr>
	<tr>
      <td>Area to be improved</td>
      <td><textarea name="improved" cols="35" id="improved" required ><? echo "$improved"; ?></textarea></td>
    </tr>
	<tr>
      <td>Recommendation</td>
      <td><textarea name="recommendation" cols="35" id="recommendation" required ><? echo "$recommendation"; ?></textarea></td>
    </tr>
	<tr>
      <td>Action to be done - QA</td>
      <td><textarea name="action_done_qa" cols="35" id="action_done_qa" required><? echo "$action_done_qa"; ?></textarea>
	  <input type="file" name="file_action_done_qa" id="file_action_done_qa" /></td>
    </tr>
	<tr>
      <td>Action to be done - Opers</td>
      <td><textarea name="action_done_ops" cols="35" id="action_done_ops" required><? echo "$action_done_ops"; ?></textarea>
	  <input type="file" name="file_action_done_ops" id="file_action_done_ops" /></td>
    </tr>
	<tr>
      <td>Notes sample recording </td>
      <td><textarea name="notes_recording" cols="35" id="notes_recording" required><? echo "$notes_recording"; ?></textarea>
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
	  
		if($strength_agent=="" or $improved=="" or $recommendation=="" or $ss="" or $spv_name=="" or $interaction_date=="" or $observation_date=="" or $week_=="0" or $customer_name=="" or $interaction_type=="0" or $product_type=="" or $product_detail=="" or $product_detail_agent=="" or $fcr=="0" or $repeat=="0" or $s_date_prev_call=="" or $s_prev_agent=="" or hh_2=="" or $mm_2=="" or $drop_call=="0" or $notes_recording=="")
			{
			?>
            <script type="text/javascript">
			window.alert("Value not completed")
			</script>
            <?
			}
			
		else 
			
			{
		$s_strength_agent = str_replace("'", "", "$strength_agent");
		$s_improved = str_replace("'", "", "$improved");
		$s_recommendation = str_replace("'", "", "$recommendation");
		$s_action_done_qa = str_replace("'", "", "$action_done_qa");
		$s_action_done_ops = str_replace("'", "", "$action_done_ops");
		$s_notes_recording = str_replace("'", "", "$notes_recording");
		
		
		$date_saved=date("m/d/Y H:i:s");
		$slas=":";	
		$ss2=00;	
		$interaction_date_save="$interaction_date $hh$slas$mm$slas$ss2"; 
		
		
		
		
		
		
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
		/*
		
		/*/
		
		

		$q_addTemp="insert into table_qm_newHireIB_detail(strength_agent,improved,recommendation,
		action_done_qa,action_done_ops,file_action_done_qa,file_action_done_ops,id_qm,spv_name,interaction_date,observation_date,week_,customer_name,interaction_type,product_type,product_detail,product_detail_agent,fcr,repeat,date_prev_call,prev_agent,hh_handling_time,mm_handling_time,ss_handling_time,drop_call,notes_recording)
		  values('$s_strength_agent','$s_improved','$s_recommendation','$s_action_done_qa','$s_action_done_ops','$newName','$newName2','$id_qm','$spv_name','$interaction_date_save','$observation_date','$week_','$customer_name','$interaction_type','$product_type','$product_detail','$product_detail_agent','$fcr','$repeat','$date_prev_call','$prev_agent','$hh_2','$mm_2','$ss_2','$drop_call','$s_notes_recording')";
		  $simpan_data=mssql_query($q_addTemp);
		  //echo "$q_addTemp";
			   if ($simpan_data)
				{ 
				$q_addTemp2="update table_qm_newHireIB set status_save='complete',date_saved='$observation_date' where id_qm='$id_qm'";
				mssql_query($q_addTemp2);
		
				echo "	<script type='text/javascript'>
				window.opener.document.welcome.submit()
				window.close();
				</script>";	 	
				}
				else
				{
				echo"<script type='text/javascript'>
				window.alert('Error Please Cek Your Data and Capture this Page')
				</script> ";
				}	
			}
	  }
	  
	 if ($cancel)
		{
		?>
          <script type="text/javascript">
		window.location="add_newHireIB_detail.php"
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
   jQuery('#datepicker2').datepicker();
  
    
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