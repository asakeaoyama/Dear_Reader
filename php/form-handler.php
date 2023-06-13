<?php include "../../../inc/dbinfo.inc"; ?>
<?php
	// Start the session
	session_start();
	$email = $_POST["email"];
	$password = $_POST["password"];
	if(isValidUser($email, $password)) {
		$_SESSION["sessionEmail"] = $email;
		header('Location: ../view/home.php');
	} else {
		header('Location: ../login.php');
		$_SESSION["sessionErr"] = "Wrong User Info";
	}
	
	function isValidUser($email, $password) {
		 
		// prepare and bind
		echo DB_SERVER;
        // Create connection
        $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        // prepare and bind
        $stmt = $conn->prepare("SELECT password, firstname, lastname , id FROM Users WHERE email= ? ;");
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $result = $stmt -> get_result();
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) { 
                echo "pw: " . $row["password"]. "<br>";
                echo $password;
                if($row["password"] == $password){
                    echo "match!" ;
                    $_SESSION["firstname"] = $row["firstname"];
                    $_SESSION["lastname"] = $row["lastname"];
					$_SESSION["userid"] = $row["id"];
                    $stmt->close();
                    $conn->close();
                    return True;
                }
                else{
                    echo "un match";
                    $stmt->close();
                    $conn->close();
                    return false;
                }
            }

        } else {
            echo "0 results";
            return false;
        }

	}
?>