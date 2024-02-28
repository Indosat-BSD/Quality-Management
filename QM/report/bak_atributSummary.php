<table width="568" border="1">
    <tr bgcolor="#CCCCCC">
      <td width="17"><div align="center">No</div></td>
      <td width="36"><div align="center">Value</div></td>
      <td width="205"><div align="center">Attributes</div></td>
      <td width="33"><div align="center">Yes</div></td>
      <td width="28"><div align="center">%</div></td>
      <td width="27"><div align="center">No</div></td>
      <td width="26"><div align="center">%</div></td>
      <td width="44"><div align="center">NA</div></td>
      <td width="44"><div align="center">%</div></td>
      <td width="44"><div align="center">AVG Score </div></td>
    </tr>
    <tr>
      <td>1</td>
      <td>NFE</td>
      <td>Opening Greeting</td>
      <td><?  
	  //edit hendi
      $queryhendi="[sp_reportqm]'table_qm','$date_eva1','$date_eva2','$report_by','$c_observer','%$nik_agent%','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%%','%$kd_unit%','%%'";
	  $proses=mssql_query($queryhendi);
	  $result=mssql_fetch_array($proses);
	  //echo $queryhendi;
      //end edit
      
			$q1_tot_y=$result["q1_yes"];
			echo"$q1_tot_y";
			
		?></td>
      <td><?
$prosen_q1_y =($q1_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q1_y);
			?></td>
      <td><?  
		  	$q1_tot_n=$result["q1_no"];
			echo"$q1_tot_n";
			
		?></td>
      <td><?
$prosen_q1_y =($q1_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q1_y);
			?></td>
      <td><?  
			$q1_tot_na=$result["q1_na"];  
			echo"$q1_tot_na";
			
		?></td>
      <td><?
$prosen_q1_na =($q1_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q1_na);
			?></td>
      <td><?  
	  			
					
	   
	     	$q1_avg=$result["avg1"];
			 		
			
			printf("%1.2f ", $q1_avg);
			
		?></td>
    </tr>
    <tr>
      <td>2</td>
      <td>NFE</td>
      <td>Verify or Confirmation</td>
      <td><?  
	  			
		     	$q2_tot_y=$result["q2_yes"];
			 		
			echo "$q2_tot_y";
			
		?></td>
      <td><?
$prosen_q2_y =($q2_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q2_y);
			?></td>
      <td><?  
	  			
		     	$q2_tot_n=$result["q2_no"];
			 		
			echo"$q2_tot_n";
			
		?></td>
      <td><?
$prosen_q2_y =($q2_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q2_y);
			?></td>
      <td><?  
	  			
		     	$q2_tot_na=$result["q1_na"];
			 		
			echo"$q2_tot_na";
			
		?></td>
      <td><?
$prosen_q2_na =($q2_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q2_na);
			?></td>
      <td><?  
	  			
		     	$q2_avg=$result["avg2"];
			 		
			printf("%1.2f ", $q2_avg);
		?></td>
    </tr>
    <tr>
      <td>3</td>
      <td>NFE</td>
      <td>Probing</td>
      <td><?  
	  			
		     	$q3_tot_y=$result["q3_yes"];
			 		
			echo"$q3_tot_y";
			
		?></td>
      <td><?
$prosen_q3_y =($q3_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q3_y);
			?></td>
      <td><?  
	  			
		     	$q3_tot_n=$result["q3_no"];
			 		
			echo"$q3_tot_n";
			
		?></td>
      <td><?
$prosen_q3_y =($q3_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q3_y);
			?></td>
      <td><?  
	  			
		     	$q3_tot_na=$result["q3_na"];
					
			echo"$q3_tot_na";
			
		?></td>
      <td><?
$prosen_q3_na =($q3_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q3_na);
			?></td>
      <td><?  
	  			
		     	$q3_avg=$result["avg3"];
			 		
			printf("%1.2f ", $q3_avg);
			
		?></td>
    </tr>
    <tr>
      <td>4</td>
      <td>FE</td>
      <td>Correct Answer </td>
      <td><?  
	  			
		     	$q4_tot_y=$result["q4_yes"];
			 		
			echo"$q4_tot_y";
			
		?></td>
      <td><?
