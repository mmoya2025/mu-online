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
	<!-- Theme Original CSS, JS Below -->
    <link type="text/css" rel="stylesheet" href="/themes/<?php echo $mvcore['theme_dir'];?>/css/muGame.css" />
</head>
<?php unset ($_COOKIE['user_login']); ?>
<body>
<?php include('system/theme_inc/inc.item_viewer.php'); ?> <!-- Item View JS -->
<div id="siteVisualWrap" style="margin-bottom:50px;">
	<div id="siteVisualConts">
		<div class="G_ContsWrap">
			<div class="visualSpace"></div>

			<nav id="GameNavi">
				<ul id="GameMenuSkip">
					<?php if($mvcore['News']=='on') { ?><li><a class="depth01" href="-id-News.html"><span class="onLeft"></span><span class="onCent"><?php echo''.theme_link_news.''; ?></span><span class="onRight"></span></a></li><?php } ?>
					<?php if($mvcore['Register']=='on' && $_SESSION['user_login'] != 'ok') { ?><li><a class="depth01" href="-id-Register.html"><span class="onLeft"></span><span class="onCent"><?php echo''.theme_link_register.''; ?></span><span class="onRight"></span></a></li><?php } ?>
					<?php if($mvcore['Downloads']=='on') { ?><li><a class="depth01" href="-id-Downloads.html"><span class="onLeft"></span><span class="onCent"><?php echo''.theme_link_downloads.''; ?></span><span class="onRight"></span></a></li><?php } ?>
					<?php if($mvcore['Rankings']=='on') { ?><li><a class="depth01" href="-id-Rankings.html"><span class="onLeft"></span><span class="onCent"><?php echo''.theme_link_rankings.''; ?></span><span class="onRight"></span></a></li><?php } ?>
					<?php if($mvcore['Statistics']=='on') { ?><li><a class="depth01" href="-id-Statistics.html"><span class="onLeft"></span><span class="onCent"><?php echo''.theme_link_statistics.''; ?></span><span class="onRight"></span></a></li><?php } ?>
					<?php if($mvcore['Gallery']=='on') { ?><li><a class="depth01" href="-id-Gallery.html"><span class="onLeft"></span><span class="onCent"><?php echo''.theme_link_gallery.''; ?></span><span class="onRight"></span></a></li><?php } ?>
					<?php if($mvcore['Market']=='on') { ?><li><a class="depth01" href="-id-Market.html"><span class="onLeft"></span><span class="onCent"><?php echo''.theme_link_market.''; ?></span><span class="onRight"></span></a></li><?php } ?>
					<?php if($mvcore['Webshop']=='on') { ?><li><a class="depth01" href="-id-Webshop.html"><span class="onLeft"></span><span class="onCent"><?php echo''.theme_link_webshop.''; ?></span><span class="onRight"></span></a></li><?php } ?>
					<?php if($mvcore['Forum']=='on') { ?><li><a class="depth01" target="blank" href="<?php echo $mvcore['forurl']; ?>"><span class="onLeft"></span><span class="onCent"><?php echo''.theme_link_forum.''; ?></span><span class="onRight"></span></a></li><?php } ?>
				</ul>
			</nav>
			<div id="contentStart">
				<section id="gContsBodyWrap"><ul class="location"><li><?php include('system/engine_ptext.php'); ?></li></ul>
					<section class="gContsViewWrap">
						<article class="rankingWrap">							
							<?php include('system/engine_pages.php'); ?>
						</article>
					</section>
					<section class="gContsInfoWrap">
						<div class="gContsInfoBg">
							<?php if($_SESSION['user_login'] != 'ok') { ?>
								<h3 class="title" id="h1Title">Account Login</h3>
								<div class="menuSubWrap">
									<form action="" method="POST">
										<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0">
											<tr align="center">
												<td><br><input type="text" name="usern" class="mvcore-input-main" value="" placeholder="Username" style="width:200px !important;"></td>
											</tr>
											<tr align="center">
												<td><input type="password" name="passn" class="mvcore-input-main" value="" placeholder="Password" style="width:200px !important;"></td>
											</tr>
											<tr align="center">
												<td>
													<button class="mvcore-button-style" name="loginacc" style="cursor:pointer;" type="submit"><?php echo main_p_user_login_login; ?></button>
													<?php if($mvcore['Register']=='on' && $_SESSION['user_login'] != 'ok') { ?><a class="mvcore-button-style" href="-id-Register.html"><?php echo''.theme_link_register.''; ?></a><?php } ?> <br><br>
													<?php if($mvcore['Lost_Password']=='on'  && $_SESSION['user_login'] != 'ok') { ?><a href="-id-Lost_Password.html"><?php echo''.theme_link_lpassword.''; ?></a><?php } ?>
												</td>
											</tr>
										</table>
									</form>
								</div>
							<?php } else { ?>
								<h3 class="title" id="h1Title"><?php echo $_SESSION['username'];?></h3>
								<div class="menuSubWrap">
									<menu>
										<li>
											<div class="depth03">
											<div class="panelby_ks">
												<div><img src="/themes/<?php echo $mvcore['theme_dir'];?>/img/cred.png"> <?php echo $mvcore['money_name1']; ?>: <b><?php echo $mvc_Money_credits; ?></b></div>
												<div><img src="/themes/<?php echo $mvcore['theme_dir'];?>/img/gold.png"> <?php echo $mvcore['money_name2']; ?>: <b><?php echo $mvc_Money_goldcredits; ?></b></div>
												<div><img src="/themes/<?php echo $mvcore['theme_dir'];?>/img/wcoins.png"> wCoins: <b><?php echo $mvc_Money_wcoins; ?></b></div>
												<div><img src="/themes/<?php echo $mvcore['theme_dir'];?>/img/zen.png"> Vault Zen: <b><?php echo $mvc_Money_VaultZen; ?></b></div>
												<br>
												</div>
												<!-- =-=-= Main Pages For Users ( Contains PHP To Hide Link If Page Disabled In AdminCP ) =-=-= -->
												<?php if($mvcore['Account_Settings']=='on') { ?><a href="-id-Account_Settings.html"><?php echo''.theme_link_accountsett.''; ?></a><?php } ?>
												<?php if($mvcore['Payment_System']=='on') { ?><a href="-id-Payment_System.html" style="color:red;"><?php echo''.theme_link_paymentsys.''; ?></a><?php } ?>
												<a href="-id-Game_Panel.html">Game Panel</a>
												<?php if($mvcore['Vote']=='on') { ?><a href="-id-Vote.html"><?php echo''.theme_link_freevote.''; ?></a><?php } ?>


												<!-- =-=-= Extra Pages For Users ( Contains PHP To Hide Link If Page Disabled In AdminCP ) =-=-= -->
												<?php if($mvcore['Hide_Information']=='on') { ?><a href="-id-Hide_Information.html"><?php echo''.theme_link_hideiteminfo.''; ?></a><?php } ?>
												<?php if($mvcore['Friend_System']=='on') { ?><a href="-id-Friend_System.html"><?php echo''.theme_link_friendsys.''; ?></a><?php } ?>
												<?php if($mvcore['Exchange_System']=='on') { ?><a href="-id-Exchange_System.html"><?php echo''.theme_link_exchangesys.''; ?></a><?php } ?>
												<?php if($mvcore['GM_Buy']=='on') { ?><a href="-id-GM_Buy.html"><?php echo''.theme_link_gmbuy.''; ?></a><?php } ?>
												<?php if($mvcore['Vip_Buy']=='on') { ?><a href="-id-Vip_Buy.html"><?php echo''.theme_link_vipbuy.''; ?></a><?php } ?>
												<?php if($mvcore['Lottery_System']=='on') { ?><a href="-id-Lottery_System.html"><?php echo''.theme_link_lotterysys.''; ?></a><?php } ?>
												<?php if($mvcore['Warehouse']=='on') { ?><a href="-id-Warehouse.html"><?php echo''.theme_link_warehouse.''; ?></a><?php } ?>
												<?php if($mvcore['Castle_Siege_Register']=='on') { ?><a href="-id-Castle_Siege_Register.html"><?php echo''.theme_link_caslesiegereg.''; ?></a><?php } ?>
												<?php if($mvcore['Item_Upgrade_System']=='on') { ?><a href="-id-Item_Upgrade_System.html"><?php echo''.theme_link_itemupgradesys.''; ?></a><?php } ?>
												<?php if($mvcore['anc_mob_onoff']=='on') { ?><a href="-id-Ancient_Exchange.html"><?php echo''.theme_link_ancexc.''; ?></a><?php } ?>
												<?php if($mvcore['My_Sponsor']=='on') { ?><a href="-id-My_Sponsor.html"><?php echo''.theme_link_mysponsors.''; ?></a><?php } ?>
												<?php if($mvcore['Scramble']=='on') { ?><a href="-id-Scramble_Event.html"><?php echo''.theme_link_scrambleevent.''; ?></a><?php } ?>


												<!-- =-=-= Admin/GM Panel Buttons ( Secured With PHP ) =-=-= -->
												<?php if($_SESSION['admin_panel']=='ok') { ?><a target="_blank" href="-id-admincp-id-Dashboard.html">Admin Panel</a><?php } ?>
												<?php if($_SESSION['gm_panel']=='ok') { ?><a href="-id-gm_cp-id-GM_Panel.html"><?php echo''.theme_link_gmpanel.''; ?></a><?php } ?>


												<!-- =-=-= LogOut Link ( Logout User And Sends To News Page. ) =-=-= -->
												<a href="-id-exitacc.html"><?php echo''.theme_link_logout.''; ?></a> <!-- Logout -->
											</div>
										</li>
									</menu>
								</div>
							<?php } ?>
						<div class="space20"></div>
						<aside class="sideBannerCase">
							<ul class="rightbnr">
								<li>
									<h3>Market Latest</h3>
									<?php include('system/theme_inc/inc.last_market_items.php'); ?> <!-- Market Latest Items -->
								</li>
							</ul>
						</aside>
                        <aside class="sideBannerCase">
							<ul class="rightbnr">
								<li>
									<h3>Top Characters</h3>
									<?php include('system/theme_inc/inc.top_characters.php'); ?> <!-- Top 10 Characters -->
								</li>
							</ul>
						</aside>
						<aside class="sideBannerCase">
							<ul class="rightbnr">
								<li>
									<h3>Top Guilds</h3>
									<?php include('system/theme_inc/inc.top_guilds.php'); ?> <!-- Top 10 Guilds -->
								</li>
							</ul>
						</aside>
                        </div>
					</section>
				</section>
			</div>
			
			
            <article id="gStarter"><a rel="" href="-id-Downloads.html" title="DOWNLOAD" onfocus="this.blur();"></a></article>
			<article id="gGST_Wrap">
				<div class="gGST_BoxOn" id="gstYourTime">
					<span>Game Server</span><b><?php echo $fn_serverStatus_GS; ?></b>
				</div>
				<div class="gGST_BoxOff">
					<span>Server Time</span><font color="white"><?php include('system/theme_inc/inc.date.php'); ?></font>
				</div>
			</article>
		</div>
	</div>
</div>
<div align="center">Copyright &copy; 2015-<?php echo date("Y"); ?> <a href="http://tuservermu.com.ve/">MVCore Website <?php echo $MVCoreVersion;?></a><br><br></div>
</body>
</html>
