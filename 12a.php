<?php
$mysqli = new mysqli("localhost", "root", "", "studentdb");
$sql = "SELECT * FROM table12 where city='surat'";
if($result = $mysqli->query($sql)){
    if($result->num_rows > 0){
        echo "<table border='1px'>";
            echo "<tr>";
                echo "<th>name</th>";
                echo "<th>en no</th>";
				
                echo "<th>email</th>";
                
                echo "<th>city</th>";
				echo "<th>contact</th>";
            echo "</tr>";
        while($row = $result->fetch_array()){
            echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['eno'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['city'] . "</td>";
			    echo "<td>" . $row['contact'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        $result->free();
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
$mysqli->close();
?>		