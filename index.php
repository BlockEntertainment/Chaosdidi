<? session_start(); ob_start();
	require("db_connect.php");
	require("inc/counter.inc.php");
?>

<body>
	<? require("inc/quicklogin.inc.php"); ?>
	
	<a href="index.php"><div class="banner"></div></a>
	
	<? require("inc/navibar.inc.php"); ?> <!-- NAVIBAR (LINKS) -->
	
	<? #require("inc/quicknewssite.inc.php"); ?> <!-- SONDERMELDUNGEN -->
	
	<?
		if(!$_GET['menu']){
				$title = "Startseite";
				require("inc/head.inc.php");
				if(isset($_SESSION["user"])){mysql_query("UPDATE *****_*.****_**** SET last_ip = '".$_SERVER['REMOTE_ADDR']."', last_act = '".date("d.m.Y H:i")."', last_act_time = '".time()."', current_page = 'Startseite' WHERE id = '".$_SESSION["user"]."'", $connect1);}
			echo "<div class='gen_main'>
					<div class='mainC'>";
				require("inc/main/main.inc.php");
				require("inc/main_right_comments.inc.php");
			echo "	</div>
				</div>";
		}
		
		if($_GET['menu'] == "playlist"){
				$title = "Playlist";
				require("inc/head.inc.php");
				if(isset($_SESSION["user"])){mysql_query("UPDATE *****_*.****_**** SET last_ip = '".$_SERVER['REMOTE_ADDR']."', last_act = '".date("d.m.Y H:i")."', last_act_time = '".time()."', current_page = 'Playlist' WHERE id = '".$_SESSION["user"]."'", $connect1);}
			echo "<div class='gen_main'>
					<div class='mainC'>";
				require("inc/main/playlist.inc.php");
				require("inc/main_right_comments.inc.php");
			echo "	</div>
				</div>";
		}
		
		if($_GET['menu'] == "folgen"){
				$title = "Folgen";
				require("inc/head.inc.php");
				if(isset($_SESSION["user"])){mysql_query("UPDATE *****_*.****_**** SET last_ip = '".$_SERVER['REMOTE_ADDR']."', last_act = '".date("d.m.Y H:i")."', last_act_time = '".time()."', current_page = 'Folgen' WHERE id = '".$_SESSION["user"]."'", $connect1);}
			echo "<div class='gen_main'>
					<div class='mainC'>";
				require("inc/main/broadcast.inc.php");
				require("inc/main_right_comments.inc.php");
			echo "	</div>
				</div>";
		}
		
		if($_GET['menu'] == "p_folgen"){
				$title = "Folgen";
				require("inc/head.inc.php");
				if(isset($_SESSION["user"])){mysql_query("UPDATE *****_*.****_**** SET last_ip = '".$_SERVER['REMOTE_ADDR']."', last_act = '".date("d.m.Y H:i")."', last_act_time = '".time()."', current_page = 'Folgen' WHERE id = '".$_SESSION["user"]."'", $connect1);}
			echo "<div class='gen_main'>
					<div class='mainC'>";
				require("inc/main/playlist_broadcast.inc.php");
				require("inc/main_right_comments.inc.php");
			echo "	</div>
				</div>";
		}
		
		if($_GET['menu'] == "chat"){
				$title = "Chat";
				require("inc/head.inc.php");
				if(isset($_SESSION["user"])){mysql_query("UPDATE *****_*.****_**** SET last_ip = '".$_SERVER['REMOTE_ADDR']."', last_act = '".date("d.m.Y H:i")."', last_act_time = '".time()."', current_page = 'Chat' WHERE id = '".$_SESSION["user"]."'", $connect1);}
			echo "<div class='gen_main'>
					<div class='mainC'>";
				require("inc/main/chat.inc.php");
			echo "	</div>
				</div>";
		}
		
		if($_GET['menu'] == "gameslist"){
				$title = "Gameslist";
				require("inc/head.inc.php");
				if(isset($_SESSION["user"])){mysql_query("UPDATE *****_*.****_**** SET last_ip = '".$_SERVER['REMOTE_ADDR']."', last_act = '".date("d.m.Y H:i")."', last_act_time = '".time()."', current_page = 'Gameslist' WHERE id = '".$_SESSION["user"]."'", $connect1);}
			echo "<div class='gen_main'>
					<div class='mainC'>";
				require("inc/main/gameslist.inc.php");
				require("inc/main_right_comments.inc.php");
			echo "	</div>
				</div>";
		}
		
		# UMFRAGEN
			require("inc/main/umfragen.inc.php");
		
		if($_GET['menu'] == "impressum"){
				$title = "Impressum";
				require("inc/head.inc.php");
				if(isset($_SESSION["user"])){mysql_query("UPDATE *****_*.****_**** SET last_ip = '".$_SERVER['REMOTE_ADDR']."', last_act = '".date("d.m.Y H:i")."', last_act_time = '".time()."', current_page = 'Impressum' WHERE id = '".$_SESSION["user"]."'", $connect1);}
			echo "<div class='gen_main'>
					<div class='mainC'>";
				require("inc/main/impressum.inc.php");
				require("inc/main_right_comments.inc.php");
			echo "	</div>
				</div>";
		}
	?>
	
	<? require("inc/footer.inc.php"); ?>
</body>
