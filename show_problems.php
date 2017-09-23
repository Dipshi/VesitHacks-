<?php
include("dbconnect.php");
$sql="select * from problems";
$result=$conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$id=substr($pid);
		$sql1="select * from staff where e_id=".$id." ";
		$result1=$conn->query($sql1);
		$row1=$result->fetch_assoc()
        echo "Problem Id: " . $row["pid"]. " - Problem Statement: " . $row["problems"]."<br>";
		echo "Uploaded by:".$row1['first_name'];
    }
} else {
    echo "0 results";
}
$conn->close();
?>
Run example »
Cod
?>