<?php include "../../../inc/dbinfo.inc"; ?>
<?php
	// Start the session
	session_start();
	$email = $_POST["email"];
	$password = $_POST["password"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // prepare and bind
    $stmt = $conn->prepare("INSERT INTO Users(email, password, firstname, lastname) VALUES (?,?,?,?);");
    $stmt->bind_param("ssss",$email, $password, $firstname, $lastname);
    $stmt->execute();
	
    $stmt->close();
    $conn->close();

    header('Location: ../login.php');
?>