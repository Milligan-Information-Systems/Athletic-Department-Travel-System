<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en"><meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
<link rel="stylesheet" href="styles.css">
<title>Milligan Travel Database</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="jquery-tabledit-1.2.3/jquery.tabledit.min.js"></script>
<div class="header">
	<div class="mobilenav">
	  <div id="menuToggle">
		<input type="checkbox" />
		<span></span>
		<span></span>
		<span></span>
		<ul id="menu">
			<a href="index.php" class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'index.php'){echo 'active'; }else { echo ''; } ?>"><li>Home</li></a>
			
			<?php if (!isset($_SESSION['userId'])) {
				if (basename($_SERVER['SCRIPT_NAME']) == 'signup.php') {
					echo '<a href="signup.php" class="active"><li>Signup</li></a>';
				}
				else {
					echo '<a href="signup.php" class=""><li>Signup</li></a>';
				}
			}
			?>
			<?php if (isset($_SESSION['userId'])) {
				if (basename($_SERVER['SCRIPT_NAME']) == 'change-password.php') {
					echo '<a href="change-password.php" class="active"><li>Change Password</li></a>';
				} else {
				echo '<a href="change-password.php" class=""><li>Change Password</li></a>';
				}
			} 
			?>
			<?php if (isset($_SESSION['userId'])) {
				echo '<form action="includes/logout.inc.php" method="post"><button type="submit" name="logout-submit">Logout</button></form>';
			} else {
				echo '<a href="index.php"><li>Login</li></a>';
			}
			?>
		</ul>
	    </div>
	  	<div class="logo">
			<a href="index.php"><img id="mobilelogo" src="images/logo.png"></a>
	    </div>
	</div>
	<?php if (isset($_SESSION['userId'])) {
		require 'desktopnav.php';
	}?>
</div>
<div class="spacer"></div>
<?php if (isset($_SESSION['userId'])) {
	echo '
<div id="siteheader" style="text-align: center; color: white; z-index: 5; font-family: Times New Roman !important; font-size: 50px !important; margin-bottom: 25px;">
	Milligan Athletics Travel Database
</div>';
} ?>
<body style="background-color: gray !important;">



















