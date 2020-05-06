<?php require "header.php"; ?>
<?php 
require 'includes/dbh.inc.php';
$baseballquery = "SELECT * FROM baseball";
$baseballresult = mysqli_query($conn, $baseballquery);
$mensbasketballquery = "SELECT * FROM mensbasketball";
$mensbasketballresult = mysqli_query($conn, $mensbasketballquery);
$menssoccerquery = "SELECT * FROM menssoccer";
$menssoccerresult = mysqli_query($conn, $menssoccerquery);
$mensvolleyballquery = "SELECT * FROM mensvolleyball";
$mensvolleyballresult = mysqli_query($conn, $mensvolleyballquery);
$crosscountryquery = "SELECT * FROM crosscountry";
$crosscountryresult = mysqli_query($conn, $crosscountryquery);
$cyclingquery = "SELECT * FROM cycling";
$cyclingresult = mysqli_query($conn, $cyclingquery);
$esportsquery = "SELECT * FROM esports";
$esportsresult = mysqli_query($conn, $esportsquery);
$golfquery = "SELECT * FROM golf";
$golfresult = mysqli_query($conn, $golfquery);
$swimmingquery = "SELECT * FROM swimming";
$swimmingresult = mysqli_query($conn, $swimmingquery);
$tennisquery = "SELECT * FROM tennis";
$tennisresult = mysqli_query($conn, $tennisquery);
$trackandfieldquery = "SELECT * FROM trackandfield";
$trackandfieldresult = mysqli_query($conn, $trackandfieldquery);
$triathlonquery = "SELECT * FROM triathlon";
$triathlonresult = mysqli_query($conn, $triathlonquery);
$womensbasketballquery = "SELECT * FROM womensbasketball";
$womensbasketballresult = mysqli_query($conn, $womensbasketballquery);
$cheerquery = "SELECT * FROM cheer";
$cheerresult = mysqli_query($conn, $cheerquery);
$dancequery = "SELECT * FROM dance";
$danceresult = mysqli_query($conn, $dancequery);
$womenssoccerquery = "SELECT * FROM womenssoccer";
$womenssoccerresult = mysqli_query($conn, $womenssoccerquery);
$softballquery = "SELECT * FROM softball";
$softballresult = mysqli_query($conn, $softballquery);
$volleyballquery = "SELECT * FROM volleyball";
$volleyballresult = mysqli_query($conn, $volleyballquery);

?>
<h1 style="text-align: center; font-size: 40px; margin-bottom: 25px;">Athlete Directory</h1>
<!-- NUMBER 1 -->
<table style="float: left; margin-left: 25%; margin-bottom: 0;">
	<tr>
		<th colspan="2">Baseball</th>
	</tr>
	<tr>
		<th>Athlete First Name</th>
		<th>Athlete Last Name</th>
	</tr>
	<?php while($row = mysqli_fetch_array($baseballresult)):?>
	<tr>
		<td><?php echo $row['athletefname'];?></td>
		<td><?php echo $row['athletelname'];?></td>
	</tr>
	<?php endwhile;?>
</table>
<!-- NUMBER 2 -->
<table style="float: right; margin-right: 25%; margin-bottom: 0; margin-top: 0;">
	<tr>
		<th colspan="2">Men's Basketball</th>
	</tr>
	<tr>
		<th>Athlete First Name</th>
		<th>Athlete Last Name</th>
	</tr>
	<?php while($row = mysqli_fetch_array($mensbasketballresult)):?>
	<tr>
		<td><?php echo $row['athletefname'];?></td>
		<td><?php echo $row['athletelname'];?></td>
	</tr>
	<?php endwhile;?>
</table>
<div style="height: 50px; clear: both;"></div>
<!-- NUMBER 3 -->
<table style="float: left; margin-left: 25%;">
	<tr>
		<th colspan="2">Men's Soccer</th>
	</tr>
	<tr>
		<th>Athlete First Name</th>
		<th>Athlete Last Name</th>
	</tr>
	<?php while($row = mysqli_fetch_array($menssoccerresult)):?>
	<tr>
		<td><?php echo $row['athletefname'];?></td>
		<td><?php echo $row['athletelname'];?></td>
	</tr>
	<?php endwhile;?>
