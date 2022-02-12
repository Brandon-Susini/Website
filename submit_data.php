<?php
$mysqli= new mysqli("elvis.rowan.edu","susini23","1Berrymilk!","susini23");
if($mysqli -> connect_errno)
{
	echo "Failed to connect to MYSQL: " .$mysqli ->connect_error;
	exit();
}else{
	echo "Connection Successful!";
}

$mbtiType = $_POST["mbtiType"];
$socioType = $_POST["socioType"];
$enneagram = $_POST["enneagram"];
$op = $_POST["op"];
$insert_records = "INSERT INTO personality_records (record_mbti, record_socio, record_enneagram, record_op) VALUES($mbti, $socioType, $enneagram, $op)";
if($mysql -> query($insert_records) === TRUE){
    echo "New Record Created Successfully";
}else{
    "Error " . $insert_records . "<br>" . $mysql -> error;
}
$mysql -> close();
/*
$results = $mysqli -> query
(
	$car_makeSelectAll
);
$results_array = $results -> fetch_all(MYSQLI_ASSOC);
foreach($results_array as $index1 => $result)
{
	foreach($result as $index2 => $row){
		echo $index2 . " - " . $row, ", ";
	}
}

var_dump($results_array);
echo "\n\n";
echo $results -> num_rows . "\n";
echo $results_array[0]["make_name"] . "\n";
echo "\n";
*/
/*
$filename = "savedResults.txt";
$file = "";
if(filesize($filename) == 0){
    echo "0";
    $file = fopen($filename,'w');
}else{
    echo "!0";
    $file = fopen($filename, 'a+');
}
fwrite($file,$mbtiType . "\n");
fwrite($file,$socioType . "\n");
fwrite($file,$enneagram . "\n");
fwrite($file,$op . "\n" . "end\n");
echo "Submission Successful";
fclose($file);
phpinfo();
 */
