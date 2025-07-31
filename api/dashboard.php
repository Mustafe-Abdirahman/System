<?php
session_start();
header('Content-type: Application/json');
include('../config/conn.php');


$action = $_POST['action'];









function read_all_Orders($conn){
    $data = array();
    $data_array = array();
   

    $sql = "SELECT COUNT(*) as Items FROM shaqaale;";
    $result = $conn->query($sql);

    if ($result) {
        
        while ($row = $result->fetch_assoc()) {
            $data [] = $row;
            $data_array = array("status"=>true, "data"=>$data);
        }
    }else {
        $data_array = array("status"=>false, "data"=>$conn->error);
    }

    echo json_encode($data_array);
}











if (isset($_POST['action'])) {
    $action = $_POST['action'];
    $action($conn);
}else {
    echo "Action is required";
}




?>