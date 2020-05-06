<?php require "header.php"; ?>
<?php
require 'includes/dbh.inc.php';

if(isset($_POST['addsingleentry'])) {
	if($_POST['team'] === '1001') {
		$sport = 'Baseball';
	} else if($_POST['team'] === '1002') {
		$sport = 'Men\'s Basketball';
	} else if($_POST['team'] === '1003') {
		$sport = 'Men\'s Soccer';
	} else if($_POST['team'] === '1004') {
		$sport = 'Men\'s Volleyball';
	} else if($_POST['team'] === '1005') {
		$sport = 'Cross Country';
	} else if($_POST['team'] === '1006') {
		$sport = 'Cycling';
	} else if($_POST['team'] === '1007') {
		$sport = 'Esports';
	} else if($_POST['team'] === '1008') {
		$sport = 'Golf';
	} else if($_POST['team'] === '1009') {
		$sport = 'Swimming';
	} else if($_POST['team'] === '1010') {
		$sport = 'Tennis';
	} else if($_POST['team'] === '1011') {
		$sport = 'Track and Field';
	} else if($_POST['team'] === '1012') {
		$sport = 'Triathlon';
	} else if($_POST['team'] === '1013') {
		$sport = 'Women\'s Basketball';
	} else if($_POST['team'] === '1014') {
		$sport = 'Cheer';
	} else if($_POST['team'] === '1015') {
		$sport = 'Dance';
	} else if($_POST['team'] === '1016') {
		$sport = 'Women\'s Soccer';
	} else if($_POST['team'] === '1017') {
		$sport = 'Softball';
	} else if($_POST['team'] === '1018') {
		$sport = 'Volleyball';
	}
	$fname = $_POST['Athletefirstname'];
	$lname = $_POST['Athletelastname'];
	$sportnumber = $_POST['team'];
	$date_excused = $_POST['date_excused'];
	$departure_time = $_POST['departure_time'];
	$query = "INSERT INTO athletedatabase2 (fname, lname, sport, date_excused, departure_time, sportnumber) VALUES ('$fname', '$lname', '$sport', '$date_excused', '$departure_time', '$sportnumber')";
	mysqli_query($conn, $query);
}
?>
<div class="update=form-1-container">
	<h1 style="text-align: center; font-size: 25px;">Add Single Entry:</h1>
	<form class="update-form-1" action="admin-update-page.php" method="post">
		<input type="text" name="Athletefirstname" placeholder="Enter athlete's first name...">
		<input type="text" name="Athletelastname" placeholder="Enter athlete's last name...">
		<label for="team">Choose a team:</label>
		<select id="team" name="team">
			<option></option>
			<option value="1001">Baseball</option>
			<option value="1002">Men's Basketball</option>
			<option value="1003">Men's Soccer</option>
			<option value="1004">Men's Volleyball</option>
			<option value="1005">Cross Country</option>
			<option value="1006">Cycling</option>
			<option value="1007">Esports</option>
			<option value="1008">Golf</option>
			<option value="1009">Swimming</option>
			<option value="1010">Tennis</option>
			<option value="1011">Track and Field</option>
			<option value="1012">Triathlon</option>
			<option value="1013">Women's Basketball</option>
			<option value="1014">Cheer</option>
			<option value="1015">Dance</option>
			<option value="1016">Women's Soccer</option>
			<option value="1017">Softball</option>
			<option value="1018">Volleyball</option>
		</select>
		<label for="date">Date Excused:</label>
		<input type="date" id="date_excused" name="date_excused">
		<label for="time">Departure Time:</label>
		<input type="time" id="departure_time" name="departure_time">
		<input type="submit" name="addsingleentry" value="Add Entry">
	</form>
