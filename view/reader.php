<?php include "../../../inc/dbinfo.inc"; ?>
<?php
    $bookid = $_POST['viewBtn'];
    //echo $bookid;

    $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    //echo DB_SERVER;
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT name, content FROM goods where id = ?;";
    $stmt = $conn -> prepare($sql);
    $stmt->bind_param("i",$bookid);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) { 
            echo "<h1>".$row["name"]."</h1>";
            echo $row["content"];
        }
    }
    
    $stmt->close();
    $conn->close();

?>