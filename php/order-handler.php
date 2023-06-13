<?php include "../../../inc/dbinfo.inc"; ?>
<?php
    //header('Content-Type: application/json; charset=UTF-8');
	// Start the session
	session_start();
	$bookid = $_POST["buyBtn"];
    $userid = $_SESSION["userid"];

    $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO collection(userid, bookid) VALUES (?,?);";
    $stmt = $conn -> prepare($sql);
    $stmt->bind_param("ii",$userid,$bookid);
    $stmt->execute();
    //$resultset = $stmt->get_result();
    //$result = $resultset->fetch_all(MYSQLI_ASSOC);
    //$resultset -> free_result();

    $stmt->close();
    $conn->close();
    header('Location: ../view/myCollection.php');
?>

