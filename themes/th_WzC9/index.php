<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="Keywords" content="Massively multiplayer online games, mmo, rpg online games, games, game, free online games, Webzen, new slogan, next generation, MVCore, Mu Online, Mu, Game, Online, Server, Play, For, Free, Season, s2, s3, s4, s5, s6, s7, s8, s9, blade master, grand master, hight elf, dimension master, duel master, lord emperor, fist master, massive portal promotion, Jump Start with fully-Geared High leveled characters, Skip the low, Jump to hight,Top-notch, high level avatars">
	<meta name="description" content="MuOnline Private Server Website" />
	<title><?php echo $mvcore['title'];?></title> <!-- Can edit from AdminCP -->
	<link rel="shortcut icon" href="system/engine_images/favi.png" /> <!-- MVCore ICO -->
	<script src="//code.jquery.com/jquery-1.10.2.js"></script> <!-- JS-->
	<?php include('system/engine_css/mvcore_style.php'); ?> <!-- Engine CSS -->
	<link type="text/css" rel="stylesheet" href="/themes/<?php echo $mvcore['theme_dir'];?>/css/c9Game.css"/>
</head>
<body>
<?php include('system/theme_inc/inc.item_viewer.php'); ?> <!-- Item View JS -->
<div id="siteVisualWrap">
	<div id="siteVisualConts">
		<div class="G_ContsWrap">
			<div class="space298"></div>
				<nav id="GameNavi">
					<ul id="GameMenuSkip" style="margin-left:-30px;">
						<?php if($mvcore['News']=='on') { ?><li><a class="depth01" href="-id-News.html"><span class="onLeft"></span><span class="onCent"><? echo''.theme_link_news.''; ?></span><span class="onRight"></span></a></li><?php } ?>
						<?php if($mvcore['Register']=='on' && $_SESSION['user_login'] != 'ok') { ?><li><a class="depth01" href="-id-Register.html"><span class="onLeft"></span><span class="onCent"><? echo''.theme_link_register.''; ?></span><span class="onRight"></span></a></li><?php } ?>
						<?php if($mvcore['Rankings']=='on') { ?><li><a class="depth01" href="-id-Rankings.html"><span class="onLeft"></span><span class="onCent"><? echo''.theme_link_rankings.''; ?></span><span class="onRight"></span></a></li><?php } ?>
						<?php if($mvcore['Statistics']=='on') { ?><li><a class="depth01" href="-id-Statistics.html"><span class="onLeft"></span><span class="onCent"><? echo''.theme_link_statistics.''; ?></span><span class="onRight"></span></a></li><?php } ?>
						<?php if($mvcore['Gallery']=='on') { ?><li><a class="depth01" href="-id-Gallery.html"><span class="onLeft"></span><span class="onCent"><? echo''.theme_link_gallery.''; ?></span><span class="onRight"></span></a></li><?php } ?>
						<?php if($mvcore['Market']=='on') { ?><li><a class="depth01" href="-id-Market.html"><span class="onLeft"></span><span class="onCent"><? echo''.theme_link_market.''; ?></span><span class="onRight"></span></a></li><?php } ?>
						<?php if($mvcore['Webshop']=='on') { ?><li><a class="depth01" href="-id-Webshop.html"><span class="onLeft"></span><span class="onCent"><? echo''.theme_link_webshop.''; ?></span><span class="onRight"></span></a></li><?php } ?>
						<?php if($mvcore['Forum']=='on') { ?><li><a class="depth01" target="blank" href="<?php echo $mvcore['forurl']; ?>"><span class="onLeft"></span><span class="onCent"><? echo''.theme_link_forum.''; ?></span><span class="onRight"></span></a></li><?php } ?>
					</ul>
				</nav>
			<div id="contentStart">
				<div class="gContsBodyDiv">
					<section id="gContsBodyWrap">
						<ul class="location">
							<li class="home"><a href="-id-News.html"></a></li>
							<?php
								if($_GET['op1'] != '') { echo'<li><a href="#">'.str_replace("_"," ",$_GET['op1']).'&nbsp;&nbsp;<img src="http://image.webzen.net/C9/common/location_arrow.gif" alt=""></a></li>'; };
								if($_GET['op2'] != '') { echo'<li><a href="#">'.str_replace("_"," ",$_GET['op2']).'&nbsp;&nbsp;<img src="http://image.webzen.net/C9/common/location_arrow.gif" alt=""></a></li>'; };
								if($_GET['op3'] != '') { echo'<li><a href="#">'.str_replace("_"," ",$_GET['op3']).'&nbsp;&nbsp;<img src="http://image.webzen.net/C9/common/location_arrow.gif" alt=""></a></li>'; };
								if($_GET['op4'] != '') { echo'<li><a href="#">'.str_replace("_"," ",$_GET['op4']).'&nbsp;&nbsp;<img src="http://image.webzen.net/C9/common/location_arrow.gif" alt=""></a></li>'; };
								if($_GET['op5'] != '') { echo'<li><a href="#">'.str_replace("_"," ",$_GET['op5']).'&nbsp;&nbsp;<img src="http://image.webzen.net/C9/common/location_arrow.gif" alt=""></a></li>'; };
							?>
						</ul>

						<section class='gContsViewWrap'>

							<article class="newsWrap">
								<div class="shareSNS"></div>
								<article class="guideTemWrap">
									<div class="gameIntroWrap">
										<div style="padding-left:10px;padding-right:12px;padding-top:10px;">
											<center><?php echo $mvcore['ads_spt_468x60']; ?> <!-- Banner ( 468 x 60 ) --></center>
											<?php include('system/engine_pages.php'); ?> <!-- Used To Output Page Content -->
										</div>
									</div>
								</article>
							</article>
						</section>
						<section class="gContsSideWrap">
						
							<aside class="sideSumBanner">
								<div class="bgTop"></div>
								<ul>
									<?php if($_SESSION['user_login'] != 'ok') { ?>
										<form method="post" action="">
											<li align="center">
												<input type="text" class="mvcore-input-main" name="usern" style="width:210px !important;border:1px solid #a49878 !important;" placeholder="Username" value="">
												<input type="password" class="mvcore-input-main" name="passn" style="width:210px !important;border:1px solid #a49878 !important;" placeholder="Password" value="">
											</li>
											<li><button name="loginacc" class="mvcore-button-style" type="submit">LOG IN</button></li>
											<li><?php if($mvcore['Lost_Password']=='on'  && $_SESSION['user_login'] != 'ok') { ?><a href="-id-Lost_Password.html"><? echo''.theme_link_lpassword.''; ?></a><?php } ?><?php if($mvcore['Register']=='on' && $_SESSION['user_login'] != 'ok') { ?> <a href="-id-Register.html"><? echo''.theme_link_register.''; ?></a><?php } ?></li>
										</form>
									<?php } else { ?>
										<li><img src="/themes/<?php echo $mvcore['theme_dir'];?>/img/cred.png" style="width:15px"> <?php echo $mvcore['money_name1']; ?>: <b><?php echo $mvc_Money_credits; ?></b></li>
										<li><img src="/themes/<?php echo $mvcore['theme_dir'];?>/img/gold.png" style="width:15px"> <?php echo $mvcore['money_name2']; ?>: <b><?php echo $mvc_Money_goldcredits; ?></b></li>
										<li><img src="/themes/<?php echo $mvcore['theme_dir'];?>/img/wcoins.png" style="width:15px"> wCoins: <b><?php echo $mvc_Money_wcoins; ?></b></li>
										<li><img src="/themes/<?php echo $mvcore['theme_dir'];?>/img/zen.png" style="width:15px"> Vault Zen: <b><?php echo $mvc_Money_VaultZen; ?></b></li>
										<li></li>	
										<!-- =-=-= Main Pages For Users ( Contains PHP To Hide Link If Page Disabled In AdminCP ) =-=-= -->
										<?php if($mvcore['Account_Settings']=='on') { ?><li><a href="-id-Account_Settings.html"><? echo''.theme_link_accountsett.''; ?></a></li><?php } ?>
										<?php if($mvcore['Payment_System']=='on') { ?><li><a href="-id-Payment_System.html" style="color:red;"><? echo''.theme_link_paymentsys.''; ?></a></li><?php } ?>
										<li><a href="-id-Game_Panel.html">Game Panel</a></li>
										<?php if($mvcore['Vote']=='on') { ?><li><a href="-id-Vote.html"><? echo''.theme_link_freevote.''; ?></a></li><?php } ?>


										<!-- =-=-= Extra Pages For Users ( Contains PHP To Hide Link If Page Disabled In AdminCP ) =-=-= -->
										<?php if($mvcore['Hide_Information']=='on') { ?><li><a href="-id-Hide_Information.html"><? echo''.theme_link_hideiteminfo.''; ?></a></li><?php } ?>
										<?php if($mvcore['Friend_System']=='on') { ?><li><a href="-id-Friend_System.html"><? echo''.theme_link_friendsys.''; ?></a></li><?php } ?>
										<?php if($mvcore['Exchange_System']=='on') { ?><li><a href="-id-Exchange_System.html"><? echo''.theme_link_exchangesys.''; ?></a></li><?php } ?>
										<?php if($mvcore['GM_Buy']=='on') { ?><li><a href="-id-GM_Buy.html"><? echo''.theme_link_gmbuy.''; ?></a></li><?php } ?>
										<?php if($mvcore['Vip_Buy']=='on') { ?><li><a href="-id-Vip_Buy.html"><? echo''.theme_link_vipbuy.''; ?></a></li><?php } ?>
										<?php if($mvcore['Lottery_System']=='on') { ?><li><a href="-id-Lottery_System.html"><? echo''.theme_link_lotterysys.''; ?></a></li><?php } ?>
										<?php if($mvcore['Warehouse']=='on') { ?><li><a href="-id-Warehouse.html"><? echo''.theme_link_warehouse.''; ?></a></li><?php } ?>
										<?php if($mvcore['Castle_Siege_Register']=='on') { ?><li><a href="-id-Castle_Siege_Register.html"><? echo''.theme_link_caslesiegereg.''; ?></a></li><?php } ?>
										<?php if($mvcore['Item_Upgrade_System']=='on') { ?><li><a href="-id-Item_Upgrade_System.html"><? echo''.theme_link_itemupgradesys.''; ?></a></li><?php } ?>
										<?php if($mvcore['anc_mob_onoff']=='on') { ?><li><a href="-id-Ancient_Exchange.html"><? echo''.theme_link_ancexc.''; ?></a></li><?php } ?>
										<?php if($mvcore['My_Sponsor']=='on') { ?><li><a href="-id-My_Sponsor.html"><? echo''.theme_link_mysponsors.''; ?></a></li><?php } ?>
										<?php if($mvcore['Scramble']=='on') { ?><li><a href="-id-Scramble_Event.html"><? echo''.theme_link_scrambleevent.''; ?></a></li><?php } ?>


										<!-- =-=-= Admin/GM Panel Buttons ( Secured With PHP ) =-=-= -->
										<?php if($_SESSION['admin_panel']=='ok') { ?><li><a target="_blank" href="-id-admincp-id-Dashboard.html">Admin Panel</a></li><?php } ?>
										<?php if($_SESSION['gm_panel']=='ok') { ?><li><a href="-id-gm_cp-id-GM_Panel.html"><? echo''.theme_link_gmpanel.''; ?></a></li><?php } ?>


										<!-- =-=-= LogOut Link ( Logout User And Sends To News Page. ) =-=-= -->
										<li><a href="-id-exitacc.html"><? echo''.theme_link_logout.''; ?></a></li> <!-- Logout -->
									<?php } ?>
								</ul>
								<div class="bgBottom"></div>
							</aside>
							
							<article class="mainRankingWrap" style="height:100%;">
								<h2>Statistics</h2>
								<div class="mainRankingBox" style="height:100%;">
									<?php include('system/theme_inc/inc.statistic.php'); ?> <!-- Statistics -->
								</div>
							</article>
							
							<article class="mainRankingWrap" style="height:100%;">
								<h2>Top Characters</h2>
								<div class="mainRankingBox" style="height:100%;">
									<?php include('system/theme_inc/inc.top_characters.php'); ?> <!-- Top 10 Characters -->
								</div>
							</article>

							<article class="mainRankingWrap" style="height:100%;">
								<h2>Top Guilds</h2>
								<div class="mainRankingBox" style="height:100%;">
									<?php include('system/theme_inc/inc.top_guilds.php'); ?> <!-- Top 10 Guilds -->
								</div>
							</article>
							
							<article class="mainRankingWrap" style="height:100%;">
								<h2>Market Latest</h2>
								<div class="mainRankingBox" style="height:100%;">
									<?php include('system/theme_inc/inc.last_market_items.php'); ?> <!-- Market Latest Items -->
								</div>
							</article>
							
							<article class="mainRankingWrap" style="height:100%;">
								<h2>Event Timer</h2>
								<div class="mainRankingBox" style="height:100%;">
									<?php include('system/theme_inc/inc.event_timer.php'); ?> <!-- Event Timer -->
								</div>
							</article>
							<ul class="mainSnsWrap">
								<li><a href="<?php echo $mvcore['fb_s_url']; ?>" target="_blank" rel="nofollow"><img src="/themes/<?php echo $mvcore['theme_dir'];?>/img/icon_main_sns_facebook.gif" alt="facebook"></a></li>
								<li><a href="<?php echo $mvcore['gp_s_url']; ?>" target="_blank" rel="nofollow"><img src="/themes/<?php echo $mvcore['theme_dir'];?>/img/icon_main_sns_google.gif" alt="google+"></a></li>
								<li><a href="<?php echo $mvcore['yt_s_url']; ?>" target="_blank" rel="nofollow"><img src="/themes/<?php echo $mvcore['theme_dir'];?>/img/icon_main_sns_youtube.gif" alt="youtube"></a></li>
							</ul>
							
							<article class="mainRankingWrap" style="height:100%;">
								<br><center><?php echo $mvcore['ads_spt_300x250']; ?> <!-- Medium Rectangle ( 300 x 250 ) --></center>
							</article>
							
						</section>
					</section>
				</div>
			</div>


			<article id="gDownload"><a href="-id-Downloads.html" title="Game Download" onFocus="this.blur();"></a></article>
            
			<article id="gGST_Wrap">
				<div class="gGST_BoxOn" id="gstYourTime">
					<span>Game Server Status</span><time id="tLocalTime"><?php echo $fn_serverStatus_GS; ?> <!-- Game Server Status Output --></time>
					<span>Players Online</span><time id="tServerTime"><?php echo $mvc_Users_online; ?> <!-- Users Online --></time>
				</div>
			</article>
		</div>
	</div>
</div>
<div id="siteVisualBottom" style="margin-bottom:0">
	<div class="visualBottom"></div>
</div>
<footer style="background-color:#fff;line-height:40px;height:40px;text-align:center;">
	<center><?php echo $mvcore['ads_spt_728x90']; ?> <!-- Leaderboard ( 728 x 90 ) --></center>
	Copyright &copy; 2015-<?php echo date("Y"); ?> <a href="http://tuservermu.com.ve/">MVCore Website <?php echo $MVCoreVersion;?></a>
</footer>
</body>
</html>