</table>
<!-- NUMBER 4 -->
<table style="float: right; margin-right: 25%;">
	<tr>
		<th colspan="2">Men's Volleyball</th>
	</tr>
	<tr>
		<th>Athlete First Name</th>
		<th>Athlete Last Name</th>
	</tr>
	<?php while($row = mysqli_fetch_array($mensvolleyballresult)):?>
	<tr>
		<td><?php echo $row['athletefname'];?></td>
		<td><?php echo $row['athletelname'];?></td>
	</tr>
	<?php endwhile;?>
</table>
<div style="height: 50px; clear: both;"></div>
<!-- NUMBER 5 -->
<table style="float: left; margin-left: 25%;">
	<tr>
		<th colspan="2">Cross Country</th>
	</tr>
	<tr>
		<th>Athlete First Name</th>
		<th>Athlete Last Name</th>
	</tr>
	<?php while($row = mysqli_fetch_array($crosscountryresult)):?>
	<tr>
		<td><?php echo $row['athletefname'];?></td>
		<td><?php echo $row['athletelname'];?></td>
	</tr>
	<?php endwhile;?>
</table>
<!-- NUMBER 6 -->
<table style="float: right; margin-right: 25%;">
	<tr>
		<th colspan="2">Cycling</th>
	</tr>
	<tr>
		<th>Athlete First Name</th>
		<th>Athlete Last Name</th>
	</tr>
	<?php while($row = mysqli_fetch_array($cyclingresult)):?>
	<tr>
		<td><?php echo $row['athletefname'];?></td>
		<td><?php echo $row['athletelname'];?></td>
	</tr>
	<?php endwhile;?>
</table>
<div style="height: 50px; clear: both;"></div>
<!-- NUMBER 7 -->
<table style="float: left; margin-left: 25%;">
	<tr>
		<th colspan="2">Esports</th>
	</tr>
	<tr>
		<th>Athlete First Name</th>
		<th>Athlete Last Name</th>
	</tr>
	<?php while($row = mysqli_fetch_array($esportsresult)):?>
	<tr>
		<td><?php echo $row['athletefname'];?></td>
		<td><?php echo $row['athletelname'];?></td>
	</tr>
	<?php endwhile;?>
</table>
<!-- NUMBER 8 -->
<table style="float: right; margin-right: 25%;">
	<tr>
		<th colspan="2">Golf</th>
	</tr>
	<tr>
		<th>Athlete First Name</th>
		<th>Athlete Last Name</th>
	</tr>
	<?php while($row = mysqli_fetch_array($golfresult)):?>
	<tr>
		<td><?php echo $row['athletefname'];?></td>
		<td><?php echo $row['athletelname'];?></td>
	</tr>
	<?php endwhile;?>
</table>
<div style="height: 50px; clear: both;"></div>
<!-- NUMBER 9 -->
<table style="float: left; margin-left: 25%;">
	<tr>
		<th colspan="2">Swimming</th>
	</tr>
	<tr>
		<th>Athlete First Name</th>
		<th>Athlete Last Name</th>
	</tr>
	<?php while($row = mysqli_fetch_array($swimmingresult)):?>
	<tr>
		<td><?php echo $row['athletefname'];?></td>
		<td><?php echo $row['athletelname'];?></td>
	</tr>
	<?php endwhile;?>
</table>
<!-- NUMBER 10 -->
<table style="float: right; margin-right: 25%;">
	<tr>
		<th colspan="2">Tennis</th>
	</tr>
	<tr>
		<th>Athlete First Name</th>
		<th>Athlete Last Name</th>
	</tr>
	<?php while($row = mysqli_fetch_array($tennisresult)):?>
	<tr>
		<td><?php echo $row['athletefname'];?></td>
		<td><?php echo $row['athletelname'];?></td>
	</tr>
	<?php endwhile;?>
</table>
<div style="height: 50px; clear: both;"></div>
<!-- NUMBER 11 -->
<table style="float: left; margin-left: 25%;">
	<tr>
		<th colspan="2">Track and Field</th>
	</tr>
	<tr>
		<th>Athlete First Name</th>
		<th>Athlete Last Name</th>
	</tr>
	<?php while($row = mysqli_fetch_array($trackandfieldresult)):?>
	<tr>
		<td><?php echo $row['athletefname'];?></td>
		<td><?php echo $row['athletelname'];?></td>
	</tr>
	<?php endwhile;?>