$prosen_q4_y =($q4_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q4_y);
			?></td>
      <td><?  
	  			
		     	$q4_tot_n=$result["q4_no"];
			 		
			echo"$q4_tot_n";
			
		?></td>
      <td><?
$prosen_q4_y =($q4_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q4_y);
			?></td>
      <td><?  
	  			
		     	$q4_tot_na=$result["q4_na"];
			 		
			echo"$q4_tot_na";
			
		?></td>
      <td><?
$prosen_q4_na =($q4_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q4_na);
			?></td>
      <td><?  
	  			
		     	$q4_avg=$result["avg4"];
					
		printf("%1.2f ", $q4_avg);
		?></td>
    </tr>
    <tr>
      <td>5</td>
      <td>FE</td>
      <td>Provide Solution</td>
      <td><?  
	  			
		     	$q5_tot_y=$result["q5_yes"];
			 		
			echo"$q5_tot_y";
			
		?></td>
      <td><?
$prosen_q5_y =($q5_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q5_y);
			?></td>
      <td><?  
	  			
		     	$q5_tot_n=$result["q5_no"];
			 		
			echo"$q5_tot_n";
			
		?></td>
      <td><?
$prosen_q5_y =($q5_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q5_y);
			?></td>
      <td><?  
	  			
		     	$q5_tot_na=$result["q5_na"];
			 		
			echo"$q5_tot_na";
			
		?></td>
      <td><?
$prosen_q5_na =($q5_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q5_na);
			?></td>
      <td><?  
	  			
		     	$q5_avg=$result["avg5"];
			 		
		printf("%1.2f ", $q5_avg);
			
		?></td>
    </tr>
    <tr>
      <td>6</td>
      <td>FE</td>
      <td>Proses Compliance </td>
      <td><?  
	  			
		     	$q6_tot_y=$result["q6_yes"];
			 		
			echo"$q6_tot_y";
			
		?></td>
      <td><?
$prosen_q6_y =($q6_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q6_y);
			?></td>
      <td><?  
	  			
		     	$q6_tot_n=$result["q6_no"];
			 		
			echo"$q6_tot_n";
			
		?></td>
      <td><?
$prosen_q6_y =($q6_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q6_y);
			?></td>
      <td><?  
	  			
		     	$q6_tot_na=$result["q6_na"];
			 		
			echo"$q6_tot_na";
			
		?></td>
      <td><?
$prosen_q6_na =($q6_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q6_na);
			?></td>
      <td><?  
	  			
		     	$q6_avg=$result["avg6"];
			 		
		printf("%1.2f ", $q6_avg);
			
		?></td>
    </tr>
    <tr>
      <td>7</td>
      <td>FE</td>
      <td>Input Accuracy Data / Information </td>
      <td><?  
	  			
		     	$q20_tot_y=$result["q20_yes"];
			 		
			echo"$q20_tot_y";
			
		?></td>
      <td><?
$prosen_q20_y =($q20_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q20_y);
			?></td>
      <td><?  
	  			
		     	$q20_tot_n=$result["q20_no"];
			 		
			echo"$q20_tot_n";
			
		?></td>
      <td><?
$prosen_q20_y =($q20_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q20_y);
			?></td>
      <td><?  
	  			
		     	$q20_tot_na=$result["q20_na"];
			 		
			echo"$q20_tot_na";
			
		?></td>
      <td><?
$prosen_q20_na =($q20_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q20_na);
			?></td>
      <td><?  
	  			
		     	$q20_avg=$result["avg20"];
			 		
		printf("%1.2f ", $q20_avg);
			
		?></td>
    </tr>
    <tr>
      <td>8</td>
      <td>NFE</td>
      <td>Responsiveness </td>
      <td><?  
	  			
		     	$q7_tot_y=$result["q7_yes"];
			 		
			echo"$q7_tot_y";
			
		?></td>
      <td><?
$prosen_q7_y =($q7_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q7_y);
			?></td>
      <td><?  
	  			
		     	$q7_tot_n=$result["q7_no"];
			 		
			echo"$q7_tot_n";
			
		?></td>
      <td><?
