<!DOCTYPE HTML>
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
	<link rel="stylesheet" href="/themes/<?php echo $mvcore['theme_dir'];?>/css/css.css" type="text/css" media="screen" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/themes/<?php echo $mvcore['theme_dir'];?>/css/engine.css" media="screen">
	<script type="text/javascript" src="/themes/<?php echo $mvcore['theme_dir'];?>/js/core.js"></script>
	<script type="text/javascript" src="/themes/<?php echo $mvcore['theme_dir'];?>/js/event.js"></script>
	<script type="text/javascript" src="/themes/<?php echo $mvcore['theme_dir'];?>/js/jquery.jcarousel.pack.js"></script>
</head>
<body>
<?php include('system/theme_inc/inc.item_viewer.php'); ?> <!-- Item View JS -->
	<div id="body_top">
		<div id="top_panel">
			<div id="tp_wrapper">
				<div id="tp_menu">
					<a href="-id-Statistics.html">Information</a>
					<span></span>
					<a target="blank" href="<?php echo $mvcore['forurl']; ?>">Support</a>
					<span></span>
					<a href="-id-Rules.html">Rules</a>
				</div>
				<div id="tp_soc">
					<a href="<?php echo $mvcore['yt_s_url']; ?>" target="_blank"><img src="/themes/<?php echo $mvcore['theme_dir'];?>/images/youtube_icon.png"></a>
					<a href="<?php echo $mvcore['fb_s_url']; ?>" target="_blank"><img src="/themes/<?php echo $mvcore['theme_dir'];?>/images/facebook_icon.png"></a>
					<a href="<?php echo $mvcore['tw_s_url']; ?>" target="_blank"><img src="/themes/<?php echo $mvcore['theme_dir'];?>/images/twitter_icon.png"></a>
				</div>
			</div>
		</div>
		<div id="wrapper">
			<div id="header">
				<a href="/"></a>
			</div>
			<div id="menu">
				<?php if($mvcore['News']=='on') { ?><a href="-id-News.html"><?php echo''.theme_link_news.''; ?></a><span></span><?php } ?>
				<?php if($mvcore['Register']=='on' && $_SESSION['user_login'] != 'ok') { ?><a href="-id-Register.html"><?php echo''.theme_link_register.''; ?></a><span></span><?php } ?>
				<?php if($mvcore['Downloads']=='on') { ?><a href="-id-Downloads.html"><?php echo''.theme_link_downloads.''; ?></a><span></span><?php } ?>
				<?php if($mvcore['Rankings']=='on') { ?><a href="-id-Rankings.html"><?php echo''.theme_link_rankings.''; ?></a><span></span><?php } ?>
				<?php if($mvcore['Statistics']=='on') { ?><a href="-id-Statistics.html"><?php echo''.theme_link_statistics.''; ?></a><span></span><?php } ?>
				<?php if($mvcore['Market']=='on') { ?><a href="-id-Market.html"><?php echo''.theme_link_market.''; ?></a><span></span><?php } ?>
				<?php if($mvcore['Webshop']=='on') { ?><a href="-id-Webshop.html"><?php echo''.theme_link_webshop.''; ?></a><span></span><?php } ?>
				<?php if($mvcore['Forum']=='on') { ?><a target="blank" href="<?php echo $mvcore['forurl']; ?>"><?php echo''.theme_link_forum.''; ?></a><?php } ?>
			</div>
			<div id="content_top">
				<div id="content_bottom">
				<div id="left">
					<div id="status_block">
						<div class="l_title" id="status_title">
							Status
						</div>
						<div class="l_block">
				<div class="server">
					<div class="s_icon">
						<?php if($fn_serverStatus_GS_true_false == '1') { ?><img src="/themes/<?php echo $mvcore['theme_dir'];?>/images/online.jpg" alt=""><?php } else { ?><img src="/themes/<?php echo $mvcore['theme_dir'];?>/images/offline.jpg" alt=""><?php } ?>
					</div>
					<div class="s_name">
						<a href="index.php?page=stats&serv=server1">Game Server</a>
					</div>
					<div class="s_online">
						<span style="color: #ff2c30"><?php echo $mvc_Users_online; ?></span>
					</div>
				</div>
				<hr>
				<div class="server">
					<div class="event_title" style="float: left; padding-left: 5px; font-size: 12px;">
						Total Accounts
					</div>
					<div class="event_title" style="font-size: 12px;">
						<span style="color: #59d360"><?php echo $mvc_total_Accounts; ?></span>
					</div>
				</div>
				<div class="server">
					<div class="event_title" style="float: left; padding-left: 5px; font-size: 12px;">
						Total Characters
					</div>
					<div class="event_title" style="font-size: 12px;">
						<span style="color: #59d360"><?php echo $mvc_total_Characters; ?></span>
					</div>
				</div>

						</div>
					</div>
					<div id="last_topics_block">
						<div class="l_title" id="last_topics_title">
							Top Characters
						</div>
						<div class="l_block">
							<div class="theme">
								<?php include('system/theme_inc/inc.top_characters.php'); ?> <!-- Top 10 Characters -->
							</div>
						</div>
					</div>
					<div id="last_topics_block">
						<div class="l_title" id="last_topics_title">
							Top Guilds
						</div>
						<div class="l_block">
							<div class="theme">
								<?php include('system/theme_inc/inc.top_guilds.php'); ?> <!-- Top 10 Guilds -->
							</div>
						</div>
					</div>
				</div>
				<div id="right">

				<?php if($_SESSION['user_login'] != 'ok') { ?>

					<div class="r_title" id="login_title">
						Login
					</div>
					<div class="r_block">
						<form name="loginForm" action="" method="POST">
						<input type="hidden" id="serv" name="loginacc" value="submit">
						<table id="login_form" align="center" width="137">
						<tr>
						<td align="center"><input id="input_login" maxlength="11" type="text" name="usern" onfocus="if(this.value=='Login') this.value=''" onblur="if(this.value=='') this.value='Login'"></td>
						</tr>
						<tr>
						<td align="center"><input id="input_pass" maxlength="20" type="password" name="passn" onfocus="if(this.value=='Password') this.value=''" onblur="if(this.value=='') this.value='Password'"></td>
						</tr>
						</table>
							<div align="center">
								<a id="login_button" style="cursor: pointer;" onclick="document.loginForm.submit();">Login</a>
							</div>
							<div id="login_links">
								<a href="-id-Lost_Password.html">Remember password</a><br>
								<a href="-id-Register.html">Registration</a>
							</div>
						</form>
					</div>
					
				<?php } else { ?>
					<div class="r_title" id="login_title">
						Account Panel
					</div>
					<div class="r_block">
						<div id="my_account">
							<div id="account_info">
								<div>Account:<span><?php echo $_SESSION['username']; ?></span></div>
								<div><?php echo $mvcore['money_name1']; ?>:<span><?php echo $mvc_Money_credits; ?></span></div>
								<div><?php echo $mvcore['money_name2']; ?>:<span><label id="bonuses"><?php echo $mvc_Money_goldcredits; ?></label></span></div>
								<div>wCoins:<span><?php echo $mvc_Money_wcoins; ?></span></div>
								<div>Zen:<span><?php echo $mvc_Money_VaultZen; ?></span></div>
							</div>
							<hr></hr>
							<div id="account_menu">
								<!-- =-=-= Main Pages For Users ( Contains PHP To Hide Link If Page Disabled In AdminCP ) =-=-= -->
								<?php if($mvcore['Account_Settings']=='on') { ?><a href="-id-Account_Settings.html"><?php echo''.theme_link_accountsett.''; ?></a><br><?php } ?>
								<?php if($mvcore['Payment_System']=='on') { ?><a href="-id-Payment_System.html" style="color:red;"><?php echo''.theme_link_paymentsys.''; ?></a><br><?php } ?>
								<a href="-id-Game_Panel.html">Game Panel</a><br>
								<?php if($mvcore['Vote']=='on') { ?><a href="-id-Vote.html"><?php echo''.theme_link_freevote.''; ?></a><br><?php } ?>
				<br>

								<!-- =-=-= Extra Pages For Users ( Contains PHP To Hide Link If Page Disabled In AdminCP ) =-=-= -->
								<?php if($mvcore['Hide_Information']=='on') { ?><a href="-id-Hide_Information.html"><?php echo''.theme_link_hideiteminfo.''; ?></a><br><?php } ?>
								<?php if($mvcore['Friend_System']=='on') { ?><a href="-id-Friend_System.html"><?php echo''.theme_link_friendsys.''; ?></a><br><?php } ?>
								<?php if($mvcore['Exchange_System']=='on') { ?><a href="-id-Exchange_System.html"><?php echo''.theme_link_exchangesys.''; ?></a><br><?php } ?>
								<?php if($mvcore['GM_Buy']=='on') { ?><a href="-id-GM_Buy.html"><?php echo''.theme_link_gmbuy.''; ?></a><br><?php } ?>
								<?php if($mvcore['Vip_Buy']=='on') { ?><a href="-id-Vip_Buy.html"><?php echo''.theme_link_vipbuy.''; ?></a><br><?php } ?>
								<?php if($mvcore['Lottery_System']=='on') { ?><a href="-id-Lottery_System.html"><?php echo''.theme_link_lotterysys.''; ?></a><br><?php } ?>
								<?php if($mvcore['Warehouse']=='on') { ?><a href="-id-Warehouse.html"><?php echo''.theme_link_warehouse.''; ?></a><br><?php } ?>
								<?php if($mvcore['Castle_Siege_Register']=='on') { ?><a href="-id-Castle_Siege_Register.html"><?php echo''.theme_link_caslesiegereg.''; ?></a><br><?php } ?>
								<?php if($mvcore['Item_Upgrade_System']=='on') { ?><a href="-id-Item_Upgrade_System.html"><?php echo''.theme_link_itemupgradesys.''; ?></a><br><?php } ?>
								<?php if($mvcore['anc_mob_onoff']=='on') { ?><a href="-id-Ancient_Exchange.html"><?php echo''.theme_link_ancexc.''; ?></a><br><?php } ?>
								<?php if($mvcore['My_Sponsor']=='on') { ?><a href="-id-My_Sponsor.html"><?php echo''.theme_link_mysponsors.''; ?></a><br><?php } ?>
								<?php if($mvcore['Scramble']=='on') { ?><a href="-id-Scramble_Event.html"><?php echo''.theme_link_scrambleevent.''; ?></a><br><?php } ?>
								<br>

								<!-- =-=-= Admin/GM Panel Buttons ( Secured With PHP ) =-=-= -->
								<?php if($_SESSION['admin_panel']=='ok') { ?><a target="_blank" href="-id-admincp-id-Dashboard.html">Admin Panel</a><br><?php } ?>
								<?php if($_SESSION['gm_panel']=='ok') { ?><a href="-id-gm_cp-id-GM_Panel.html"><?php echo''.theme_link_gmpanel.''; ?></a><br><?php } ?>

							</div>
							<div align="center"><a id="login_button" href="-id-exitacc.html">Logout</a><br></div>
						</div>
					</div>
				<?php } ?>
					
					<div class="r_title">
						Files
					</div>
					<div class="r_block">
						<div class="files_subtitle">
							Files needed to play on our server
						</div>
						<div id="files_button" align="center">
							<a href="-id-Downloads.html"></a>
						</div>
						<div class="more_link">
							<a href="-id-Downloads.html">Download Full Game Client</a>
						</div>
					</div>
					<div class="r_title">
						Items market
					</div>
					<div class="r_block"><div class="files_subtitle">Last items added on items market</div><div id="market_items">
					<div id="over_sh">
						<?php include('system/theme_inc/inc.last_market_items.php'); ?> <!-- Market Latest Items -->
					</div>
				</div>
				<div class="more_link">
					<a href="-id-Market.html">Go to items market</a>
				</div>

					</div>
				</div>

				<div id="center">
					<div id="videos_block">
						<div class="c_title">Videos<a href="https://www.youtube.com/results?search_query=MuOnline">More videos of MuOnline</a></div>
						<div class="c_block">
								<div class="video_item">
									<div class="video_img">
										<a href="https://www.youtube.com/embed/SoexKfYDFBY">
											<div class="video_border"></div>
											<iframe width="151" height="105" src="https://www.youtube.com/embed/SoexKfYDFBY" frameborder="0"></iframe>
										</a>
										
									</div>
								</div>
								<div class="video_item">
									<div class="video_img">
										<a href="https://www.youtube.com/embed/9sxoIJg65pE">
											<div class="video_border"></div>
											<iframe width="151" height="105" src="https://www.youtube.com/embed/9sxoIJg65pE" frameborder="0"></iframe>
										</a>
									</div>
								</div>
								<div class="video_item">
									<div class="video_img">
										<a href="https://www.youtube.com/embed/5EvMRhw54Pc">
											<div class="video_border"></div>
											<iframe width="151" height="105" src="https://www.youtube.com/embed/5EvMRhw54Pc" frameborder="0"></iframe>
										</a>
									</div>
								</div>
						</div>
					</div>	
					<div id="news_block">
							<div class="c_title">
								<a href="-id-Game_Panel.html">Game Panel</a><?php include('system/engine_ptext.php'); ?> <!-- Used To Output Page Names -->
							</div>
						<div class="c_block">
							<?php include('system/engine_pages.php'); ?> <!-- Used To Output Page Content -->
						</div>
					</div>
				</div>
			</div>
			<div id="footer">
				<div id="copyright">
					Copyright &copy; 2015-<?php echo date("Y"); ?> <a href="http://tuservermu.com.ve/">MVCore Website <?php echo $MVCoreVersion;?></a>
				</div>
				<div id="footer_text"></div>
			</div>
		</div>
	</div>
</body>
</html>