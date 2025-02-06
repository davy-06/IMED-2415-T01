<?php

	$db_server = "localhost";
	$db_user = "david.hernandez107";
	$db_pass = "1490792";
	$db_name = "db";
	$conn = "";

	$conn = mysqli_connect($db_server,
				$db_user,
				$db_pass,
				$db_name);
                
        if($conn) {
		echo "You are connected! ",sub_name;
                echo"<p>";

        $sql = "SELECT * FROM 'employees' limit 50;";
                 $result = mysqli_query($conn, $sqli);

                if(mysqli_num_rows($result) > 0){
                    While($row = mysqli_fetch_assoc($result));
                    echo $row["emp_no"], "<br>";
                    echo $row["birth_rate"], "<br>";
                    echo $row["first_name"], "<br>";
                    echo $row["last_name"], "<br>";
                    echo $row["gender"], "<br>";
                    echo $row["hire_date"], "<br>";
                    }
}
                echo"</p>";
                mysqli_close($conn);
                echo "Connection Closed!";
        }
        else{
        echo"Could not connect!";
        }
?>