$prosen_q7_y =($q7_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q7_y);
			?></td>
      <td><?  
	  			
		     	$q7_tot_na=$result["q7_na"];
			
			echo"$q7_tot_na";
			
		?></td>
      <td><?
$prosen_q7_na =($q7_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q7_na);
			?></td>
      <td><?  
	  			
		     	$q7_avg=$result["avg7"];
			 		
		printf("%1.2f ", $q7_avg);
			
		?></td>
    </tr>
    <tr>
      <td>9</td>
      <td>NFE</td>
      <td>Greet Customer Name</td>
      <td><?  
	  			
		     	$q8_tot_y=$result["q8_yes"];
			 		
			echo"$q8_tot_y";
			
		?></td>
      <td><?
$prosen_q8_y =($q8_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q8_y);
			?></td>
      <td><?  
	  			
		     	$q8_tot_n=$result["q8_no"];
			 		
			echo"$q8_tot_n";
			
		?></td>
      <td><?
$prosen_q8_y =($q8_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q8_y);
			?></td>
      <td><?  
	  			
		     	$q8_tot_na=$result["q8_na"];
			 		
			echo"$q8_tot_na";
			

		?></td>
      <td><?
$prosen_q8_na =($q8_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q8_na);
			?></td>
      <td><?  
	  			
		     	$q8_avg=$result["avg8"];
			 		
		printf("%1.2f ", $q8_avg);
			
		?></td>
    </tr>
    <tr>
      <td>10</td>
      <td>NFE</td>
      <td>Do Not Interrupt</td>
      <td><?  
	  			
		     	$q9_tot_y=$result["q9_yes"];
			 		
			echo"$q9_tot_y";
			
		?></td>
      <td><?
$prosen_q9_y =($q9_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q9_y);
			?></td>
      <td><?  
	  			
		     	$q9_tot_n=$result["q9_no"];
			 		
			echo"$q9_tot_n";
			
		?></td>
      <td><?
$prosen_q9_y =($q9_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q9_y);
			?></td>
      <td><?  
	  			
		     	$q9_tot_na=$result["q9_na"];
			 		
			echo"$q9_tot_na";
			
		?></td>
      <td><?
$prosen_q9_na =($q9_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q9_na);
			?></td>
      <td><?  
	  			
		     	$q9_avg=$result["avg9"];
			 		
		printf("%1.2f ", $q9_avg);
			
		?></td>
    </tr>
    <tr>
      <td>11</td>
      <td>NFE</td>
      <td>Listening</td>
      <td><?  
	  			
		     	$q10_tot_y=$result["q10_yes"];
			 		
			echo"$q10_tot_y";
			
		?></td>
      <td><?
$prosen_q10_y =($q10_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q10_y);
			?></td>
      <td><?  
	  			
		     	$q10_tot_n=$result["q10_no"];
			 		
			echo"$q10_tot_n";
			
		?></td>
      <td><?
$prosen_q10_y =($q10_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q10_y);
			?></td>
      <td><?  
	  			
		     	$q10_tot_na=$result["q10_na"];
			 		
			echo"$q10_tot_na";
			
		?></td>
      <td><?
$prosen_q10_na =($q10_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q10_na);
			?></td>
      <td><?  
	  			
		     	$q10_avg=$result["avg10"];
			 		
		printf("%1.2f ", $q10_avg);
			
		?></td>
    </tr>
    <tr>
      <td>12</td>
      <td>NFE</td>
      <td>Attentive and Human Touch</td>
      <td><?  
	  			
		     	$q11_tot_y=$result["q11_yes"];
			 		
			echo"$q11_tot_y";
			
		?></td>
      <td><?
$prosen_q11_y =($q11_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q11_y);
			?></td>
      <td><?  
	  			
		     	$q11_tot_n=$result["q11_no"];
			 		
			echo"$q11_tot_n";
			
		?></td>
      <td><?
$prosen_q11_y =($q11_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q11_y);
			?></td>
      <td><?  
	  			
		     	$q11_tot_na=$result["q11_na"];
			 		
			echo"$q11_tot_na";
			
		?></td>
      <td><?
