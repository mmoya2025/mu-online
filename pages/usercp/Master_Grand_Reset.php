<?php if($mvcore['Reset_Character'] != 'on' && $mvcore['Grand_Reset'] != 'on' && $mvcore['Master_Grand_Reset'] != 'on') { echo'<div class="mvcore-nNote mvcore-nFailure">'.eng_for_the_moment_tpi_disabled.'</div>'; } ?>
<?php if($mvcore['Reset_Character'] == 'on' && $mvcore['Grand_Reset'] == 'on' && $mvcore['Master_Grand_Reset'] == 'on') { ?>
	<?php if($_SESSION['user_login'] == 'ok') { ?>
<div style="font-size:20px;" align="left"><table width="100%"><tr><td align="left"><?php echo''; ?></td><td align="right"><a href="-id-Game_Panel.html"><?php echo''.ucp_back_to_gpanel.''; ?></a></td></tr></table></div>

<?php if($mvcore['web_shop_disc_vip'] > '0' && $mvcore['vip_sys_active'] == '1' && $mvcore['web_master_gr_reward_vip'] > '0'){ echo'<br><center><div><b>'.ucp_mgr_reward.' '.$mvcore['web_master_gr_reward_vip'].' '.ucp_gr_for_vip_only.'</b></div></center>'; }; ?>
	
<?php

if($_GET['op3'] != ''){
	
	$character_name = $_GET['op3'];

$useracc = $_SESSION['username']; // Get username
$sys_start = mssql_query("select name,clevel,".$mvcore['rr_column_name'].",".$mvcore['gr_column_name'].",money,LevelUpPoint,class,Inventory,MapNumber,PkLevel,strength,dexterity,vitality,energy,Leadership,accountid,m_Grand_Resets from character where name = '".$character_name."'");
$drop_info = mssql_fetch_row($sys_start);

if($mvcore['mgreset_lvl_reset'] == 'yes'){ $new_level = '1'; } else { $new_level = $drop_info[1]; };

if($mvcore['mgreset_stats'] == 'yes') { $new_lvlupp = $drop_info[10] + $drop_info[11] + $drop_info[12] + $drop_info[13]; } else { $new_lvlupp = '0'; };

//checking system
$acc_status = mssql_query("Select ConnectStat from ".$mvcore_medb_s." where memb___id='".$useracc."'"); $acc_statusx = mssql_fetch_row($acc_status);
$acc_statusx[0] == 0 ? $useron=1 : $useron=0; //Username
if($acc_statusx[0] == 1) { echo'<div class="mvcore-nNote mvcore-nFailure">'.ucp_char_online.'</div>'; };

if($mvcore['web_rgm_level_vip'] > '0' && $mvcore['vip_sys_active'] == '1'){
	$LevelREQs = $mvcore['web_rgm_level_vip'];
} else {
	$LevelREQs = $mvcore['mgreset_level'];
}

strtoupper($drop_info[15]) == strtoupper($useracc) ? $usern=1 : $usern=0; //Username
$drop_info[0] == $character_name ? $name=1 : $name=0; //Name
//$drop_info[16] == 0 ? $mGresets=1 : $mGresets=0; //mGResets
$drop_info[1] >= $LevelREQs ? $level=1 : $level=0; //Level
$drop_info[2] >= $mvcore['mgreset_ress'] ? $resets=1 : $resets=0; //Resets
$drop_info[3] >= $mvcore['mgreset_grandres'] ? $mgresets=1 : $mgresets=0; //Master GResets
if($mvcore['mgreset_zen'] == '0') { $zen=1; } else { $drop_info[4] >= $mvcore['mgreset_zen'] ? $zen=1 : $zen=0; }; //Zen

if(in_array($drop_info[6], array('2', '3', '18', '19', '34', '35', '49', '50', '51', '65', '66', '67', '82', '83', '97', '98', '113', '114', '', '', '', '', '', '', '', '', '', '', '', '', '', ''))){ $classpass = '1'; } else { $classpass = '0'; };

if($mvcore['mgreset_item_check'] == 'yes') {
if($mvcore['db_season'] >= '9') { $cvbins = '7680'; } elseif($mvcore['db_season'] == '1') { $cvbins = '1200'; } else { $cvbins = '3840'; }; // Warehouse
if($mvcore['db_season'] >= '9') { $cvbinsch = '7552'; } elseif($mvcore['db_season'] == '1') { $cvbinsch = '1080'; } else { $cvbinsch = '3776'; }; // Inventory

$sqll= mssql_query("declare @items varbinary(".$cvbinsch."); 
	set @items = (select [Inventory] from [Character] where [name]='".$drop_info[0]."');
	print @items;");
$sqll=mssql_get_last_message();

if($mvcore['db_season'] >= '9') { $hexlen = '64'; } elseif($mvcore['db_season'] == '1') { $hexlen = '20'; } else { $hexlen = '32'; };

$sqlls	= substr($sqll,2);
$item_check0		= substr($sqlls,($hexlen*0), $hexlen);	//Item 0
$item_check1		= substr($sqlls,($hexlen*1), $hexlen);	//Item 1
$item_check2		= substr($sqlls,($hexlen*2), $hexlen);	//Item 2
$item_check3		= substr($sqlls,($hexlen*3), $hexlen);	//Item 3
$item_check4		= substr($sqlls,($hexlen*4), $hexlen);	//Item 4
$item_check5		= substr($sqlls,($hexlen*5), $hexlen);	//Item 5
$item_check6		= substr($sqlls,($hexlen*6), $hexlen);	//Item 6
$item_check7		= substr($sqlls,($hexlen*7), $hexlen);	//Item 7
$item_check8		= substr($sqlls,($hexlen*8), $hexlen);	//Item 8
$item_check9		= substr($sqlls,($hexlen*9), $hexlen);	//Item 9
$item_check10		= substr($sqlls,($hexlen*10), $hexlen);	//Item 10
$item_check11		= substr($sqlls,($hexlen*11), $hexlen);	//Item 11

if($mvcore['db_season'] >= '9') { $hexlens = 'FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF'; } elseif($mvcore['db_season'] == '1') { $hexlens = 'FFFFFFFFFFFFFFFFFFFF'; } else { $hexlens = 'FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF'; };

if($item_check0 == $hexlens && $item_check1 == $hexlens && $item_check2 == $hexlens && $item_check3 == $hexlens && $item_check4 == $hexlens && $item_check5 == $hexlens && $item_check6 == $hexlens && $item_check7 == $hexlens && $item_check8 == $hexlens && $item_check9 == $hexlens && $item_check10 == $hexlens && $item_check11 == $hexlens) { $items_on_char = 1; } 
else { echo'<div class="mvcore-nNote mvcore-nFailure">'.ucp_gr_items_on_character.'</div>'; $items_on_char = 0; };
} else { $items_on_char = 1; };

if($mvcore['web_master_gr_reward_vip'] > '0' && $mvcore['vip_sys_active'] == '1'){
	$tickCostVip = $mvcore['web_master_gr_reward_vip'];
} else {
	$tickCostVip = $mvcore['mgreset_reward'];
}

	if($useron == '1' && $level == '1' && $zen == '1' && $name == '1' && $usern == '1' && $items_on_char == '1' && $resets == '1' && $mgresets == '1' && $classpass == '1') {
		
		if($mvcore['mgreset_stats'] == 'yes'){ $run_update = mssql_query("Update character set strength = '25', dexterity = '25', vitality = '25', energy = '25', Leadership = '25' where name = '".$character_name."'"); }; //Reset Stats
		
		$run_update = mssql_query("Update character set MapNumber = 0, LevelUpPoint = LevelUpPoint + '".$new_lvlupp."', ".$mvcore['rr_column_name']." = ".$mvcore['rr_column_name']." - '".$mvcore['mgreset_ress']."', ".$mvcore['gr_column_name']." = ".$mvcore['gr_column_name']." - '".$mvcore['mgreset_grandres']."', m_Grand_Resets = m_Grand_Resets + 1, money = money - '".$mvcore['mgreset_zen']."', clevel = '".$new_level."' where name = '".$character_name."'"); //Update character
		
		
		//Reset Reward
		if($mvcore['mgreset_rew_cred'] == '1') {
			$run = mssql_query("update ".$mvcore['credits_table']." set ".$mvcore['credits_column']." = ".$mvcore['credits_column']." + '".$tickCostVip."' where ".$mvcore['user_column']." ='".$useracc."'");
			$fInfoInt = mssql_query("insert into MVCore_Money_Data (Username,Credits,GoldCredits,Description,Date,VoteType) VALUES ('".$useracc."','".$tickCostVip."','0','From Master Grand Reset','".time()."','0')");
		}
		elseif($mvcore['mgreset_rew_cred'] == '2') {
			$run = mssql_query("update ".$mvcore['credits_table']." set ".$mvcore['credits2_column']." = ".$mvcore['credits2_column']." + '".$tickCostVip."' where ".$mvcore['user_column']." ='".$useracc."'");
			$fInfoInt = mssql_query("insert into MVCore_Money_Data (Username,Credits,GoldCredits,Description,Date,VoteType) VALUES ('".$useracc."','0','".$tickCostVip."','From Master Grand Reset','".time()."','0')");
		};
		//end
		
				echo'<div class="mvcore-nNote mvcore-nSuccess">'.ucp_gr_character_seccess_resetd.'</div>';
		
	} else { echo'<div class="mvcore-nNote mvcore-nFailure">'.ucp_some_req_not_respected.'</div>'; } ;
};
?>
<?php
	$useracc = $_SESSION['username']; // Get Loged In Username
	$sys_start = mssql_query("select name,clevel,".$mvcore['rr_column_name'].",".$mvcore['gr_column_name'].",money,LevelUpPoint,class,Inventory,MapNumber,PkLevel,strength,dexterity,vitality,energy,Leadership,accountid from character where AccountID = '".$useracc."' order by ".$mvcore['gr_column_name']." desc, ".$mvcore['rr_column_name']." desc, clevel desc");
	$drop_infosd = mssql_fetch_row($sys_start);
	if($drop_infosd[0] == '') { echo'<div class="mvcore-nNote mvcore-nInformation">'.ucp_char_list_empty.'</div>'; } else {
?>
<?php

if($mvcore['mgreset_zen'] >= '1') { $zen_on_off = '<td>'.ucp_cpk_req.' Zen</td>'; } else { $zen_on_off = ''; }; //Req. Zen
if($mvcore['mgreset_reward'] >= '1') { $reward_on_off = '<td>Reward</td>'; } else { $reward_on_off = ''; }; //GReset Reward
echo'
	<table class="mvcore-table" cellpadding="0" cellspacing="0">
		<tr class="mvcore-tabletr">
			<td>'.ucp_cpk_name.'</td>
			'.$reward_on_off.'
			'.$zen_on_off.'
			<td>'.ucp_cpk_req.' '.ucp_level.'</td>
			<td>'.ucp_cpk_req.' '.ucp_resets.'</td>
			<td>'.ucp_cpk_req.' '.ucp_gresets.'</td>
			<td>'.ucp_3rd_class.'</td>
			<td>'.ucp_cpk_req.' '.ucp_cpk_offline.'</td>
			<td>'.ucp_master_gresets.'</td>
		</tr>
';

$useracc = $_SESSION['username']; // Get username
$sys_start = mssql_query("select name,clevel,".$mvcore['rr_column_name'].",".$mvcore['gr_column_name'].",money,LevelUpPoint,class,Inventory,MapNumber,PkLevel,strength,dexterity,vitality,energy,Leadership,accountid,m_Grand_Resets from character where AccountID = '".$useracc."' order by ".$mvcore['gr_column_name']." desc, ".$mvcore['rr_column_name']." desc, clevel desc");
for($i=0;$i < mssql_num_rows($sys_start);++$i) {
$drop_info = mssql_fetch_row($sys_start);

//Static things
$acc_status = mssql_query("Select ConnectStat from ".$mvcore_medb_s." where memb___id='".$useracc."'"); $acc_statusx = mssql_fetch_row($acc_status);
switch ($drop_info[9]) {
case 6: $hstatus="Phonoman"; break;
Case 5: $hstatus="Phonoman lvl 2"; break;
Case 4: $hstatus="Phonoman lvl 1"; break;
Case 3: $hstatus="Commoner"; break;
Case 2: $hstatus="Hero lvl 1"; break;
Case 1: $hstatus="Hero lvl 2"; break;
Case 0: $hstatus="Hero"; break;
};
switch ($acc_statusx[0]) {  case 0: $is_on_off="<font color='#58FA58'>".gs_status_offline."</font>"; break; case 1: $is_on_off="<font color='#FE2E2E'>".gs_status_online."</font>"; break; Default: $is_on_off="<font color='#58FA58'>".gs_status_offline."</font>"; break; };

if($mvcore['web_rgm_level_vip'] > '0' && $mvcore['vip_sys_active'] == '1'){
	$LevelREQs = $mvcore['web_rgm_level_vip'];
} else {
	$LevelREQs = $mvcore['mgreset_level'];
}

//checking system
$drop_info[1] >= $LevelREQs ? $level=1 : $level=0; //Level
$drop_info[2] >= $mvcore['mgreset_ress'] ? $resets=1 : $resets=0; //Resets
//$drop_info[16] == 0 ? $mGresets=1 : $mGresets=0; //mGResets
$drop_info[3] >= $mvcore['mgreset_grandres'] ? $mgresets=1 : $mgresets=0; //Master GResets
if($mvcore['mgreset_zen'] == '0') { $zen=1; } else { $drop_info[4] >= $mvcore['mgreset_zen'] ? $zen=1 : $zen=0; }; //Zen

if( $drop_info[6] == '2'){ $class_out_txt = '<font color="#58FA58">Yes</font>'; }
elseif( $drop_info[6] == '3'){ $class_out_txt = '<font color="#58FA58">Yes</font>'; }
elseif( $drop_info[6] == '18'){ $class_out_txt = '<font color="#58FA58">Yes</font>'; }
elseif( $drop_info[6] == '19'){ $class_out_txt = '<font color="#58FA58">Yes</font>'; }
elseif( $drop_info[6] == '34'){ $class_out_txt = '<font color="#58FA58">Yes</font>'; }
elseif( $drop_info[6] == '35'){ $class_out_txt = '<font color="#58FA58">Yes</font>'; }
elseif( $drop_info[6] == '49'){ $class_out_txt = '<font color="#58FA58">Yes</font>'; }
elseif( $drop_info[6] == '50'){ $class_out_txt = '<font color="#58FA58">Yes</font>'; }
elseif( $drop_info[6] == '51'){ $class_out_txt = '<font color="#58FA58">Yes</font>'; }
elseif( $drop_info[6] == '65'){ $class_out_txt = '<font color="#58FA58">Yes</font>'; }
elseif( $drop_info[6] == '66'){ $class_out_txt = '<font color="#58FA58">Yes</font>'; }
elseif( $drop_info[6] == '67'){ $class_out_txt = '<font color="#58FA58">Yes</font>'; }
elseif( $drop_info[6] == '82'){ $class_out_txt = '<font color="#58FA58">Yes</font>'; }
elseif( $drop_info[6] == '83'){ $class_out_txt = '<font color="#58FA58">Yes</font>'; }
elseif( $drop_info[6] == '97'){ $class_out_txt = '<font color="#58FA58">Yes</font>'; }
elseif( $drop_info[6] == '98'){ $class_out_txt = '<font color="#58FA58">Yes</font>'; }
elseif( $drop_info[6] == '113'){ $class_out_txt = '<font color="#58FA58">Yes</font>'; }
elseif( $drop_info[6] == '114'){ $class_out_txt = '<font color="#58FA58">Yes</font>'; }
else { $class_out_txt = '<font color="#FE2E2E">No</font>'; };

if($level == '1' && $zen == '1' && $resets == '1' && $mgresets == '1') { $module_ok = '<a href="-id-user_cp-id-Master_Grand_Reset-id-'.$drop_info[0].'.html"><img src="system/engine_images/gear.png" width="11px"> <b>'.ucp_master_gresets.'</b></a>'; } 
	else { $module_ok = "<font color='red'>N/A</font>"; };

//Coloring ifs
if($drop_info[1] >= $LevelREQs) { $level_color = '#58FA58'; } else { $level_color = '#FE2E2E'; }; // Req. Level Color
if($drop_info[4] >= $mvcore['mgreset_zen']) { $zen_color = '#58FA58'; } else { $zen_color = '#FE2E2E'; }; // Req. Zen Color
if($drop_info[2] >= $mvcore['mgreset_ress']) { $res_color = '#58FA58'; } else { $res_color = '#FE2E2E'; }; // Req. Zen Color
if($drop_info[3] >= $mvcore['mgreset_grandres']) { $mgres_color = '#58FA58'; } else { $mgres_color = '#FE2E2E'; }; // Req. Zen Color

if($mvcore['web_master_gr_reward_vip'] > '0' && $mvcore['vip_sys_active'] == '1'){
	$tickCostVip = $mvcore['web_master_gr_reward_vip'];
} else {
	$tickCostVip = $mvcore['mgreset_reward'];
}

//Extra options
if($mvcore['mgreset_reward'] >= '1' && $mvcore['mgreset_rew_cred'] == '1') { $reward2_on_off = '<td>'.$tickCostVip.' '.$mvcore['money_name1'].'</td>'; }
elseif($mvcore['mgreset_reward'] >= '1' && $mvcore['mgreset_rew_cred'] == '2') { $reward2_on_off = '<td>'.$tickCostVip.' '.$mvcore['money_name2'].'</td>'; } else { $reward2_on_off = ''; }; //Reset Reward

if($mvcore['mgreset_zen'] >= '1') { $zen_on_off = '<td><font color="'.$zen_color.'">'.number_format($mvcore['mgreset_zen'], 0, '', ',').' Zen </font></td>'; } else { $zen_on_off = ''; }; //Req. Zen

		echo'
			<tr style="border-collapse: collapse; border-spacing: 0px;">
				<td><a href="-id-character_view-id-'.$drop_info[0].'.html"><b>'.$drop_info[0].'</b></a></td>
				'.$reward2_on_off.'
				'.$zen_on_off.'
				<td><font color="'.$level_color.'">'.$drop_info[1].' / '.$LevelREQs.'</font></td>
				<td><font color="'.$res_color.'">'.$drop_info[2].' / '.$mvcore['mgreset_ress'].'</font></td>
				<td><font color="'.$mgres_color.'">'.$drop_info[3].' / '.$mvcore['mgreset_grandres'].'</font></td>
				<td>'.$class_out_txt.'</td>
				<td>'.$is_on_off.'</td>
				<td>'.$module_ok.'</td>
			</tr>
		';
};
?>
</table>
<?
if($mvcore['mgreset_grandres'] >= '1') {
	
	if($mvcore['mgreset_rew_cred'] == '1') { $cost_t_s = ''.$mvcore['money_name1'].''; }
	else { $cost_t_s = ''.$mvcore['money_name2'].''; };
	
	echo '
		<br>
		
		<div class="latest-twitter-tweett">
			<table width="100%" align="center" cellpadding="0" cellspacing="0">
				<tr>
					<td style="padding-left:15px;"><b>'.ucp_rchar_reward.'</b>:</td>
					<td style="float:right;padding-right:15px;">'.$mvcore['mgreset_reward'].' '.$cost_t_s.'</td>
				</tr>
			</table>
		</div>
		<div class="latest-twitter-tweett">
			<table width="100%" align="center" cellpadding="0" cellspacing="0">
				<tr>
					<td style="padding-left:15px;"><b>'.ucp_reset_stats.'</b>:</td>
					<td style="float:right;padding-right:15px;">'.$mvcore['mgreset_stats'].'</td>
				</tr>
			</table>
		</div>
		<div class="latest-twitter-tweett">
			<table width="100%" align="center" cellpadding="0" cellspacing="0">
				<tr>
					<td style="padding-left:15px;"><b>'.ucp_itemchelkc.'</b>:</td>
					<td style="float:right;padding-right:15px;">'.$mvcore['mgreset_item_check'].'</td>
				</tr>
			</table>
		</div>
		<div class="latest-twitter-tweett">
			<table width="100%" align="center" cellpadding="0" cellspacing="0">
				<tr>
					<td style="padding-left:15px;"><b>'.ucp_cpk_req.' '.ucp_level.'</b>:</td>
					<td style="float:right;padding-right:15px;">'.$mvcore['mgreset_level'].'</td>
				</tr>
			</table>
		</div>
		<div class="latest-twitter-tweett">
			<table width="100%" align="center" cellpadding="0" cellspacing="0">
				<tr>
					<td style="padding-left:15px;"><b>'.ucp_cpk_req.' '.ucp_resets.'</b>:</td>
					<td style="float:right;padding-right:15px;">'.$mvcore['mgreset_ress'].'</td>
				</tr>
			</table>
		</div>
		<div class="latest-twitter-tweett">
			<table width="100%" align="center" cellpadding="0" cellspacing="0">
				<tr>
					<td style="padding-left:15px;"><b>'.ucp_cpk_req.' '.ucp_gresets.'</b>:</td>
					<td style="float:right;padding-right:15px;">'.$mvcore['mgreset_grandres'].'</td>
				</tr>
			</table>
		</div>
		<div class="latest-twitter-tweett">
			<table width="100%" align="center" cellpadding="0" cellspacing="0">
				<tr>
					<td style="padding-left:15px;"><b>'.ucp_cpk_req.' Zen</b>:</td>
					<td style="float:right;padding-right:15px;">'.$mvcore['mgreset_zen'].'</td>
				</tr>
			</table>
		</div>
	';
};
?>
<?php } ?>
	<?php } else { echo'<div class="mvcore-nNote mvcore-nFailure">'.eng_please_ltut_page.'</div>'; }; ?>
<?php } ?>