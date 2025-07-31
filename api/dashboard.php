<?php
session_start();
header('Content-type: Application/json');
include('../config/conn.php');


$action = $_POST['action'];









function read_all_staff($conn){
    $data = array();
    $data_array = array();
   

    $sql = "SELECT COUNT(*) as shaql FROM shaqaale;";
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


function read_all_xisaabta_guud($conn){
    $data = array();
    $data_array = array();
   

    $sql = "SELECT SUM(Dhigaal) as dhigaal FROM `xisaabta_guud`";
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
function read_all_xisaabta_gaar($conn){
    $data = array();
    $data_array = array();
   

    $sql = "SELECT SUM(Actual_Total) as total FROM `xisaabta_gaarka`;";
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