$prosen_q11_na =($q11_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q11_na);
			?></td>
      <td><?  
	  			
		     	$q11_avg=$result["avg11"];
			 		
		printf("%1.2f ", $q11_avg);
			
		?></td>
    </tr>
    <tr>
      <td>13</td>
      <td>NFE</td>
      <td>Alive and Breathing</td>
      <td><?  
	  			
		     	$q12_tot_y=$result["q12_yes"];
			 		
			echo"$q12_tot_y";
			
		?></td>
      <td><?
$prosen_q12_y =($q12_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q12_y);
			?></td>
      <td><?  
	  			
		     	$q12_tot_n=$result["q12_no"];
			 		
			echo"$q12_tot_n";
			
		?></td>
      <td><?
$prosen_q12_y =($q12_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q12_y);
			?></td>
      <td><?  
	  			
		     	$q12_tot_na=$result["q12_na"];
			 		
			echo"$q12_tot_na";
			
		?></td>
      <td><?
$prosen_q12_na =($q12_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q12_na);
			?></td>
      <td><?  
	  			
		     	$q12_avg=$result["avg12"];
			 		
		printf("%1.2f ", $q12_avg);
			
		?></td>
    </tr>
    <tr>
      <td>14</td>
      <td>NFE</td>
      <td>Control conversations</td>
      <td><?  
	  			
		     	$q13_tot_y=$result["q13_yes"];
			 		
			echo"$q13_tot_y";
			
		?></td>
      <td><?
$prosen_q13_y =($q13_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q13_y);
			?></td>
      <td><?  
	  			
		     	$q13_tot_n=$result["q13_no"];
			 		
			echo"$q13_tot_n";
			
		?></td>
      <td><?
$prosen_q13_y =($q13_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q13_y);
			?></td>
      <td><?  
	  			
		     	$q13_tot_na=$result["q13_na"];
			 		
			echo"$q13_tot_na";
			
		?></td>
      <td><?
$prosen_q13_na =($q13_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q13_na);
			?></td>
      <td><?  
	  			
		     	$q13_avg=$result["avg13"];
			 		
		printf("%1.2f ", $q13_avg);
			
		?></td>
    </tr>
    <tr>
      <td>15</td>
      <td>NFE</td>
      <td>Communicating the Information</td>
      <td><?  
	  			
		     	$q14_tot_y=$result["q14_yes"];
			 		
			echo"$q14_tot_y";
			
		?></td>
      <td><?
$prosen_q14_y =($q14_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q14_y);
			?></td>
      <td><?  
	  			
		     	$q14_tot_n=$result["q14_no"];
			 		
			echo"$q14_tot_n";
			
		?></td>
      <td><?
$prosen_q14_y =($q14_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q14_y);
			?></td>
      <td><?  
	  			
		     	$q14_tot_na=$result["q14_na"];
			 		
			echo"$q14_tot_na";
			
		?></td>
      <td><?
$prosen_q14_na =($q14_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q14_na);
			?></td>
      <td><?  
	  			
		     	$q14_avg=$result["avg14"];
			 		
		printf("%1.2f ", $q14_avg);
			
		?></td>
    </tr>
    <tr>
      <td>16</td>
      <td>NFE</td>
      <td>Not use of Jargon/Informal Style</td>
      <td><?  
	  			
		     	$q15_tot_y=$result["q15_yes"];
			 		
			echo"$q15_tot_y";
			
		?></td>
      <td><?
$prosen_q15_y =($q15_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q15_y);
			?></td>
      <td><?  
	  			
		     	$q15_tot_n=$result["q15_no"];
			 		
			echo"$q15_tot_n";
			
		?></td>
      <td><?
$prosen_q15_y =($q15_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q15_y);
			?></td>
      <td><?  
	  			
		     	$q15_tot_na=$result["q15_na"];
			 		
			echo"$q15_tot_na";
			
		?></td>
      <td><?
$prosen_q15_na =($q15_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q15_na);
			?></td>
      <td><?  
	  			
		     	$q15_avg=$result["avg15"];
			 		
		printf("%1.2f ", $q15_avg);
			
		?></td>
    </tr>
    <tr>
      <td>17</td>
      <td>NFE</td>
      <td>Hold/Transfer/Routing/Callback Technique</td>
      <td>
	  <?
		     	$q16_tot_y=$result["q16_yes"];
			 		
			
			echo"$q16_tot_y";
			
	  ?></td>
      <td><?