</div>
<div class="update=form-2-container">
	<h1 style="text-align: center; font-size: 25px; margin-top: 40px;">Add Entry for Entire Team:</h1>
	<form class="update-form-2" action="updateteam.php" method="post">
		<label for="team">Choose a team:</label>
		<select id="team" name="team">
			<option></option>
			<option value="1001">Baseball</option>
			<option value="1002">Men's Basketball</option>
			<option value="1003">Men's Soccer</option>
			<option value="1004">Men's Volleyball</option>
			<option value="1005">Cross Country</option>
			<option value="1006">Cycling</option>
			<option value="1007">Esports</option>
			<option value="1008">Golf</option>
			<option value="1009">Swimming</option>
			<option value="1010">Tennis</option>
			<option value="1011">Track and Field</option>
			<option value="1012">Triathlon</option>
			<option value="1013">Women's Basketball</option>
			<option value="1014">Cheer</option>
			<option value="1015">Dance</option>
			<option value="1016">Women's Soccer</option>
			<option value="1017">Softball</option>
			<option value="1018">Volleyball</option>
		</select>
		<label for="date">Date Excused:</label>
		<input type="date" id="date_excused" name="date_excused">
		<label for="time">Departure Time:</label>
		<input type="time" id="departure_time" name ="departure_time">
		<input type="submit" name="addsingleentry" value="Add Entry">
	</form>
