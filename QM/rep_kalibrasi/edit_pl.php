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

<form action="<? $PHP_SELF; ?>" method="post"  name="welcome" onKeyPress="return noenter()" enctype="multipart/form-data" >
<table width="98%" border="0" align="center" class="table table-bordered table-infinite">
  <thead>
  <tr bgcolor="#CCCCCC">
  <th width="98%" colspan="2"><div align="center">Form Input Process Level</div></th>
  </tr>
  </thead>
  </table width="98%" border="1">
  <table>
    <tr>
      <td width="25%"colspan="2">MSISDN</td>
      <td><input name="eid_qm" type="hidden" value="<? echo"$eid_qm";?>" >
	  
	  <?php
	  if($eid_qm !="" or !empty($eid_qm)){
		  $submittext="Update";
	  }else{
		  $submittext="Input";
	  }
	  ?>
	  <input name="msisdn" type="text" id="msisdn" value="<? echo"$msisdn";?>" class="input-large" onkeyup="validAngka(this)"></td>
    </tr>
    <tr>
      <td colspan="2">Customer Name </td>
      <td><input name="customer_name" type="text" id="customer_name" value="<? echo"$customer_name"; ?>" class="input-large"></td>
    </tr>
    <tr>
      <td colspan="2">Interaction Date </td>
      <td><span class="content">
        <input name="interaction_date" type="text" id="datepicker" value="<? echo "$interaction_date"; ?>" datepicker="true" datepicker_format="MM/DD/YYYY"  class="input-large" tabindex="2">
      </span></td>
    </tr>
    <tr>
      <td colspan="2">Observation Date </td>
      <td>        <span class="content">
        <? $observation_date=date("m/d/Y");?>
        <input name="observation_date" disabled="disabled" type="text" id="datepicker" value="<? echo "$observation_date"; ?>" datepicker="true" datepicker_format="MM/DD/YYYY"  class="input-large" tabindex="2">
</span></td>
    </tr>
    <tr>
      <td colspan="2"> Duration</td>
      <td><input name="hh_2" type="text" id="hh_2" value="<? echo"$hh_2"; ?>" size="2" maxlength="2" class="input-small" onkeyup="validAngka(this)">