$prosen_q16_y =($q16_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q16_y);
			?></td>
      <td>
			<?
				  
		     	$q16_tot_n=$result["q16_no"];
			 		
			echo"$q16_tot_n";
			
		?></td>
      <td><?
$prosen_q16_y =($q16_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q16_y);
			?></td>
      <td><?  
	  			
		     	$q16_tot_na=$result["q16_na"];
			 		
			echo"$q16_tot_na";
			
		?></td>
      <td><?
$prosen_q16_na =($q16_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q16_na);
			?></td>
      <td><?  
	  			
		     	$q16_avg=$result["avg16"];
			 		
		printf("%1.2f ", $q16_avg);
			
		?></td>
    </tr>
    <tr>
      <td>18</td>
      <td>NFE</td>
      <td>Reconfirm the Agreement</td>
      <td><?  
	  			
		     	$q17_tot_y=$result["q17_yes"];
			 		
			echo"$q17_tot_y";
			
		?></td>
      <td><?
$prosen_q17_y =($q17_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q17_y);
			?></td>
      <td><?  
	  			
		     	$q17_tot_n=$result["q17_no"];
			 		
			echo"$q17_tot_n";
			
		?></td>
      <td><?
$prosen_q17_y =($q17_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q17_y);
			?></td>
      <td><?  
	  			
		     	$q17_tot_na=$result["q17_na"];
			 		
			echo"$q17_tot_na";
			
		?></td>
      <td><?
$prosen_q17_na =($q17_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q17_na);
			?></td>
      <td><?  
	  			
		     	$q17_avg=$result["avg17"];
			 		
		printf("%1.2f ", $q17_avg);
			
		?></td>
    </tr>
    <tr>
      <td>19</td>
      <td>NFE</td>
      <td>Closing Greeting</td>
      <td><?  
	  			
		     	$q18_tot_y=$result["q18_yes"];
			 		
			echo"$q18_tot_y";
			
		?></td>
      <td><?
$prosen_q18_y =($q18_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q18_y);
			?></td>
      <td><?  
	  			
		     	$q18_tot_n=$result["q18_no"];
			 		
			echo"$q18_tot_n";
			
		?></td>
      <td><?
$prosen_q18_y =($q18_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q18_y);
			?></td>
      <td><?  
	  			
		     	$q18_tot_na=$result["q18_na"];
			 		
			echo"$q18_tot_na";
			
		?></td>
      <td><?
$prosen_q18_na =($q18_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q18_na);
			?></td>
      <td><?  
	  			
		     	$q18_avg=$result["avg18"];
			 		
		printf("%1.2f ", $q18_avg);
			
		?></td>
    </tr>
    <tr>
      <td>20</td>
      <td>NFE</td>
      <td>Campaign / Cross selling/ upselling / survey</td>
      <td><?  
	  			
		     	$q19_tot_y=$result["q19_yes"];
			 		
			echo"$q19_tot_y";
			
		?></td>
      <td><?
$prosen_q19_y =($q19_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q19_y);
			?></td>
      <td><?  
	  			
		     	$q19_tot_n=$result["q19_no"];
			 		
			echo"$q19_tot_n";
			
		?></td>
      <td><?
$prosen_q19_y =($q19_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q19_y);
			?></td>
      <td><?  
	  			
		     	$q19_tot_na=$result["q19_na"];
			 		
			echo"$q19_tot_na";
			
		?></td>
      <td><?