</div>
<div class="spacer"></div>
<h1 style="text-align: center; font-size: 25px; margin: 40px;">Current Database:</h1>
<div class="database-display-container">
	<?php
		if(isset($_POST['search']))
		{
			if(isset($_POST['volleyball'])||isset($_POST['mensbasketball'])||isset($_POST['baseball'])||isset($_POST['crosscountry'])||isset($_POST['cycling'])||isset($_POST['esports'])||isset($_POST['golf'])||isset($_POST['menssoccer'])||isset($_POST['swimming'])||isset($_POST['tennis'])||isset($_POST['trackandfield'])||isset($_POST['triathlon'])||isset($_POST['mensvolleyball'])||isset($_POST['womensbasketball'])||isset($_POST['cheer'])||isset($_POST['dance'])||isset($_POST['womenssoccer'])||isset($_POST['softball'])) {
				if(isset($_POST['volleyball'])) {$volleyball = $_POST['volleyball'];}
				else if(empty($_POST['volleyball'])) {$volleyball = 555555555;}
				if(isset($_POST['mensbasketball'])) {$mensbasketball = $_POST['mensbasketball'];}
				else if(empty($_POST['mensbasketball'])) {$mensbasketball = 1555555555;}
				if(isset($_POST['baseball'])) {$baseball = $_POST['baseball'];}
				else if(empty($_POST['baseball'])) {$baseball = 1555555555;}
				if(isset($_POST['crosscountry'])) {$crosscountry = $_POST['crosscountry'];}
				else if(empty($_POST['crosscountry'])) {$crosscountry = 1555555555;}
				if(isset($_POST['cycling'])) {$cycling = $_POST['cycling'];}
				else if(empty($_POST['cycling'])) {$cycling = 1555555555;}
				if(isset($_POST['esports'])) {$esports = $_POST['esports'];}
				else if(empty($_POST['esports'])) {$esports = 1555555555;}
				if(isset($_POST['golf'])) {$golf = $_POST['golf'];}
				else if(empty($_POST['golf'])) {$golf = 1555555555;}
				if(isset($_POST['menssoccer'])) {$menssoccer = $_POST['menssoccer'];}
				else if(empty($_POST['menssoccer'])) {$menssoccer = 1555555555;}
				if(isset($_POST['swimming'])) {$swimming = $_POST['swimming'];}
				else if(empty($_POST['swimming'])) {$swimming = 1555555555;}
				if(isset($_POST['tennis'])) {$tennis = $_POST['tennis'];}
				else if(empty($_POST['tennis'])) {$tennis = 1555555555;}
				if(isset($_POST['trackandfield'])) {$trackandfield = $_POST['trackandfield'];}
				else if(empty($_POST['trackandfield'])) {$trackandfield = 1555555555;}
				if(isset($_POST['triathlon'])) {$triathlon = $_POST['triathlon'];}
				else if(empty($_POST['triathlon'])) {$triathlon = 1555555555;}
				if(isset($_POST['mensvolleyball'])) {$mensvolleyball = $_POST['mensvolleyball'];}
				else if(empty($_POST['mensvolleyball'])) {$mensvolleyball = 1555555555;}
				if(isset($_POST['womensbasketball'])) {$womensbasketball = $_POST['womensbasketball'];}
				else if(empty($_POST['womensbasketball'])) {$womensbasketball = 1555555555;}
				if(isset($_POST['cheer'])) {$cheer = $_POST['cheer'];}
				else if(empty($_POST['cheer'])) {$cheer = 1555555555;}
				if(isset($_POST['dance'])) {$dance = $_POST['dance'];}
				else if(empty($_POST['dance'])) {$dance = 1555555555;}
				if(isset($_POST['womenssoccer'])) {$womenssoccer = $_POST['womenssoccer'];}
				else if(empty($_POST['womenssoccer'])) {$womenssoccer = 1555555555;}
				if(isset($_POST['softball'])) {$softball = $_POST['softball'];}
				else if(empty($_POST['softball'])) {$softball = 1555555555;}
				$valueToSearch = $_POST['valueToSearch'];
				// search in all table columns
				// using concat mysql function
				$query = "SELECT * FROM athletedatabase2 WHERE CONCAT(fname, lname, date_excused, departure_time) LIKE '%".$valueToSearch."%' AND (sportnumber LIKE '%".$volleyball."%' OR sportnumber LIKE '%".$mensbasketball."%' OR sportnumber LIKE '%".$baseball."%' OR sportnumber LIKE '%".$crosscountry."%' OR sportnumber LIKE '%".$cycling."%' OR sportnumber LIKE '%".$esports."%' OR sportnumber LIKE '%".$golf."%' OR sportnumber LIKE '%".$menssoccer."%' OR sportnumber LIKE '%".$swimming."%' OR sportnumber LIKE '%".$tennis."%' OR sportnumber LIKE '%".$trackandfield."%' OR sportnumber LIKE '%".$triathlon."%' OR sportnumber LIKE '%".$mensvolleyball."%' OR sportnumber LIKE '%".$womensbasketball."%' OR sportnumber LIKE '%".$cheer."%' OR sportnumber LIKE '%".$dance."%' OR sportnumber LIKE '%".$womenssoccer."%' OR sportnumber LIKE '%".$softball."%') ORDER BY date_excused DESC";
				$search_result = filterTable($query); 
			} else {
				$valueToSearch = $_POST['valueToSearch'];
				// search in all table columns
				// using concat mysql function
				$query = "SELECT * FROM athletedatabase2 WHERE CONCAT(fname, lname, date_excused, departure_time) LIKE '%".$valueToSearch."%' ORDER BY date_excused DESC";
				$search_result = filterTable($query);
			}
		}
		 else {
			$query = "SELECT * FROM athletedatabase2 ORDER BY date_excused DESC";
			$search_result = filterTable($query);
		}

		// function to connect and execute the query
		function filterTable($query)
		{
			require 'includes/dbh.inc.php';
			$filter_Result = mysqli_query($conn, $query);
			return $filter_Result;
		}

	?>
	<div id="database-display-form-container">
	<form action="admin-update-page.php" method="post">
		<input type="text" name="valueToSearch" placeholder="Search a name..."><br><br>
		<div style="float: left; margin-left: 25%;">
		<h1 style="font-size: 25px; margin-bottom: 10px;">Men's Sports</h1>
		<label class="checkmark-container-m">
		<input type="checkbox" name="baseball" value="1001">Baseball<br>
		<span class="checkmark"></span>
		</label>
		<label class="checkmark-container-m">
		<input type="checkbox" name="mensbasketball" value="1002">Men's Basketball<br>
		<span class="checkmark"></span>
		</label>
		<label class="checkmark-container-m">
		<input type="checkbox" name="crosscountry" value="1005">Cross Country<br>
		<span class="checkmark"></span>
		</label>
		<label class="checkmark-container-m">
		<input type="checkbox" name="cycling" value="1006">Cycling<br>
		<span class="checkmark"></span>
		</label>
		<label class="checkmark-container-m">
		<input type="checkbox" name="esports" value="1007">Esports<br>
		<span class="checkmark"></span>
		</label>
		<label class="checkmark-container-m">
		<input type="checkbox" name="golf" value="1008">Golf<br>
		<span class="checkmark"></span>
		</label>
		<label class="checkmark-container-m">
		<input type="checkbox" name="menssoccer" value="1003">Men's Soccer<br>
		<span class="checkmark"></span>
		</label>
		<label class="checkmark-container-m">
		<input type="checkbox" name="swimming" value="1009">Swimming<br>
		<span class="checkmark"></span>
		</label>
		<label class="checkmark-container-m">
		<input type="checkbox" name="tennis" value="1010">Tennis<br>
		<span class="checkmark"></span>
		</label>
		<label class="checkmark-container-m">
		<input type="checkbox" name="trackandfield" value="1011">Track and Field<br>
		<span class="checkmark"></span>
		</label>
		<label class="checkmark-container-m">
		<input type="checkbox" name="triathlon" value="1012">Triathlon<br>
		<span class="checkmark"></span>
		</label>
		<label class="checkmark-container-m">
		<input type="checkbox" name="mensvolleyball" value="1004">Men's Volleyball<br>
		<span class="checkmark"></span>
		</label>
		</div>
		<div style="float: right; margin-right: 29%;">
		<h2 style="font-size: 25px; margin-bottom: 10px;">Women's Sports</h2>
		<label class="checkmark-container-w">
		<input type="checkbox" name="womensbasketball" value="1013">Women's Basketball<br>
		<span class="checkmark"></span>
		</label>
		<label class="checkmark-container-w">
		<input type="checkbox" name="cheer" value="1014">Cheer<br>
		<span class="checkmark"></span>
		</label>
		<label class="checkmark-container-w">
		<input type="checkbox" name="crosscountry" value="1005">Cross Country<br>
		<span class="checkmark"></span>
		</label>
		<label class="checkmark-container-w">
		<input type="checkbox" name="cycling" value="1006">Cycling<br>
		<span class="checkmark"></span>
		</label>
		<label class="checkmark-container-w">
		<input type="checkbox" name="dance" value="1015">Dance<br>
		<span class="checkmark"></span>
		</label>
		<label class="checkmark-container-w">
		<input type="checkbox" name="esports" value="1007">Esports<br>
		<span class="checkmark"></span>
		</label>
		<label class="checkmark-container-w">
		<input type="checkbox" name="golf" value="1008">Golf<br>
		<span class="checkmark"></span>
		</label>
		<label class="checkmark-container-w">
		<input type="checkbox" name="womenssoccer" value="1013">Women's Soccer<br>
		<span class="checkmark"></span>
		</label>
		<label class="checkmark-container-w">
		<input type="checkbox" name="softball" value="1017">Softball<br>
		<span class="checkmark"></span>
		</label>
		<label class="checkmark-container-w">
		<input type="checkbox" name="swimming" value="1009">Swimming<br>
		<span class="checkmark"></span>
		</label>
		<label class="checkmark-container-w">
		<input type="checkbox" name="tennis" value="1010">Tennis<br>
		<span class="checkmark"></span>
		</label>
		<label class="checkmark-container-w">
		<input type="checkbox" name="trackandfield" value="1011">Track and Field<br>
		<span class="checkmark"></span>
		</label>
		<label class="checkmark-container-w">
		<input type="checkbox" name="triathlon" value="1012">Triathlon<br>
		<span class="checkmark"></span>
		</label>
		<label class="checkmark-container-w">
		<input type="checkbox" name="volleyball" value="1018">Volleyball<br>
		<span class="checkmark"></span>
		</label>
		</div>
		<div style="clear: both;">
		<input type="submit" name="search" value="Filter"><br><br>
		<table>
			<tr>
				<th>Athlete First Name</th>
				<th>Athlete Last Name</th>
				<th>Sport</th>
				<th>Date Excused</th>
				<th>Departure Time</th>
			</tr>
			<?php while($row = mysqli_fetch_array($search_result)):?>
			<tr>
				<td><?php echo $row['fname'];?></td>
				<td><?php echo $row['lname'];?></td>
				<td><?php echo $row['sport'];?></td>
				<td><?php echo $row['date_excused'];?></td>
				<td><?php echo $row['departure_time'];?></td>
			</tr>
			<?php endwhile;?>
		</table>
		</div>
	</form>
	</div>
</div>
<?php require "footer.php"; ?>