</table>
<!-- NUMBER 12 -->
<table style="float: right; margin-right: 25%;">
	<tr>
		<th colspan="2">Triathlon</th>
	</tr>
	<tr>
		<th>Athlete First Name</th>
		<th>Athlete Last Name</th>
	</tr>
	<?php while($row = mysqli_fetch_array($triathlonresult)):?>
	<tr>
		<td><?php echo $row['athletefname'];?></td>
		<td><?php echo $row['athletelname'];?></td>
	</tr>
	<?php endwhile;?>
</table>
<div style="height: 50px; clear: both;"></div>
<!-- NUMBER 13 -->
<table style="float: left; margin-left: 25%;">
	<tr>
		<th colspan="2">Women's Basketball</th>
	</tr>
	<tr>
		<th>Athlete First Name</th>
		<th>Athlete Last Name</th>
	</tr>
	<?php while($row = mysqli_fetch_array($womensbasketballresult)):?>
	<tr>
		<td><?php echo $row['athletefname'];?></td>
		<td><?php echo $row['athletelname'];?></td>
	</tr>
	<?php endwhile;?>
</table>
<!-- NUMBER 14 -->
<table style="float: right; margin-right: 25%;">
	<tr>
		<th colspan="2">Cheer</th>
	</tr>
	<tr>
		<th>Athlete First Name</th>
		<th>Athlete Last Name</th>
	</tr>
	<?php while($row = mysqli_fetch_array($cheerresult)):?>
	<tr>
		<td><?php echo $row['athletefname'];?></td>
		<td><?php echo $row['athletelname'];?></td>
	</tr>
	<?php endwhile;?>
</table>
<div style="height: 50px; clear: both;"></div>
<!-- NUMBER 15 -->
<table style="float: left; margin-left: 25%;">
	<tr>
		<th colspan="2">Dance</th>
	</tr>
	<tr>
		<th>Athlete First Name</th>
		<th>Athlete Last Name</th>
	</tr>
	<?php while($row = mysqli_fetch_array($danceresult)):?>
	<tr>
		<td><?php echo $row['athletefname'];?></td>
		<td><?php echo $row['athletelname'];?></td>
	</tr>
	<?php endwhile;?>
</table>
<!-- NUMBER 16 -->
<table style="float: right; margin-right: 25%;">
	<tr>
		<th colspan="2">Women's Soccer</th>
	</tr>
	<tr>
		<th>Athlete First Name</th>
		<th>Athlete Last Name</th>
	</tr>
	<?php while($row = mysqli_fetch_array($womenssoccerresult)):?>
	<tr>
		<td><?php echo $row['athletefname'];?></td>
		<td><?php echo $row['athletelname'];?></td>
	</tr>
	<?php endwhile;?>
</table>
<div style="height: 50px; clear: both;"></div>
<!-- NUMBER 17 -->
<table style="float: left; margin-left: 25%;">
	<tr>
		<th colspan="2">Softball</th>
	</tr>
	<tr>
		<th>Athlete First Name</th>
		<th>Athlete Last Name</th>
	</tr>
	<?php while($row = mysqli_fetch_array($softballresult)):?>
	<tr>
		<td><?php echo $row['athletefname'];?></td>
		<td><?php echo $row['athletelname'];?></td>
	</tr>
	<?php endwhile;?>
</table>
<!-- NUMBER 18 -->
<table style="float: right; margin-right: 25%;">
	<tr>
		<th colspan="2">Volleyball</th>
	</tr>
	<tr>
		<th>Athlete First Name</th>
		<th>Athlete Last Name</th>
	</tr>
	<?php while($row = mysqli_fetch_array($volleyballresult)):?>
	<tr>
		<td><?php echo $row['athletefname'];?></td>
		<td><?php echo $row['athletelname'];?></td>
	</tr>
	<?php endwhile;?>
</table>
<div style="height: 50px; clear: both;"></div>
<?php require "footer.php"; ?>