:
  <input name="mm_2" type="text" id="mm_2" value="<? echo"$mm_2"; ?>" size="2" maxlength="2" class="input-small" onkeyup="validAngka(this)">
  :
  <input name="ss_2" type="text" id="ss_2" value="<? echo"$ss_2"; ?>" size="2" maxlength="2" class="input-small" onkeyup="validAngka(this)">
  (hh:mm:ss) </td>
    </tr>
    <tr>
      <td colspan="2">Week</td>
      <td><select name="week_" id="week_" class="uniformselect">
        <option value="0">Select
        <?php
			$katahh=array('1','2','3','4','5');
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
      <td colspan="2">Interaction Type</td>
      <td><select name="interaction_type" id="interaction_type" class="uniformselect" >
        <option value="0">Select
        <?php
			$katahh1=array('Dispute','Complaint','Request','Inquery');
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
      <td colspan="2">Product Knowledge</td>
      <td><select name="product_knowledge" id="product_knowledge" class="uniformselect" >
        <option value="0">Select
        <?php
			$katahh1=array('Yes','No');
		$counthh1 = count($katahh1);
							  
			for($i=0;$i<$counthh1;$i++)
			{
				if($katahh1[$i] == $product_knowledge)
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
      </select><br>
      <textarea name="notes_pk" cols="35" id="notes_pk"><? echo "$notes_pk"; ?></textarea></td>
    </tr>
    <tr>
      <td colspan="2">Activity Code</td>
      <td><input name="activity_code" type="text" id="activity_code" value="<? echo"$activity_code"; ?>" class="input-large"></td>
    </tr>
    <tr>
      <td colspan="2">Handling Process</td>
      <td><input name="handling_process" type="text" id="handling_process" value="<? echo"$handling_process"; ?>" class="input-large"></td>
    </tr>
    <tr>
      <td colspan="2">FCR</td>
      <td><select name="fcr" id="select" class="uniformselect">
        <option value="0">Select
          <?php
			$katahh4=array('Yes','No');
		$counthh4 = count($katahh4);
							  
			for($i=0;$i<$counthh4;$i++)
			{
				if($katahh4[$i] == $fcr)
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
      </select><br>
	  <textarea name="notes_fcr" cols="35" id="notes_fcr"><? echo "$notes_fcr"; ?></textarea></td>
    </tr>

    <tr>
      <td colspan="2">Repetitive Call</td>
      <td><select name="repetitive_call" id="select9" class="uniformselect">
        <option value="0">Select
        <?php
			$katahh4=array('Yes','No');
		$counthh4 = count($katahh4);
							  
			for($i=0;$i<$counthh4;$i++)
			{
				if($katahh4[$i] == $repetitive_call)
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
      </select><br>
	  <textarea name="notes_repeat" cols="35" id="notes_repeat"><? echo "$notes_repeat"; ?></textarea></td>
    </tr>
    <tr>
	  <td></td>
	  <td>Anthusiasm</td>
      <td><select name="anthusiasm" id="select9" class="uniformselect">
        <option value="0">Select
        <?php
			$katahh4=array('Yes','No');
		$counthh4 = count($katahh4);
							  
			for($i=0;$i<$counthh4;$i++)
			{
				if($katahh4[$i] == $anthusiasm)
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
      </select><br>
	  <textarea name="notes_anthusiasm" cols="35" id="notes_anthusiasm"><? echo "$notes_anthusiasm"; ?></textarea></td>
      </tr>
	  
	  <tr>
      <td rowspan="3" bgcolor="#cccccc">Personalize Communication<br> after Reborn</td>	  
	  <td >Manner</td>
      <td><select name="manner" id="select9" class="uniformselect">
        <option value="0">Select
        <?php
			$katahh4=array('Yes','No');
		$counthh4 = count($katahh4);
							  
			for($i=0;$i<$counthh4;$i++)
			{
				if($katahh4[$i] == $manner)
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
      </select><br>
	  <textarea name="notes_manner" cols="35" id="notes_manner"><? echo "$notes_manner"; ?></textarea></td>
      </tr>
	  <tr>
	  <td>Effective Handling</td>
      <td><select name="effective_handling" id="select9" class="uniformselect">
        <option value="0">Select
        <?php
			$katahh4=array('Yes','No');
		$counthh4 = count($katahh4);
							  
			for($i=0;$i<$counthh4;$i++)
			{
				if($katahh4[$i] == $effective_handling)
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
      </select><br>
	  <textarea name="notes_eh" cols="35" id="notes_eh"><? echo "$notes_eh"; ?></textarea></td>
    </tr> 
	
    <tr>
      <td colspan="2"></td>
      <td></td>
    </tr>
    <tr>
      <td colspan="2"></td>
      <td>
    <input name="id_qm"  id="id_qm" type="hidden" value="<? echo"$id_qm"; ?>">
			  <?

		echo"<SCRIPT TYPE='text/javascript'>
		function confirmDelete()
		{
			return confirm('Are you sure you wish to save this entry?');
		}
		</script>";

		echo"<SCRIPT TYPE='text/javascript'>
		function confirmDelete2()
		{
			return confirm('Are you sure you wish to delete this entry?');
		}
		</script>";

				  ?>
    <input type="submit" name="Submit" value="Update" onclick="return confirmDelete();" class="btn btn-primary">
    <input name="cancel" type="submit" id="cancel" value="Refresh"  class="btn btn-primary"/>
	  </td>
    </tr>	  
  
<?
           
			include "konek_qm.php";
			if ($repetitive_call=="yes")
			{
			$s_date_prev_call="$date_prev_call"; 
			$s_prev_agent="$prev_agent";
			}
			if ($repetitive_call=="no")
			{
			$s_date_prev_call="$observation_date"; 
			$s_prev_agent="-";
			}
			
		  if ($Submit)
			{
			if($Submit=="Update"){
				
				if($msisdn=="" or $customer_name=="" or $interaction_date=="" or $observation_date=="0" or $hh_2=="" or $mm_2=="0" or $ss_2=="" or $week_=="" or $interaction_type=="" or $product_knowledge=="" or $activity_code=="" or $handling_process=="" or $fcr=="" or $repetitive_call=="" or $anthusiasm=="" or $manner=="" or $effective_handling=="")
				{
				?>
				<script type="text/javascript">
				window.alert("Value not completed")
				</script>
				<?
				}
				else 
				{	
				$date_saved=date("m/d/Y H:i:s");
				$slas=":";	
				$ss2=00;	
				$interaction_date_save="$interaction_date $hh$slas$mm$slas$ss2"; 
		
		/*
		
		/*/
				$q_addTemp="update table_qm_pl set customer_name='$customer_name',
				msisdn='$msisdn',
				interaction_date='$interaction_date',
				--observation_date='$observation_date',
				hh_duration='$hh_2',
				mm_duration='$mm_2',
				ss_duration='$ss_2',
				week_='$week_',
				interaction_type='$interaction_type',
				product_knowledge='$product_knowledge',
				notes_pk='$notes_pk',
				activity_code='$activity_code',
				handling_process='$handling_process',
				fcr='$fcr',
				notes_fcr='$notes_fcr',
				repeat='$repetitive_call',
				notes_repeat='$notes_repeat',
				antusiasm='$anthusiasm',
				notes_antusiasm='$notes_anthusiasm',
				manner='$manner',
				notes_manner='$notes_manner',
				effective_handling='$effective_handling',
				notes_eh='$notes_eh' WHERE id_qm=$id_qm";
				  $simpan_data=mssql_query($q_addTemp);
				  echo"$q_addTemp";
			  
				echo "<script type='text/javascript'>
				window.opener.location.reload();
				window.close();
				</script>";  		
					}
				
			}else{
				
			if($idpTL==0){
				?>
				<script type="text/javascript">
				window.alert("This agent does not have a Team Leader, Please Contact HRMS Administrator to add data TL on this agent.")
				</script>
			<?
			}else if($userTextBox=="" or $namaTextBox=="" or $kd_division=="0" or $kd_departemen=="0" or $kd_unit=="0" or $msisdn=="" or $customer_name=="" or $interaction_date=="" or $observation_date=="0" or $hh_2=="" or $mm_2=="0" or $ss_2=="" or $week_=="" or $interaction_type=="" or $product_knowledge=="" or $activity_code=="" or $handling_process=="" or $fcr=="" or $repetitive_call=="" or $anthusiasm=="" or $manner=="" or $effective_handling=="")
			{
			?>
            <script type="text/javascript">
			window.alert("Value not completed")
			</script>
            <?
			}
			else 
			{	
			$date_saved=date("m/d/Y H:i:s");
			$slas=":";	
			$ss2=00;	
			$interaction_date_save="$interaction_date $hh$slas$mm$slas$ss2"; 
		
		/*
		
		/*/
			$q_addTemp="insert into table_qm_pl(customer_name,msisdn,interaction_date,observation_date,hh_duration,mm_duration,ss_duration,week_,interaction_type,product_knowledge,notes_pk,activity_code,handling_process,fcr,notes_fcr,repeat,notes_repeat,antusiasm,notes_antusiasm,manner,notes_manner,effective_handling,notes_eh,region,id_pribadi_user,id_unit,id_pribadi_observer,tl_name,date_saved)
			values('$customer_name','$msisdn','$interaction_date','$observation_date','$hh_2','$mm_2','$ss_2','$week_','$interaction_type','$product_knowledge','$notes_pk','$activity_code','$handling_process','$fcr','$notes_fcr','$repetitive_call','$notes_repeat','$anthusiasm','$notes_anthusiasm','$manner','$notes_manner','$effective_handling','$notes_eh','$kd_region','$pribadi','$kd_unit','$SES_hendi','$nTL','$date_saved')";
			  $simpan_data=mssql_query($q_addTemp);
			  
			  echo"<script type='text/javascript'>alert('Data Berhasil Disimpan');
window.location='page.php?index=add_process_level&div=cco'
</script> ";		

			//echo "$q_addTemp";
			   /*if ($simpan_data)
				{ 
				$q_addTemp2="update table_qm set status_save='complete',date_saved='$observation_date' where id_qm='$id_qm'";
				echo "$q_addTemp2";
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
				}	*/
			}
		  }
		}
  
	 if ($cancel)
		{
		?>
          <script type="text/javascript">
		window.location="add_process_level.php"
		</script> 
          <?php
		}
	 
	  ?>

</table>
</form>
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