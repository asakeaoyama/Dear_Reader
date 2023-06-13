<?php include "../../../inc/dbinfo.inc"; ?>

<?php
    header('Content-Type: application/json; charset=UTF-8'); //設定資料類型為 json，編碼 utf-8
    session_start();
	$userid = $_SESSION["userid"];
    //echo $userid;
    
    // prepare and bind
    //echo DB_SERVER;
    // Create connection
    $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT `id`, `name`, `intro`, `writter`, `imgsrc`,`ISBN` FROM `goods`;";
    $stmt = $conn -> prepare($sql);
    $stmt->execute();
    $resultset = $stmt->get_result();
    $result = $resultset->fetch_all(MYSQLI_ASSOC);
    $resultset -> free_result();

    echo json_encode($result);
    $stmt->close();
    $conn->close();

    //var_dump($result);
    //exit(0);

    // if ($result->num_rows > 0) {
    //     // output data of each row
    //     while($row = $result->fetch_assoc()) { 
            
    //     }
    // } else {
    //     echo "0 results";
    //     return false;
    // }


    // if ($_SERVER['REQUEST_METHOD'] == "POST") { //如果是 POST 請求
    //     echo json_encode(array(
    //         'nickname' => $nickname,
    //         'gender' => $gender
    //     ));
    // } else {
    //     //回傳 errorMsg json 資料
    //     echo json_encode(array(
    //         'errorMsg' => '請求無效，只允許 POST 方式訪問！'
    //     ));
    // }
?>


