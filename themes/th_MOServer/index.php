<!DOCTYPE html>  
<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="Keywords" content="Massively multiplayer online games, mmo, rpg online games, games, game, free online games, Webzen, new slogan, next generation, MVCore, Mu Online, Mu, Game, Online, Server, Play, For, Free, Season, s2, s3, s4, s5, s6, s7, s8, s9, blade master, grand master, hight elf, dimension master, duel master, lord emperor, fist master, massive portal promotion, Jump Start with fully-Geared High leveled characters, Skip the low, Jump to hight,Top-notch, high level avatars">
		<meta name="description" content="MuOnline Private Server Website" />
		<title><?php echo $mvcore['title'];?></title> <!-- Can edit from AdminCP -->
		<link rel="shortcut icon" href="system/engine_images/favi.png" /> <!-- MVCore ICO -->
		<script src="//code.jquery.com/jquery-1.10.2.js"></script> <!-- JS-->
		<?php include('system/engine_css/mvcore_style.php'); ?> <!-- Engine CSS -->
		<link rel="stylesheet" href="/themes/<?php echo $mvcore['theme_dir'];?>/css/style.css" type="text/css" media="screen" charset="utf-8">
	</head>
<body>
<?php include('system/theme_inc/inc.item_viewer.php'); ?> <!-- Item View JS -->
	<div class="wrapper">

		<div class="bg">
			<header class="header">
				<div class="langs" style="color:#777a16;">
					Language: <a href="-id-langc-id-eng.html"><font color="#fff" size="2">ENGLISH</font></a> <!-- Latvian Lang -->
				</div>
			</header>
			<div class="middle">
				<div class="container">
					<main class="content">
						<ul class="nav">
							<?php if($mvcore['News']=='on') { ?><li><a href="-id-News.html"><? echo''.theme_link_news.''; ?></a></li><li class="mdiv"></li><?php } ?>
							<?php if($mvcore['Downloads']=='on') { ?><li><a href="-id-Downloads.html"><? echo''.theme_link_downloads.''; ?></a></li><li class="mdiv"></li><?php } ?>
							<?php if($mvcore['Rankings']=='on') { ?><li><a href="-id-Rankings.html"><? echo''.theme_link_rankings.''; ?></a></li><li class="mdiv"></li><?php } ?>
							<?php if($mvcore['Statistics']=='on') { ?><li><a href="-id-Statistics.html"><? echo''.theme_link_statistics.''; ?></a></li><li class="mdiv"></li><?php } ?>
							<?php if($mvcore['Gallery']=='on') { ?><li><a href="-id-Gallery.html"><? echo''.theme_link_gallery.''; ?></a></li><li class="mdiv"></li><?php } ?>
							<?php if($mvcore['Market']=='on') { ?><li><a href="-id-Market.html"><? echo''.theme_link_market.''; ?></a></li><li class="mdiv"></li><?php } ?>
							<?php if($mvcore['Webshop']=='on') { ?><li><a href="-id-Webshop.html"><? echo''.theme_link_webshop.''; ?></a></li><li class="mdiv"></li><?php } ?>
							<?php if($mvcore['Forum']=='on') { ?><li><a target="blank" href="<?php echo $mvcore['forurl']; ?>"><? echo''.theme_link_forum.''; ?></a></li><li class="mdiv"></li><?php } ?>
						</ul>
						<div id="slides">
							<div class="slides_container">
								<div class="slide">
									<?php include('system/theme_inc/inc.slider.php'); ?> <!-- Slider Image Output -->
								</div>
							</div>
						</div>
						
						<div id="pagetitle"><?php include('system/engine_ptext.php'); ?> <!-- Used To Output Page Names --></div>
						<div id="sub_page_content">
							<div id="sub_page_content">
								<center><?php echo $mvcore['ads_spt_468x60']; ?> <!-- Banner ( 468 x 60 ) --></center>
								<?php include('system/engine_pages.php'); ?> <!-- Used To Output Page Content -->
							</div>
						</div>
					</main>
				</div>

				<aside class="right-sidebar">
					<div class="cabinet">
						<br>
						<a href="-id-Register.html"><p class="reg animate"><div class="register_how"></div></p></a>
						<div class="form">
							<div class="left">
								<?php if($_SESSION['user_login'] != 'ok') { ?>
									<form action="" method="post">								
										<input type="text" class="mvcore-input-main" style="width:210px !important;color:white;" name="usern" value="" placeholder="Username">
											<div style="padding-top: 5px;"></div>
										<input maxlength="10" class="mvcore-input-main" style="width:210px !important;color:white;" value="" name="passn" type="password" placeholder="Password">
											<div style="padding-top: 5px;"></div>
										<input type="submit" class="mvcore-button-style" name="loginacc" value="Enter Account">
									</form>
									<br>
									<a href="#" onClick="sub_page('MuOnlineServer.Com-Lostpassword.html');"><font size="2">Forgot Password?</font></a>
								<?php } else { ?>
									<h4 style="width: 260px !important; ">Welcome, <?php echo $_SESSION['username']; ?> <!-- Logged In Username --></h4><br>
									<div class="bbcwhftl" style="color:#fff;"><img src="/themes/<?php echo $mvcore['theme_dir'];?>/img/cred.png" style="width:15px"> <?php echo $mvcore['money_name1']; ?>: <b><?php echo $mvc_Money_credits; ?></b></div>
									<div class="bbcwhftl" style="color:#fff;"><img src="/themes/<?php echo $mvcore['theme_dir'];?>/img/gold.png" style="width:15px"> <?php echo $mvcore['money_name2']; ?>: <b><?php echo $mvc_Money_goldcredits; ?></b></div>
									<div class="bbcwhftl" style="color:#fff;"><img src="/themes/<?php echo $mvcore['theme_dir'];?>/img/wcoins.png" style="width:15px"> wCoins: <b><?php echo $mvc_Money_wcoins; ?></b></div>
									<div class="bbcwhftl" style="color:#fff;"><img src="/themes/<?php echo $mvcore['theme_dir'];?>/img/zen.png" style="width:15px"> Vault Zen: <b><?php echo $mvc_Money_VaultZen; ?></b></div>
	
									<!-- =-=-= Main Pages For Users ( Contains PHP To Hide Link If Page Disabled In AdminCP ) =-=-= -->
									<?php if($mvcore['Account_Settings']=='on') { ?><div class="bbcwhftl"><a href="-id-Account_Settings.html"><? echo''.theme_link_accountsett.''; ?></a></div><?php } ?>
									<?php if($mvcore['Payment_System']=='on') { ?><div class="bbcwhftl"><a href="-id-Payment_System.html" style="color:red;"><? echo''.theme_link_paymentsys.''; ?></a></div><?php } ?>
									<div class="bbcwhftl"><a href="-id-Game_Panel.html">Game Panel</a></div>
									<?php if($mvcore['Vote']=='on') { ?><div class="bbcwhftl"><a href="-id-Vote.html"><? echo''.theme_link_freevote.''; ?></a></div><?php } ?>


									<!-- =-=-= Extra Pages For Users ( Contains PHP To Hide Link If Page Disabled In AdminCP ) =-=-= -->
									<?php if($mvcore['Hide_Information']=='on') { ?><div class="bbcwhftl"><a href="-id-Hide_Information.html"><? echo''.theme_link_hideiteminfo.''; ?></a></div><?php } ?>
									<?php if($mvcore['Friend_System']=='on') { ?><div class="bbcwhftl"><a href="-id-Friend_System.html"><? echo''.theme_link_friendsys.''; ?></a></div><?php } ?>
									<?php if($mvcore['Exchange_System']=='on') { ?><div class="bbcwhftl"><a href="-id-Exchange_System.html"><? echo''.theme_link_exchangesys.''; ?></a></div><?php } ?>
									<?php if($mvcore['GM_Buy']=='on') { ?><div class="bbcwhftl"><a href="-id-GM_Buy.html"><? echo''.theme_link_gmbuy.''; ?></a></div><?php } ?>
									<?php if($mvcore['Vip_Buy']=='on') { ?><div class="bbcwhftl"><a href="-id-Vip_Buy.html"><? echo''.theme_link_vipbuy.''; ?></a></div><?php } ?>
									<?php if($mvcore['Lottery_System']=='on') { ?><div class="bbcwhftl"><a href="-id-Lottery_System.html"><? echo''.theme_link_lotterysys.''; ?></a></div><?php } ?>
									<?php if($mvcore['Warehouse']=='on') { ?><div class="bbcwhftl"><a href="-id-Warehouse.html"><? echo''.theme_link_warehouse.''; ?></a></div><?php } ?>
									<?php if($mvcore['Castle_Siege_Register']=='on') { ?><div class="bbcwhftl"><a href="-id-Castle_Siege_Register.html"><? echo''.theme_link_caslesiegereg.''; ?></a></div><?php } ?>
									<?php if($mvcore['Item_Upgrade_System']=='on') { ?><div class="bbcwhftl"><a href="-id-Item_Upgrade_System.html"><? echo''.theme_link_itemupgradesys.''; ?></a></div><?php } ?>
									<?php if($mvcore['anc_mob_onoff']=='on') { ?><div class="bbcwhftl"><a href="-id-Ancient_Exchange.html"><? echo''.theme_link_ancexc.''; ?></a></div><?php } ?>
									<?php if($mvcore['My_Sponsor']=='on') { ?><div class="bbcwhftl"><a href="-id-My_Sponsor.html"><? echo''.theme_link_mysponsors.''; ?></a></div><?php } ?>
									<?php if($mvcore['Scramble']=='on') { ?><div class="bbcwhftl"><a href="-id-Scramble_Event.html"><? echo''.theme_link_scrambleevent.''; ?></a></div><?php } ?>


									<!-- =-=-= Admin/GM Panel Buttons ( Secured With PHP ) =-=-= -->
									<?php if($_SESSION['admin_panel']=='ok') { ?><div class="bbcwhftl"><a target="_blank" href="-id-admincp-id-Dashboard.html">Admin Panel</a></div><?php } ?>
									<?php if($_SESSION['gm_panel']=='ok') { ?><div class="bbcwhftl"><a href="-id-gm_cp-id-GM_Panel.html"><? echo''.theme_link_gmpanel.''; ?></a></div><?php } ?>


									<!-- =-=-= LogOut Link ( Logout User And Sends To News Page. ) =-=-= -->
									<div class="bbcwhftl"><a href="-id-exitacc.html"><? echo''.theme_link_logout.''; ?></a></div><!-- Logout -->										

								<?php } ?>
								<div style="padding-top: 5px;"></div>
							</div>										
						</div>
					</div>
					
					<div class="status">																																																																																																																																																								
						<div class="btitle"><img src="/themes/<?php echo $mvcore['theme_dir'];?>/img/t_stat.png" /></div>
						<div style="color:#fff;padding-left:10px;padding-right:10px;"><?php include('system/theme_inc/inc.statistic.php'); ?> <!-- Statistics --></div>
					</div>
					
					<div class="market">
						<div class="onlyus">
							<div class="onlypop">
								<br /><br />
								<a href="-id-Webshop.html"><img src="/themes/<?php echo $mvcore['theme_dir'];?>/img/go_shop.png"></a>
							</div> 
							<a href="-id-Webshop.html"><img src="/themes/<?php echo $mvcore['theme_dir'];?>/img/only_us_small.png"></a>
						</div>
					</div>
					
					<div class="video"></div>
					
					<div class="tabs">
						<ul class="tabmenu">
							<li class="active li1"><a href="#" rel="tabvk"><h4>TOP PLAYERS</h4></a></li>
							<li></li>
						</ul>
						<div style="color:#fff;padding-left:25px;padding-right:10px;"><?php include('system/theme_inc/inc.top_characters.php'); ?> <!-- Top 10 Characters --></div>
					</div>
					<div class="tabs">
						<ul class="tabmenu">
							<li></li>
							<li class="active li1"><a href="#" rel="tabakcia"><h4>TOP GUILDS</h4></a></li>
						</ul>
						<div style="color:#fff;padding-left:25px;padding-right:10px;"><?php include('system/theme_inc/inc.top_guilds.php'); ?> <!-- Top 10 Guilds --></div>
					</div>
					<center><?php echo $mvcore['ads_spt_300x250']; ?> <!-- Medium Rectangle ( 300 x 250 ) --></center>
				</aside>

			</div>
		</div>

		<footer class="footer">
			<center><?php echo $mvcore['ads_spt_728x90']; ?> <!-- Leaderboard ( 728 x 90 ) --></center>
			<div class="footmenu">
				<ul class="tmenu">
					<li class="ico_start"><h4>HOW TO START?</h4>
						<ul class="tsmenu">
							<li>&gt; <a href="-id-Downloads.html">Download Game Client</a></li>
							<li>&gt; <a href="-id-Register.html">Register</a></li>
						</ul>
					</li>
					<li class="ico_info"><h4>Information</h4>
						<ul class="tsmenu">
							<li>&gt; <a href="-id-Statistics.html">Server Statistic</a></li>
							<li>&gt; <a href="-id-Rules.html">Rules</a></li>
						</ul>
					</li>
				</ul>        
			</div>
			<div class="copy">
				Copyright &copy; 2015-<?php echo date("Y"); ?> <a href="http://tuservermu.com.ve/">MVCore Website <?php echo $MVCoreVersion;?></a>
			</div>
		</footer>
		
	</div>
</body>
</html>