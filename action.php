<?php  
require 'includes/dbh.inc.php';

$input = filter_input_array(INPUT_POST);

$first_name = mysqli_real_escape_string($conn, $input["fname"]);
$last_name = mysqli_real_escape_string($conn, $input["lname"]);
$sport = mysqli_real_escape_string($conn, $input["sport"]);
$date_excused = mysqli_real_escape_string($conn, $input["date_excused"]);
$departure_time = mysqli_real_escape_string($conn, $input["departure_time"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE athletedatabase2 
 SET fname = '".$first_name."', 
 lname = '".$last_name."', sport = '".$sport."', date_excused = '".$date_excused."', depature_time = '".$depature_time."' 
 WHERE travelID = '".$input["travelID"]."'
 ";

 mysqli_query($conn, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM athletedatabase2 
 WHERE travelID = '".$input["travelID"]."'
 ";
 mysqli_query($conn, $query);
}

echo json_encode($input);

?>