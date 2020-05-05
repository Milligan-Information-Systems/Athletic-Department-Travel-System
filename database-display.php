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
				$query = "SELECT * FROM athletedatabase2 WHERE CONCAT(fname, lname, sport, date_excused, departure_time) LIKE '%".$valueToSearch."%' AND (sportnumber LIKE '%".$volleyball."%' OR sportnumber LIKE '%".$mensbasketball."%' OR sportnumber LIKE '%".$baseball."%' OR sportnumber LIKE '%".$crosscountry."%' OR sportnumber LIKE '%".$cycling."%' OR sportnumber LIKE '%".$esports."%' OR sportnumber LIKE '%".$golf."%' OR sportnumber LIKE '%".$menssoccer."%' OR sportnumber LIKE '%".$swimming."%' OR sportnumber LIKE '%".$tennis."%' OR sportnumber LIKE '%".$trackandfield."%' OR sportnumber LIKE '%".$triathlon."%' OR sportnumber LIKE '%".$mensvolleyball."%' OR sportnumber LIKE '%".$womensbasketball."%' OR sportnumber LIKE '%".$cheer."%' OR sportnumber LIKE '%".$dance."%' OR sportnumber LIKE '%".$womenssoccer."%' OR sportnumber LIKE '%".$softball."%')";
				$search_result = filterTable($query);
			} else {
				$valueToSearch = $_POST['valueToSearch'];
				// search in all table columns
				// using concat mysql function
				$query = "SELECT * FROM athletedatabase2 WHERE CONCAT(fname, lname, sport, date_excused, departure_time) LIKE '%".$valueToSearch."%'";
				$search_result = filterTable($query);
			}
		}
		 else {
			$query = "SELECT * FROM athletedatabase2";
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
	<form action="index.php" method="post">
		<input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
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