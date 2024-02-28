<?
session_name("AUTHEN");
session_start();
//echo"$SES_USERNAME";
if ($SES_hendi<>"")
{
include "konek_qm.php";
date_default_timezone_set('Asia/Jakarta');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

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
window.open(href, windowname, 'width=1000,height=700,scrollbars=yes');
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
window.open(href, windowname, 'width=600,height=550,scrollbars=yes');
return false;
}

//-->
</SCRIPT>
<script language='javascript'>
function validAngka(a)
{
	if(!/^[0-9.]+$/.test(a.value))
	{
		a.value = a.value.substring(0,a.value.length-1000);
	}
}
</script>  
<SCRIPT type="text/javascript" LANGUAGE=JavaScript>

function checkValuenotes1() {
                TextVal = document.forms['welcome'].notes1.value;
                if (TextVal.length > 999) {
                        document.forms['welcome'].notes1.value = TextVal.substring(0,1000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes1.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes2() {
                TextVal = document.forms['welcome'].notes2.value;
                if (TextVal.length > 999) {
                        document.forms['welcome'].notes2.value = TextVal.substring(0,1000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes2.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes3() {
                TextVal = document.forms['welcome'].notes3.value;
                if (TextVal.length > 999) {
                        document.forms['welcome'].notes3.value = TextVal.substring(0,1000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes3.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes4() {
                TextVal = document.forms['welcome'].notes4.value;
                if (TextVal.length > 999) {
                        document.forms['welcome'].notes1.value = TextVa4.substring(0,1000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes4.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes5() {
                TextVal = document.forms['welcome'].notes5.value;
                if (TextVal.length > 999) {
                        document.forms['welcome'].notes5.value = TextVal.substring(0,1000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes5.value = TextVal.length+1;
                        return;
                }
        }
		
		
function checkValuenotes6() {
                TextVal = document.forms['welcome'].notes6.value;
                if (TextVal.length > 999) {
                        document.forms['welcome'].notes6.value = TextVal.substring(0,1000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes6.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes7() {
                TextVal = document.forms['welcome'].notes7.value;
                if (TextVal.length > 999) {
                        document.forms['welcome'].notes1.value = TextVa7.substring(0,1000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes7.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes8() {
                TextVal = document.forms['welcome'].notes8.value;
                if (TextVal.length > 999) {
                        document.forms['welcome'].notes8.value = TextVal.substring(0,1000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes8.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes9() {
                TextVal = document.forms['welcome'].notes9.value;
                if (TextVal.length > 999) {
                        document.forms['welcome'].notes9.value = TextVal.substring(0,1000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes9.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes10() {
                TextVal = document.forms['welcome'].notes10.value;
                if (TextVal.length > 999) {
                        document.forms['welcome'].notes10.value = TextVal.substring(0,1000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes10.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes11() {
                TextVal = document.forms['welcome'].notes11.value;
                if (TextVal.length > 999) {
                        document.forms['welcome'].notes11.value = TextVal.substring(0,1000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes11.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes12() {
                TextVal = document.forms['welcome'].notes12.value;
                if (TextVal.length > 999) {
                        document.forms['welcome'].notes12.value = TextVal.substring(0,1000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes12.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes13() {
                TextVal = document.forms['welcome'].notes13.value;
                if (TextVal.length > 999) {
                        document.forms['welcome'].notes13.value = TextVal.substring(0,1000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes13.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes14() {
                TextVal = document.forms['welcome'].notes14.value;
                if (TextVal.length > 999) {
                        document.forms['welcome'].notes14.value = TextVal.substring(0,1000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes14.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes15() {
                TextVal = document.forms['welcome'].notes15.value;
                if (TextVal.length > 999) {
                        document.forms['welcome'].notes15.value = TextVal.substring(0,1000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes15.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes16() {
                TextVal = document.forms['welcome'].notes16.value;
                if (TextVal.length > 999) {
                        document.forms['welcome'].notes16.value = TextVal.substring(0,1000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes16.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes17() {
                TextVal = document.forms['welcome'].notes17.value;
                if (TextVal.length > 999) {
                        document.forms['welcome'].notes17.value = TextVal.substring(0,1000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes17.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes18() {
                TextVal = document.forms['welcome'].notes18.value;
                if (TextVal.length > 999) {
                        document.forms['welcome'].notes18.value = TextVal.substring(0,1000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes18.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes19() {
                TextVal = document.forms['welcome'].notes19.value;
                if (TextVal.length > 999) {
                        document.forms['welcome'].notes19.value = TextVal.substring(0,1000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes19.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes20() {
                TextVal = document.forms['welcome'].notes20.value;
                if (TextVal.length > 999) {
                        document.forms['welcome'].notes20.value = TextVal.substring(0,1000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes20.value = TextVal.length+1;
                        return;
                }
        }
		
		
</SCRIPT>
<script language="javascript">
 function angka(e) {
    if (!/^[-_/''""+=(),.:;<>\|{}a-z, A-Z, 0-9]+$/.test(e.value)) {
      e.value = e.value.substring(0,e.value.length-1);
   }
 }
</script>
</head>
<body>
<form action="<? $PHP_SELF; ?>" method="post" name="welcome" id="welcome">
  <p align="center">&nbsp;</p>
  <table width="313" border="0">
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="90">NIK</td>
      <td width="213"><input name="userText" type="text" id="userText" value="<? echo "$userText"; ?>" /></td>
    </tr>
    <tr>
      <td>Nama</td>
      <td><input name="namaText" type="text" id="namaText" value="<? echo "$namaText"; ?>" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="searchButton" type="submit" id="searchButton" value="Search"  class="btn btn-primary"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="98%" border="1" align="center" cellspacing="1" class="table table-bordered table-infinite">
  <thead>
    <tr bgcolor="#CCCCCC">
      <th width="2%" class="head0"><div align="center">No</div></th>
      <th width="13%" class="head0"><div align="center">Username</div></th>
      <th width="18%" class="head0"><div align="center">Nama</div></th>
      <th width="19%" class="head0"><div align="center">Unit</div></th>
      <th width="11%" class="head0"><div align="center">Level</div></th>
      <th width="10%" class="head0"><div align="center">NIK</div></th>
      <th width="13%" class="head0"><div align="center">Action</div></th>
    </tr>
	</thead>
    <?
	$stot="select count(*)as jum_s from db_qm.dbo.table_qm_pl where id_pribadi_observer='$SES_hendi'";//echo "$q1_yes_jum";
	   $r_stot=mssql_query($stot);
	   while($d_stot=mssql_fetch_array($r_stot))
			{
		     	$jum_tot1=$d_stot["jum_s"];
			} 		


		  if ($searchButton)
	  {
	  
		/*if($jum_tot1<>"0")
			{
			?>
            <script type="text/javascript">
			window.alert("complete the form at the bottom")
			</script>
            <?
			}
			
		else 
			
			{*/

					if(isset($searchButton))
					{
						
					/*$q_user="select a.id_karyawan,a.nama,a.nik_karyawan,a.id_data_pribadi,left(z.id_unit,len(z.id_unit)-1) as id_fungsi,left(z.id_unit,charindex('0',z.id_unit)-1) as id_divisi,z.id_unit,b.nama_unit,c.qm
							from cco.hrms.dbo.tb_data_pribadi a
							inner join cco.hrms.dbo.tb_detail_karyawan z on a.id_data_pribadi=z.id_data_pribadi
							inner join cco.hrms.dbo.tb_unit b on a.id_unit=b.id_unit
							inner join cco.hrms.dbo.tb_auth c on a.id_data_pribadi=c.id_data_pribadi
							where status_kerja=1 and (a.nik_karyawan like '%$userText%' or a.id_karyawan like '%$userText%') and a.nama like '%$namaText%'";*/
					$q_user="[sp_searchUserPL]'%$userText%','%$namaText%'";
					//echo "$q_user";
					$r_user=mssql_query($q_user);
					$no=1;
					while($d_user=mssql_fetch_array($r_user))
						{
						$pribadi=$d_user["id_data_pribadi"];
						//session_register("SES_IDUSER");
						//$SES_IDUSER=$userid;
						$akd_divisi=$d_user["id_divisi"];
						$akd_departemen=$d_user["id_fungsi"];
						//$userid=$d_user["userid"];
						$usernameS=$d_user["id_karyawan"];
						$region=$d_user["region"];
						$full_name=$d_user["nama"];
						$tl_name=$d_user["id_tl"];
						$kode_level=$d_user["qm"];
						$akd_unit=$d_user["id_unit"];
						$nama_unit=$d_user["nama_unit"];
						
						$nik=$d_user["nik_karyawan"];
						echo "<tr class='content'>
                      <td>$no</td>
                      <td>$usernameS</td>
                      <td>$full_name</td>
                      <td>$nama_unit</td>
                      <td>$kode_level</td>
				
					  <td>$nik</td>";
                     // if($akd_departemen <= CCO03){
                echo"                       
                      <td><a href='?index=add_process_level&div=ccc&edit=t&userTextBox=$usernameS&namaTextBox=$full_name&id_lb=$lb&searchButton=1&kd_division=$akd_divisi&kd_departemen=$akd_departemen&userid=$userid&userText=$userText&namaText=$namaText&kd_unit=$akd_unit&kd_region=$region&useridHidden=$userid&nikTextBox=$nik&pribadi=$pribadi'>Create</a>";
							// }else{ echo "<td></td>";}
					  echo "</td>
                      </tr>";
					  $no++;
					}
					
					$q_user2="select * FROM cco.hrms.dbo.tb_LB where lb like '%$namaText%'";
					//echo "$q_user";
					$r_user2=mssql_query($q_user2);
					
					while($d_user2=mssql_fetch_array($r_user2))
						{
						//$pribadi=$d_user2["id_data_pribadi"];
						$akd_divisi=$d_user2["id_divisi"];
						$akd_departemen=$d_user2["id_fungsi"];
						$usernameS=$d_user2["id_karyawan"];
						$full_name=$d_user2["nama"];
						$kode_level=$d_user2["qm"];
						$akd_unit=$d_user2["id_unit"];
						$nama_unit=$d_user2["nama_unit"];
						$region=$d_user["region"];
						$lb = $d_user2["lb"];
						$nik=$d_user2["nik_karyawan"];
						$nu=$d_user2["nu"];
						
				echo "<tr class='content'>
                      <td>$no</td>
                      <td>$usernameS</td>
                      <td>$lb</td>
                      <td>$nama_unit</td>
                      <td>$kode_level</td>
					  <td>$nik</td>
                     
                      <td><a href='?index=add_process_level&div=ccc&edit=t&userTextBox=$usernameS&namaTextBox=$lb&id_lb=$lb&searchButton=1&kd_division=$akd_divisi&kd_departemen=$akd_departemen&userid=$userid&userText=$userText&namaText=$namaText&kd_unit=$akd_unit&kd_region=$region&useridHidden=$userid&nikTextBox=$nik&pribadi=$pribadi&nu=$nu'>Create</a>";
					
					  echo "</td></tr>";
					  $no++;
					}
				}
			//}
		}
					?>
  </table>
  <p>&nbsp;</p>
  <table width="313" border="0">
    <tr>
      <td>Region</td>
      <td><select name="kd_region" id="select7" class="box" onchange="welcome.submit()" >
          <option value="0" selected="selected">Region Name</option>
          <?php
$query = "SELECT distinct region FROM cco.hrms.dbo.tb_data_pribadi";
$result_region = mssql_query( $query );
		$KATAGORIregion = array();
		while($data = mssql_fetch_row($result_region))
		{
			$KATAGORIregion[] = $data["1"];
			$kataregion[] = $data["0"];
		}
		$countregion = count($KATAGORIregion);

					  
			for($i=0;$i<$countregion;$i++)
			{
				if($kataregion[$i] == $kd_region)
				{
					echo "<option value='$kataregion[$i]' selected>$kataregion[$i]</option>";
				}
				else
				{
					echo "<option value='$kataregion[$i]'>$kataregion[$i]</option>";
				}
			}
			?>
          
      </select></td>
    </tr>  
    <tr>
      <td>NIK</td>
      <td><input name="pribadi" type="hidden" value="<? echo "$pribadi"; ?>" />
	  <input name="id_lb" type="hidden" value="<? echo "$id_lb"; ?>" />
	  <input name="userTextBox" type="text" id="userTextBox7" value="<? echo "$userTextBox"; ?>" onchange="welcome.submit()"/>
	  <?
	  $sql = mssql_query("select * from cco.hrms.dbo.tb_data_pribadi where nik_karyawan ='$userTextBox'");
	  $qry = mssql_fetch_array($sql);
	  $pribadi = $qry['id_data_pribadi'];
	  ?></td>
    </tr>
    <tr>
      <td>CEC Name</td>
      <td><input name="namaTextBox" type="text" id="namaTextBox7" value="<? echo "$namaTextBox"; ?>" /></td>
    </tr>
    <tr>
      <td>TL Name</td>  
      <td>
	  <?php
	/*	$query = "select z.id_tl from cco.hrms.dbo.tb_data_pribadi a inner join cco.hrms.dbo.tb_detail_karyawan z on a.id_data_pribadi=z.id_data_pribadi where nik_karyawan='$userTextBox'";
		//echo"$query";
		$result_tl = mssql_query( $query );
		$action=mssql_fetch_array($result_tl);
		$idT=$action['id_tl'];		
		if($idT !=""){
			$vdT=$idT;
		}else{
			$vdT=0;
		}
		//echo"daniel : $vdT";
		$q	="select id_data_pribadi,nama FROM cco.hrms.dbo.tb_data_pribadi where cast(id_data_pribadi as varchar)='$vdT'";
		//echo"$q";
		$sq	=mssql_query($q);
		if(mssql_num_rows($sq)>=1){
			$lqs=mssql_fetch_array($sq);
			$idpTL=$lqs['id_data_pribadi'];
			$nTL=$lqs['nama'];
		}else{
			$idpTL=0;
			$nTL="No Data TL for This Agent";
		}
		//echo"Suryanda $nTL";*/
	  ?>
	  <!-- <input name="valueTextBoxTL" type="hidden" id="valueofText" value=" echo "$idpTL"; ?>"/> -->
	  <input name="nama_tl" type="text" id="nama_tl" value="<? echo"$nama_tl";?>">
	  <!--<input name="namaTextBoxTL" type="text" id="userTextBox7" value="? echo "$nTL"; ?>" onchange="welcome.submit()" disabled="disabled"/>-->
	  </td>
    </tr>	
    <tr>
      <td>Divisi</td>
      <td><select name="kd_division" id="select7" class="box" onchange="welcome.submit()" >
          <option value="0" selected="selected">Divisi Name</option>
          <?php
$query = "SELECT * FROM cco.hrms.dbo.tb_divisi where id_divisi = '$_GET[kd_division]'";
$result_divisi = mssql_query( $query );
		$KATAGORIdivisi = array();
		while($data = mssql_fetch_row($result_divisi))
		{
			$KATAGORIdivisi[] = $data["1"];
			$katadivisi[] = $data["0"];
		}
		$countdivisi = count($KATAGORIdivisi);

					  
			for($i=0;$i<$countdivisi;$i++)
			{
				if($katadivisi[$i] == $kd_division)
				{
					echo "<option value='$katadivisi[$i]' selected>$KATAGORIdivisi[$i]</option>";
				}
				else
				{
					echo "<option value='$katadivisi[$i]'>$KATAGORIdivisi[$i]</option>";
				}
			}
			?> 
      </select></td>
    </tr>
    <tr>
      <td>Departemen</td>
      <td><select name="kd_departemen" class="box" id="kd_departemen" onchange="welcome.submit()" >
          <option value="0" selected="selected">Departemen Name</option>
          <?php
$query="select * from cco.hrms.dbo.tb_fungsi where left(id_fungsi,charindex('0',id_fungsi)-1)='$kd_division'";
$result_departemen = mssql_query( $query );
		$KATAGORIdepartemen = array();
		while($data = mssql_fetch_row($result_departemen))
		{
			$KATAGORIdepartemen[] = $data["1"];
			$katadepartemen[] = $data["0"];
		}
		$countdepartemen = count($KATAGORIdepartemen);
					  
		for($i=0;$i<$countdepartemen;$i++)
			{
				if($katadepartemen[$i]  == $kd_departemen)
				{
					echo "<option value='$katadepartemen[$i]' selected>$KATAGORIdepartemen[$i]</option>";
				}
				else
				{
					echo "<option value='$katadepartemen[$i]'>$KATAGORIdepartemen[$i]</option>";
				}
			} 
			?> 
      </select></td>
    </tr>
    <tr>
      <td>Unit Kerja </td>
      <td><select name="kd_unit" class="box" id="kd_unit" >
          <option value="0" selected="selected">Unit Name</option>
          <?php
$query="select * from cco.hrms.dbo.tb_unit where left(id_unit,len(id_unit)-1)='$kd_departemen'";
$result = mssql_query( $query );
		$KATAGORI = array();
		while($data = mssql_fetch_row($result))
		{
			$KATAGORI[] = $data["1"];
			$kata[] = $data["0"];
		}
		$count = count($KATAGORI);

					  //
			for($i=0;$i<$count;$i++)
			{
				if($kata[$i] == $kd_unit)
				{
					echo "<option selected value='$kata[$i]' >$KATAGORI[$i]</option>";
				}
				else
				{
					echo "<option value='$kata[$i]'>$KATAGORI[$i]</option>";
				}
			}
			?> 
      </select></td>
    </tr>
	</table>
  <p>&nbsp;</p>
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
      <td colspan="2"> Interaction Time</td>
      <td><input name="hh_it" type="text" id="hh_it" value="<? echo"$hh_it"; ?>" size="2" maxlength="2" class="input-small" onkeyup="validAngka(this)">
:
  <input name="mm_it" type="text" id="mm_it" value="<? echo"$mm_it"; ?>" size="2" maxlength="2" class="input-small" onkeyup="validAngka(this)">
  (hh:mm) </td>
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
        <option value="0">Select</option>
        <?php
			$katahh=array('1','2','3','4','5');
			$counthh = count($katahh);							  
			for($i=0;$i<$counthh;$i++)
			{
				if($katahh[$i] == $week_)
				{
					echo "<option value='$katahh[$i]' selected>$katahh[$i]</option>";
				}
				else
				{
					echo "<option value='$katahh[$i]'>$katahh[$i]</option>";
				}
			}
			?> 
      </select></td>
    </tr>	
    <tr>
      <td colspan="2">Interaction Type</td>
      <td><select name="interaction_type" id="interaction_type" class="uniformselect" >
        <option value="0">Select</option>
        <?php
			$katahh1=array('Dispute','Complaint','Request','Inquery');
		$counthh1 = count($katahh1);
							  
			for($i=0;$i<$counthh1;$i++)
			{
				if($katahh1[$i] == $interaction_type)
				{
					echo "<option value='$katahh1[$i]' selected>$katahh1[$i]</option>";
				}
				else
				{
					echo "<option value='$katahh1[$i]'>$katahh1[$i]</option>";
				}
			}
			?> 
      </select></td>
    </tr>
    <tr>
      <td colspan="2">Product Knowledge</td>
      <td><select name="product_knowledge" id="product_knowledge" class="uniformselect" >
        <option value="0">Select</option>
        <?php
			$katahh1=array('Yes','No');
		$counthh1 = count($katahh1);
							  
			for($i=0;$i<$counthh1;$i++)
			{
				if($katahh1[$i] == $product_knowledge)
				{
					echo "<option value='$katahh1[$i]' selected>$katahh1[$i]</option>";
				}
				else
				{
					echo "<option value='$katahh1[$i]'>$katahh1[$i]</option>";
				}
			}
			?> 
      </select><br>
      <textarea name="notes_pk" cols="35" id="notes_pk"><? echo "$notes_pk"; ?></textarea></td>
    </tr>
    <tr>
      <td colspan="2">Activity Code</td>
      <td><select name="activity_code" id="activity_code" class="uniformselect" >
        <option value="0">Select</option>
        <?php
			$katahh1=array('Yes','No');
		$counthh1 = count($katahh1);
							  
			for($i=0;$i<$counthh1;$i++)
			{
				if($katahh1[$i] == $activity_code)
				{
					echo "<option value='$katahh1[$i]' selected>$katahh1[$i]</option>";
				}
				else
				{
					echo "<option value='$katahh1[$i]'>$katahh1[$i]</option>";
				}
			}
			?> 
      </select><br>
      <textarea name="notes_ac" cols="35" id="notes_ac"><? echo "$notes_ac"; ?></textarea></td>
    </tr>
    <tr>
      <td colspan="2">Handling Process</td>
      <td><textarea name="handling_process" cols="35" id="handling_process"><? echo "$handling_process"; ?></textarea></td>
    </tr>
    <tr>
      <td colspan="2">FCR</td>
      <td><select name="fcr" id="select" class="uniformselect">
        <option value="0">Select</option>
          <?php
			$katahh4=array('Yes','No');
		$counthh4 = count($katahh4);
							  
			for($i=0;$i<$counthh4;$i++)
			{
				if($katahh4[$i] == $fcr)
				{
					echo "<option value='$katahh4[$i]' selected>$katahh4[$i]</option>";
				}
				else
				{
					echo "<option value='$katahh4[$i]'>$katahh4[$i]</option>";
				}
			}
			?> 
      </select><br>
	  <textarea name="notes_fcr" cols="35" id="notes_fcr"><? echo "$notes_fcr"; ?></textarea></td>
    </tr>

    <tr>
      <td colspan="2">Repetitive Call</td>
      <td><select name="repetitive_call" id="select9" class="uniformselect">
        <option value="0">Select</option>
        <?php
			$katahh4=array('Yes','No');
		$counthh4 = count($katahh4);
							  
			for($i=0;$i<$counthh4;$i++)
			{
				if($katahh4[$i] == $repetitive_call)
				{
					echo "<option value='$katahh4[$i]' selected>$katahh4[$i]</option>";
				}
				else
				{
					echo "<option value='$katahh4[$i]'>$katahh4[$i]</option>";
				}
			}
			?> 
      </select><br>
	  <textarea name="notes_repeat" cols="35" id="notes_repeat"><? echo "$notes_repeat"; ?></textarea></td>
    </tr>
    <tr>
	  <td></td>
	  <td>Anthusiasm</td>
      <td><select name="anthusiasm" id="select9" class="uniformselect">
        <option value="0">Select</option>
        <?php
			$katahh4=array('Yes','No');
		$counthh4 = count($katahh4);
							  
			for($i=0;$i<$counthh4;$i++)
			{
				if($katahh4[$i] == $anthusiasm)
				{
					echo "<option value='$katahh4[$i]' selected>$katahh4[$i]</option>";
				}
				else
				{
					echo "<option value='$katahh4[$i]'>$katahh4[$i]</option>";
				}
			}
			?> 
      </select><br>
	  <textarea name="notes_anthusiasm" cols="35" id="notes_anthusiasm"><? echo "$notes_anthusiasm"; ?></textarea></td>
      </tr>
	  
	  <tr>
      <td rowspan="3" bgcolor="#cccccc">Personalize Communication<br> after Reborn</td>	  
	  <td >Manner</td>
      <td><select name="manner" id="select9" class="uniformselect">
        <option value="0">Select</option>
        <?php
			$katahh4=array('Yes','No');
		$counthh4 = count($katahh4);
							  
			for($i=0;$i<$counthh4;$i++)
			{
				if($katahh4[$i] == $manner)
				{
					echo "<option value='$katahh4[$i]' selected>$katahh4[$i]</option>";
				}
				else
				{
					echo "<option value='$katahh4[$i]'>$katahh4[$i]</option>";
				}
			}
			?> 
      </select><br>
	  <textarea name="notes_manner" cols="35" id="notes_manner"><? echo "$notes_manner"; ?></textarea></td>
      </tr>
	  <tr>
	  <td>Effective Handling</td>
      <td><select name="effective_handling" id="select9" class="uniformselect">
        <option value="0">Select</option>
        <?php
			$katahh4=array('Yes','No');
		$counthh4 = count($katahh4);
							  
			for($i=0;$i<$counthh4;$i++)
			{
				if($katahh4[$i] == $effective_handling)
				{
					echo "<option value='$katahh4[$i]' selected>$katahh4[$i]</option>";
				}
				else
				{
					echo "<option value='$katahh4[$i]'>$katahh4[$i]</option>";
				}
			}
			?> 
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
    <input type="submit" name="Submit" value="<?=$submittext;?>" onclick="return confirmDelete();" class="btn btn-primary">
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
				
				if($msisdn=="" or $customer_name=="" or $interaction_date=="" or $hh_it=="" or $mm_it=="" or $observation_date=="0" or $hh_2=="" or $mm_2=="0" or $ss_2=="" or $week_=="" or $interaction_type=="" or $product_knowledge=="" or $activity_code=="" or $handling_process=="" or $fcr=="" or $repetitive_call=="" or $anthusiasm=="" or $manner=="" or $effective_handling=="")
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
				interaction_time='$hh_it:$mm_it',
				--observation_date='$observation_date',
				hh_duration='$hh_2',
				mm_duration='$mm_2',
				ss_duration='$ss_2',
				week_='$week_',
				interaction_type='$interaction_type',
				product_knowledge='$product_knowledge',
				notes_pk='$notes_pk',
				activity_code='$activity_code',
				notes_ac='$notes_ac',
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
				notes_eh='$notes_eh' WHERE id_qm=$eid_qm";
				  $simpan_data=mssql_query($q_addTemp);
				  echo"$q_addTemp";
			  
					  echo"<script type='text/javascript'>alert('Data Berhasil Di Update');
				window.location='page.php?index=add_process_level&div=cco'
				</script> ";		
					}
				
			}else{
				
			/*if($idpTL==0){
				?>
				<script type="text/javascript">
				window.alert("This agent does not have a Team Leader, Please Contact HRMS Administrator to add data TL on this agent.")
				</script>
			<?
			}else*/ if($userTextBox=="" or $namaTextBoxTL="" or $namaTextBox=="" or $kd_division=="0" or $kd_departemen=="0" or $kd_unit=="0" or $msisdn=="" or $customer_name=="" or $interaction_date=="" or $observation_date=="0" or $hh_2=="" or $mm_2=="0" or $ss_2=="" or $week_=="" or $interaction_type=="" or $product_knowledge=="" or $activity_code=="" or $handling_process=="" or $fcr=="" or $repetitive_call=="" or $anthusiasm=="" or $manner=="" or $effective_handling=="")
			{
			?>
            <script type="text/javascript">
			window.alert("Value not completeed")
			</script>
            <?
			}
			else 
			{	
			$date_saved=date("m/d/Y H:i:s");
			$slas=":";	
			$ss2=00;	
			$interaction_date_save="$interaction_date $hh$slas$mm$slas$ss2";
			$interaction_time="$hh_it$slas$mm_it";
		
		/*
		
		/*/
			$q_addTemp="insert into table_qm_pl(customer_name,msisdn,interaction_date,interaction_time,observation_date,hh_duration,mm_duration,ss_duration,week_,interaction_type,product_knowledge,notes_pk,activity_code,notes_ac,handling_process,fcr,notes_fcr,repeat,notes_repeat,antusiasm,notes_antusiasm,manner,notes_manner,effective_handling,notes_eh,region,id_pribadi_user,id_unit,id_pribadi_observer,tl_name,date_saved)
			values('$customer_name','$msisdn','$interaction_date','$interaction_time','$observation_date','$hh_2','$mm_2','$ss_2','$week_','$interaction_type','$product_knowledge','$notes_pk','$activity_code','$notes_ac','$handling_process','$fcr','$notes_fcr','$repetitive_call','$notes_repeat','$anthusiasm','$notes_anthusiasm','$manner','$notes_manner','$effective_handling','$notes_eh','$kd_region','$pribadi','$kd_unit','$SES_hendi','$nama_tl','$date_saved')";
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
		window.location="page.php?index=add_process_level"
		</script> 
          <?php
		}
	 
	  ?>

</table>



  <table width="146%" border="1" align="center" cellspacing="1" class="table table-bordered table-infinite">
  <thead>
    <tr bgcolor="#CCCCCC">
    <th width="1%" rowspan="2" class="head0"><div align="center">No</div></th>
    <th width="4%" rowspan="2"class="head0">Delete</th>
	<th width="4%" rowspan="2"class="head0">Edit</th>
    <th width="4%" rowspan="2" class="head0"><div align="center">NIK</div></th>
    <th width="2%" rowspan="2" class="head0"><div align="center">Name</div></th>
    <th width="2%"rowspan="2"  class="head0"><div align="center">TL Name</div></th>
	  
	<th width="2%" rowspan="2" class="head0"><div align="center">Customer Name</div></th>
	<th width="2%" rowspan="2" class="head0"><div align="center">MSISDN</div></th>
	<th width="2%" rowspan="2" class="head0"><div align="center">Interaction Date</div></th>
	<th width="2%" rowspan="2" class="head0"><div align="center">Interaction Time</div></th>
	<th width="2%" rowspan="2" class="head0"><div align="center">Observation Date </div></th>
	<th width="2%" rowspan="2" class="head0"><div align="center">Duration</div></th>
    <th width="2%" rowspan="2" class="head0"><div align="center">Week</div></th>
    <th width="2%" rowspan="2" class="head0"><div align="center">Interaction Type</div></th>
	<th width="2%" rowspan="2" class="head0"><div align="center">Product Knowledge</div></th>
	<th width="2%" rowspan="2"class="head0"><div align="center">Note Product Knowledge</div></th>
	<th width="2%" rowspan="2" class="head0"><div align="center">Activity Code</div></th>
	<th width="2%" rowspan="2" class="head0"><div align="center">Note Activity Code</div></th>
	<th width="2%" rowspan="2" class="head0"><div align="center">Handling Process</div></th>
	<th width="2%" rowspan="2" class="head0"><div align="center">FCR</div></th>			
	<th width="2%" rowspan="2" class="head0"><div align="center">Note FCR</div></th>
	<th width="2%" rowspan="2" class="head0"><div align="center">Repetitive Call</div></th>
	<th width="2%" rowspan="2" class="head0"><div align="center">Note Repetitive Call</div></th>
	<th width="2%"colspan="6 class="head0"><div align="center">Personalize Communication After Reborn</div></th>
	<th class="head0" rowspan="2"><div align="center">Observer</div></th>
    </tr>
	<tr>
	<th width="2%" class="head0"><div align="center">Anthusiasm</div></th>
	<th width="2%" class="head0"><div align="center">Note Anthusiasm</div></th>
	<th width="2%" class="head0"><div align="center">Manner</div></th>
			   <th width="2%" class="head0"><div align="center">Note Manner</div></th>
			    <th width="2%" class="head0"><div align="center">Effective Handling</div></th>
				 <th width="2%" class="head0"><div align="center">Note Effective Handling</div></th>
	
	</tr>
</thead>
    <?
					$q_user="[sp_tampil_pl]'$SES_hendi'";
					//echo "$q_user";
					$r_user=mssql_query($q_user);
					$no2=1;
					while($d_user=mssql_fetch_array($r_user))
						{
						$did_qm=$d_user["id_qm"];
						$dnama=$d_user["nama"];
						$dcustomer_name=$d_user["customer_name"];
						$dmsisdn=$d_user["msisdn"];
						$dinteraction_date=$d_user["interaction_date"];
						$dinteraction_time=$d_user["interaction_time"];
						$int_time=explode(":",$dinteraction_time);
						$hh_time="$int_time[0]";
						$mm_time="$int_time[1]";
						$dobservation_date=$d_user["observation_date"];
						$dhh_duration=$d_user["hh_duration"];
						$dmm_duration=$d_user["mm_duration"];
						$dss_duration=$d_user["ss_duration"];
						$dweek_=$d_user["week_"];
						$ddinteraction_type=$d_user["interaction_type"];
						$dproduct_knowledge=$d_user["product_knowledge"];
						$dnotes_pk=$d_user["notes_pk"];
						$dactivity_code=$d_user["activity_code"];
						$dnotes_ac=$d_user["notes_ac"];
						$dhandling_process=$d_user["handling_process"];
						$dfcr=$d_user["fcr"];
						$dnotefcr=$d_user["notes_fcr"];
						$drepeat=$d_user["repeat"];
						$dnotes_repeat=$d_user["notes_repeat"];
						$dantusiasm=$d_user["antusiasm"];
						$dnotes_anthusiasm=$d_user["notes_antusiasm"];
						$dmanner=$d_user["manner"];						
						$dnotes_manner=$d_user["notes_manner"];
						$deffective_handling=$d_user["effective_handling"];
						$dnotes_eh=$d_user["notes_eh"];
						$dregion=$d_user["region"];
						$did_pribadi_user=$d_user["id_pribadi_user"];
						$did_unit=$d_user["id_unit"];
						$did_pribadi_observer=$d_user["id_pribadi_observer"];
						$namauser=$d_user["nama"];
						$nikuser=$d_user["nik_karyawan"];						
						$dtl_name=$d_user["tl_name"];
						$date_saved=$d_user["date_saved"];
						//echo"daniel $date_saved <br>";
						$dc=explode("/",$date_saved);
						$da=$dc[2]+1;
						$t="$da$dc[1]$dc[0]";
						//echo"daniel : $t<br>";
						//$today=date('dmY');
						$today=date("M d Y g:i A");
						//echo"$date_saved>=($t==$today)<br>";
						$q_user1="select nama as observer_name 
							from cco.hrms.dbo.tb_data_pribadi 
							where cast(id_data_pribadi as varchar)='$did_pribadi_observer' ";
							//echo "$q_user";
							$r_user1=mssql_query($q_user1);
							while($d_user1=mssql_fetch_array($r_user1))
								{
								$observer_name=$d_user1["observer_name"];
								}
						echo "<tr class='content'>
                      <td>$no2</td>";
						?>	
					  <td>						
					  <a href="<? echo "del_group.php?kode_del=add_pl_qm&id_qm=$did_qm"; ?>" onclick="return confirmDelete2();">
					  <?
					  echo "delete</a></td><td>";
					  ?>
					  <a href="<? echo "page.php?index=add_process_level&div=cco&eid_qm=$did_qm&msisdn=$dmsisdn&customer_name=$dcustomer_name&interaction_date=$dinteraction_date&hh_it=$hh_time&mm_it=$mm_time&hh_2=$dhh_duration&mm_2=$dmm_duration&ss_2=$dss_duration&week_=$dweek_&interaction_type=$ddinteraction_type&product_knowledge=$dproduct_knowledge&notes_pk=$dnotes_pk&activity_code=$dactivity_code&notes_ac=$dnotes_ac&handling_process=$dhandling_process&fcr=$dfcr&notes_fcr=$dnotefcr&repetitive_call=$drepeat&notes_repeat=$dnotes_repeat&anthusiasm=$dantusiasm&notes_anthusiasm=$dnotes_anthusiasm&manner=$dmanner&notes_manner=$dnotes_manner&effective_handling=$deffective_handling&notes_eh=$dnotes_eh"; ?>">
					  <?
						echo "Edit</a></td>";
                      echo"<td>$nikuser</td>
             		  <td>$namauser</td>			  
       				  	
						<td>$dtl_name</td>		
						<td>$dcustomer_name</td>
						<td>$dmsisdn</td>
						<td>$dinteraction_date</td>
						<td>$dinteraction_time</td>
						<td>$dobservation_date</td>
						<td>$dhh_duration : $dmm_duration : $dss_duration</td>
						<td>$dweek_</td>
						<td>$ddinteraction_type</td>
						<td>$dproduct_knowledge</td>
						<td>$dnotes_pk</td>
						<td>$dactivity_code</td>
						<td>$dnotes_ac</td>
						<td>$dhandling_process</td>
						<td>$dfcr</td>
						<td>$dnotefcr</td>
						<td>$drepeat</td>	  
						<td>$dnotes_repeat</td>
						<td>$dantusiasm</td>
						<td>$dnotes_anthusiasm</td>
						<td>$dmanner			</td>
						<td>$dnotes_manner</td>
						<td>$deffective_handling</td>
						<td>$dnotes_eh</td>
						<td>$observer_name</td>								  
                      </tr>";
					  $no2++;
						}
					
					?>
  </table>
  
</form>
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