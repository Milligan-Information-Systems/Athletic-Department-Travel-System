<div class="database-display-container">
	<?php
		if(isset($_POST['search']))
		{
			if(isset($_POST['volleyball'])||isset($_POST['mensbasketball'])||isset($_POST['baseball'])||isset($_POST['crosscountry'])||isset($_POST['cycling'])||isset($_POST['esports'])||isset($_POST['golf'])||isset($_POST['menssoccer'])||isset($_POST['swimming'])||isset($_POST['tennis'])||isset($_POST['trackandfield'])||isset($_POST['triathlon'])||isset($_POST['mensvolleyball'])||isset($_POST['womensbasketball'])||isset($_POST['cheer'])||isset($_POST['dance'])||isset($_POST['womenssoccer'])||isset($_POST['softball'])) {
				if(isset($_POST['volleyball'])) {$volleyball = $_POST['volleyball'];}
				else if(empty($_POST['volleyball'])) {$volleyball = 1;}
				if(isset($_POST['mensbasketball'])) {$mensbasketball = $_POST['mensbasketball'];}
				else if(empty($_POST['mensbasketball'])) {$mensbasketball = 1;}
				if(isset($_POST['baseball'])) {$baseball = $_POST['baseball'];}
				else if(empty($_POST['baseball'])) {$baseball = 1;}
				if(isset($_POST['crosscountry'])) {$crosscountry = $_POST['crosscountry'];}
				else if(empty($_POST['crosscountry'])) {$crosscountry = 1;}
				if(isset($_POST['cycling'])) {$cycling = $_POST['cycling'];}
				else if(empty($_POST['cycling'])) {$cycling = 1;}
				if(isset($_POST['esports'])) {$esports = $_POST['esports'];}
				else if(empty($_POST['esports'])) {$esports = 1;}
				if(isset($_POST['golf'])) {$golf = $_POST['golf'];}
				else if(empty($_POST['golf'])) {$golf = 1;}
				if(isset($_POST['menssoccer'])) {$menssoccer = $_POST['menssoccer'];}
				else if(empty($_POST['menssoccer'])) {$menssoccer = 1;}
				if(isset($_POST['swimming'])) {$swimming = $_POST['swimming'];}
				else if(empty($_POST['swimming'])) {$swimming = 1;}
				if(isset($_POST['tennis'])) {$tennis = $_POST['tennis'];}
				else if(empty($_POST['tennis'])) {$tennis = 1;}
				if(isset($_POST['trackandfield'])) {$trackandfield = $_POST['trackandfield'];}
				else if(empty($_POST['trackandfield'])) {$trackandfield = 1;}
				if(isset($_POST['triathlon'])) {$triathlon = $_POST['triathlon'];}
				else if(empty($_POST['triathlon'])) {$triathlon = 1;}
				if(isset($_POST['mensvolleyball'])) {$mensvolleyball = $_POST['mensvolleyball'];}
				else if(empty($_POST['mensvolleyball'])) {$mensvolleyball = 1;}
				if(isset($_POST['womensbasketball'])) {$womensbasketball = $_POST['womensbasketball'];}
				else if(empty($_POST['womensbasketball'])) {$womensbasketball = 1;}
				if(isset($_POST['cheer'])) {$cheer = $_POST['cheer'];}
				else if(empty($_POST['cheer'])) {$cheer = 1;}
				if(isset($_POST['dance'])) {$dance = $_POST['dance'];}
				else if(empty($_POST['dance'])) {$dance = 1;}
				if(isset($_POST['womenssoccer'])) {$womenssoccer = $_POST['womenssoccer'];}
				else if(empty($_POST['womenssoccer'])) {$womenssoccer = 1;}
				if(isset($_POST['softball'])) {$softball = $_POST['softball'];}
				else if(empty($_POST['softball'])) {$softball = 1;}
				$valueToSearch = $_POST['valueToSearch'];
				// search in all table columns
				// using concat mysql function
				$query = "SELECT * FROM athletedatabase WHERE CONCAT(fname, lname, sport, date_excused, departure_time) LIKE '%".$valueToSearch."%' AND (sport LIKE '%".$volleyball."%' OR sport LIKE '%".$mensbasketball."%' OR sport LIKE '%".$baseball."%' OR sport LIKE '%".$crosscountry."%' OR sport LIKE '%".$cycling."%' OR sport LIKE '%".$esports."%' OR sport LIKE '%".$golf."%' OR sport LIKE '%".$menssoccer."%' OR sport LIKE '%".$swimming."%' OR sport LIKE '%".$tennis."%' OR sport LIKE '%".$trackandfield."%' OR sport LIKE '%".$triathlon."%' OR sport LIKE '%".$mensvolleyball."%' OR sport LIKE '%".$womensbasketball."%' OR sport LIKE '%".$cheer."%' OR sport LIKE '%".$dance."%' OR sport LIKE '%".$womenssoccer."%' OR sport LIKE '%".$softball."%')";
				$search_result = filterTable($query);
			} else {
				$valueToSearch = $_POST['valueToSearch'];
				// search in all table columns
				// using concat mysql function
				$query = "SELECT * FROM athletedatabase WHERE CONCAT(fname, lname, sport, date_excused, departure_time) LIKE '%".$valueToSearch."%'";
				$search_result = filterTable($query);
			}
		}
		 else {
			$query = "SELECT * FROM athletedatabase";
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
	<form action="index.php" method="post">
		<input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
		
		<h1>Men's Sports</h1>
		<input type="checkbox" name="baseball" value="Baseball">Baseball<br>
		<input type="checkbox" name="mensbasketball" value="Men\'s Basketball">Men's Basketball<br>
		<input type="checkbox" name="crosscountry" value="Cross Country">Cross Country<br>
		<input type="checkbox" name="cycling" value="Cycling">Cycling<br>
		<input type="checkbox" name="esports" value="Esports">Esports<br>
		<input type="checkbox" name="golf" value="Golf">Golf<br>
		<input type="checkbox" name="menssoccer" value="Men\'s Soccer">Men's Soccer<br>
		<input type="checkbox" name="swimming" value="Swimming">Swimming<br>
		<input type="checkbox" name="tennis" value="tennis">Tennis<br>
		<input type="checkbox" name="trackandfield" value="Track & Field">Track and Field<br>
		<input type="checkbox" name="triathlon" value="Triathlon">Triathlon<br>
		<input type="checkbox" name="mensvolleyball" value="Men\'s Volleyball">Men's Volleyball<br>
		<h2>Women's Sports</h2>
		<input type="checkbox" name="womensbasketball" value="Women\'s Basketball">Women's Basketball<br>
		<input type="checkbox" name="cheer" value="Cheer">Cheer<br>
		<input type="checkbox" name="crosscountry" value="Cross Country">Cross Country<br>
		<input type="checkbox" name="cycling" value="Cycling">Cycling<br>
		<input type="checkbox" name="dance" value="Dance">Dance<br>
		<input type="checkbox" name="esports" value="Esports">Esports<br>
		<input type="checkbox" name="golf" value="Golf">Golf<br>
		<input type="checkbox" name="womenssoccer" value="Women\'s Soccer">Women's Soccer<br>
		<input type="checkbox" name="softball" value="Softball">Softball<br>
		<input type="checkbox" name="swimming" value="Swimming">Swimming<br>
		<input type="checkbox" name="tennis" value="tennis">Tennis<br>
		<input type="checkbox" name="trackandfield" value="Track & Field">Track and Field<br>
		<input type="checkbox" name="triathlon" value="Triathlon">Triathlon<br>
		<input type="checkbox" name="volleyball" value="Volleyball">Volleyball<br>
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
	</form>
</div>