$prosen_q19_na =($q19_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q19_na);
			?></td>
      <td><?  
	  			
		     	$q19_avg=$result["avg19"];
			 		
		printf("%1.2f ", $q19_avg);
			
		?></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="264" border="1">
    <tr>
      <td width="180">NFE Total </td>
      <td width="68"><? $nfe_total=$q1_tot_y+$q2_tot_y+$q3_tot_y+$q7_tot_y+$q8_tot_y+$q9_tot_y+$q10_tot_y+$q11_tot_y+$q12_tot_y+$q13_tot_y+$q14_tot_y+$q15_tot_y+$q16_tot_y+$q17_tot_y+$q18_tot_y+$q19_tot_y+$q1_tot_na+$q2_tot_na+$q3_tot_na+$q7_tot_na+$q8_tot_na+$q9_tot_na+$q10_tot_na+$q11_tot_na+$q12_tot_na+$q13_tot_na+$q14_tot_na+$q15_tot_na+$q16_tot_na+$q17_tot_na+$q18_tot_na+$q19_tot_na; echo"$nfe_total";?></td>
    </tr>
    <tr>
      <td>NFE Accuracy</td>
      <td><?
	  $nfe_acc=($nfe_total/(16*$jum_tot)*100);
		printf("%1.2f ", $nfe_acc);
		
	  ?>%</td>
    </tr>
    <tr>
      <td>FE Total </td>
      <td><?  
		$stot_fe="[sp_fetotal]'table_qm','$report_by','$date_eva1','$date_eva2','$kd_unit','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%%','%%','%%','$c_observer','%$nik_agent%'";
	   $r_stot_fe=mssql_query($stot_fe);
	   $d_stot_fe=mssql_fetch_array($r_stot_fe);
	   $fe_tot=$d_stot_fe["jum_fe_tot"];
	   $fe_total=$fe_tot*4;
		//echo "$stot_fe";	
		$stot_fe2="[sp_fetotaliic]'table_qm_iic','$report_by','$date_eva1','$date_eva2','$kd_unit','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%%','%%','%%','$c_observer','%$nik_agent%'";
	   $r_stot_fe2=mssql_query($stot_fe2);
	   $d_stot_fe2=mssql_fetch_array($r_stot_fe2);
	   $fe_tot2=$d_stot_fe2["jum_fe_tot"];
	   $fe_total2=$fe_tot2*2;
	   	//echo "$stot_fe2";
		$stot_fe3="[sp_fetotal]'table_qm_sli','$report_by','$date_eva1','$date_eva2','$kd_unit','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%%','%%','%%','$c_observer','%$nik_agent%'";
		$r_stot_fe3=mssql_query($stot_fe3);
	    $d_stot_fe3=mssql_fetch_array($r_stot_fe3);
	    $fe_tot3=$d_stot_fe3["jum_fe_tot"];
		$fe_total3=$fe_tot3*4;	
		//echo "$stot_fe3";
			$fe_total_acc = $fe_tot+$fe_tot2+$fe_tot3;
			$fe_total_all=$fe_total+$fe_total2+fe_total3;
			echo"$fe_total_all";
			
		?></td>
    </tr>
    <tr>
      <td>FE Accuracy </td>
      <td>
	  <?
	  
	 $fe_acc=($fe_total_acc/$jum_tot)*100;
		printf("%1.2f ", $fe_acc);
		
	  ?>%</td>
    </tr>
    <tr>
      <td>FCR</td>
      <td><?  
	  		$stot_fcr1="select count(*) as jum_s_fcr from db_qm.dbo.table_qm_detail c inner join db_qm.dbo.table_qm a on a.id_qm=c.id_qm where fcr='fcr' and a.status_save='complete' and  convert(varchar,a.date_saved,101) between convert(varchar,'$date_eva1',101) and convert(varchar,'$date_eva2',101)";
			$stot_rep1="select count(*) as jum_s_rep from db_qm.dbo.table_qm_detail c inner join db_qm.dbo.table_qm a on a.id_qm=c.id_qm where a.status_save='complete' and repeat='yes' and  convert(varchar,a.date_saved,101) between convert(varchar,'$date_eva1',101) and convert(varchar,'$date_eva2',101)";
	   		
			$stot_fcr2="select count(*) as jum_s_fcr from db_qm.dbo.table_qm_iic_detail c inner join db_qm.dbo.table_qm_iic a on a.id_qm=c.id_qm where fcr='fcr' and a.status_save='complete' and  convert(varchar,a.date_saved,101) between convert(varchar,'$date_eva1',101) and convert(varchar,'$date_eva2',101)";
			$stot_rep2="select count(*) as jum_s_rep from db_qm.dbo.table_qm_iic_detail c inner join db_qm.dbo.table_qm_iic a on a.id_qm=c.id_qm where a.status_save='complete' and repeat='yes' and  convert(varchar,a.date_saved,101) between convert(varchar,'$date_eva1',101) and convert(varchar,'$date_eva2',101)";
			
			$stot_fcr3="select count(*) as jum_s_fcr from db_qm.dbo.table_qm_sli_detail c inner join db_qm.dbo.table_qm_sli a on a.id_qm=c.id_qm where fcr='fcr' and a.status_save='complete' and  convert(varchar,a.date_saved,101) between convert(varchar,'$date_eva1',101) and convert(varchar,'$date_eva2',101)";
			$stot_rep3="select count(*) as jum_s_rep from db_qm.dbo.table_qm_sli_detail c inner join db_qm.dbo.table_qm_sli a on a.id_qm=c.id_qm where a.status_save='complete' and repeat='yes' and  convert(varchar,a.date_saved,101) between convert(varchar,'$date_eva1',101) and convert(varchar,'$date_eva2',101)";	
			
		//1
	    $r_stot_fcr1=mssql_query($stot_fcr1);
	    $d_stot_fcr1=mssql_fetch_array($r_stot_fcr1);
		$fcr_tot_y1=$d_stot_fcr1["jum_s_fcr"];
				
	    $r_stot_rep1=mssql_query($stot_rep1);
	    $d_stot_rep1=mssql_fetch_array($r_stot_rep1);
		$rep_tot_y1=$d_stot_rep1["jum_s_rep"];
		//2
		$r_stot_fcr2=mssql_query($stot_fcr2);
	    $d_stot_fcr2=mssql_fetch_array($r_stot_fcr2);
		$fcr_tot_y2=$d_stot_fcr2["jum_s_fcr"];
				
	    $r_stot_rep2=mssql_query($stot_rep2);
	    $d_stot_rep2=mssql_fetch_array($r_stot_rep2);
		$rep_tot_y2=$d_stot_rep2["jum_s_rep"];
		//3
		$r_stot_fcr3=mssql_query($stot_fcr3);
	    $d_stot_fcr3=mssql_fetch_array($r_stot_fcr3);
		$fcr_tot_y3=$d_stot_fcr3["jum_s_fcr"];
				
	    $r_stot_rep3=mssql_query($stot_rep3);
	    $d_stot_rep3=mssql_fetch_array($r_stot_rep3);
		$rep_tot_y3=$d_stot_rep3["jum_s_rep"];
					
		
		$fcr_tot_y = $fcr_tot_y1+$fcr_tot_y2+$fcr_tot_y3;
		$rep_tot_y = $rep_tot_y1+$rep_tot_y2+$rep_tot_y3;
		
		$fcr=(($fcr_tot_y-$rep_tot_y)/$jum_tot)*100;
		printf("%1.2f ", $fcr);
		?>% </td>
    </tr>
    <tr>
      <td>Repeat (Y) </td>
      <td><? echo"$rep_tot_y"; ?></td>
    </tr>
    <tr>
      <td>Handling Time  Average</td>
      <td><?  
					$stot_hh1="[sp_handling]'table_qm','$report_by','$date_eva1','$date_eva2','$kd_unit','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%%','%%','%%','$c_observer','%$nik_agent%'";
	   $r_stot_hh1=mssql_query($stot_hh1);
	   while($d_stot_hh1=mssql_fetch_array($r_stot_hh1))
			{
		     	$d_tot_hh1=$d_stot_hh1["jum_hh"];
		     	$d_tot_mm1=$d_stot_hh1["jum_mm"];
		     	$d_tot_ss1=$d_stot_hh1["jum_ss"];
			} 
			$hhtomm1=(($d_tot_hh1*3600)+($d_tot_mm1*60)+$d_tot_ss1)/$jum_tot;
			
			$stot_hh2="[sp_handling]'table_qm_iic','$report_by','$date_eva1','$date_eva2','$kd_unit','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%%','%%','%%','$c_observer','%$nik_agent%'";
	   $r_stot_hh2=mssql_query($stot_hh2);
	   while($d_stot_hh2=mssql_fetch_array($r_stot_hh2))
			{
		     	$d_tot_hh2=$d_stot_hh2["jum_hh"];
		     	$d_tot_mm2=$d_stot_hh2["jum_mm"];
		     	$d_tot_ss2=$d_stot_hh2["jum_ss"];
			} 
			$hhtomm2=(($d_tot_hh2*3600)+($d_tot_mm2*60)+$d_tot_ss2)/$jum_tot;
			
			$stot_hh3="[sp_handling]'table_qm_sli','$report_by','$date_eva1','$date_eva2','$kd_unit','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%%','%%','%%','$c_observer','%$nik_agent%'";
	   $r_stot_hh3=mssql_query($stot_hh3);
	   while($d_stot_hh3=mssql_fetch_array($r_stot_hh3))
			{
		     	$d_tot_hh3=$d_stot_hh3["jum_hh"];
		     	$d_tot_mm3=$d_stot_hh3["jum_mm"];
		     	$d_tot_ss3=$d_stot_hh3["jum_ss"];
			} 
			$hhtomm3=(($d_tot_hh3*3600)+($d_tot_mm3*60)+$d_tot_ss3)/$jum_tot;
			$hhtomm = $hhtomm1+$hhtomm2+$hhtomm3;	
			//echo "$hhtomm1=$hhtomm2=$hhtomm3";
					$iHours1 = Floor($hhtomm / 3600);
					//echo"vvv$iHours1";
					$Minutes1 = Floor(($hhtomm - ($iHours1 * 3600))/ 60) ;
					//echo"dddd$Minutes1";
					$Seconds1 =  ($hhtomm - (($iHours1 * 3600)+($Minutes1 * 60))) ;
					
					echo"$iHours1:$Minutes1:";printf("%1.0f ", $Seconds1);  
			
			//echo"$hms1";
			
		?></td>
    </tr>
    <tr>
      <td>Drop Call (Y) </td>
      <td><?  
	   $stot_d1="[sp_dropcall]'table_qm','$report_by','$date_eva1','$date_eva2','$kd_unit','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%%','%%','%%','$c_observer','%$nik_agent%'";
	   //echo $stot_d;
	   $r_stot_d1=mssql_query($stot_d1);
	   $d_stot_d1=mssql_fetch_array($r_stot_d1);
	   $d_tot_y1=$d_stot_d1["jum_s_d"];
		
		$stot_d2="[sp_dropcall]'table_qm','$report_by','$date_eva1','$date_eva2','$kd_unit','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%%','%%','%%','$c_observer','%$nik_agent%'";
	   //echo $stot_d;
	   $r_stot_d2=mssql_query($stot_d2);
	   $d_stot_d2=mssql_fetch_array($r_stot_d2);
	   $d_tot_y2=$d_stot_d2["jum_s_d"];
	   
	   	$stot_d3="[sp_dropcall]'table_qm','$report_by','$date_eva1','$date_eva2','$kd_unit','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%%','%%','%%','$c_observer','%$nik_agent%'";
	   //echo $stot_d;
	   $r_stot_d3=mssql_query($stot_d3);
	   $d_stot_d3=mssql_fetch_array($r_stot_d3);
	   $d_tot_y3=$d_stot_d3["jum_s_d"];
	   
	   $d_tot_y = $d_tot_y1+$d_tot_y2+$d_tot_y3;
			echo"$d_tot_y";
		?></td>
    </tr>
    <tr>
      <td>Score Average</td>
      <td>
	  <?
	  $score_avg=$q1_avg+$q2_avg+$q3_avg+$q4_avg+$q5_avg+$q6_avg+$q7_avg+$q8_avg+$q9_avg+$q10_avg+$q11_avg+$q12_avg+$q13_avg+$q14_avg+$q15_avg+$q16_avg+$q17_avg+$q18_avg+$q19_avg+$q20_avg;
	  //echo"$score_avg";
	  printf("%1.2f ", $score_avg);
	  ?></td>
    </tr>
    <tr>
      <td>Evaluation Scale </td>
      <td>
	  <?
	  					if ($score_avg >= 90)
						{
						$skala="A";
						}
						if ($score_avg >= 80 and $score_avg < 90)
						{
						$skala="B";
						}
						if ($score_avg >= 70 and $score_avg < 80)
						{
						$skala="C";
						}
						if ($score_avg >= 60 and $score_avg < 70)
						{
						$skala="D";
						}
						if ($score_avg < 60)
						{
						$skala="E";
						}
echo"$skala";
	  ?></td>
    </tr>
  </table>