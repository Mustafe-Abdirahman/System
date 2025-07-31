
<?php

header("Content-type: Application/json");
include_once "../config/conn.php";


$action = $_POST['action'];





function register_order($conn){
    $data = array();
    extract($_POST);
    $sql = "INSERT INTO `orders` (`CustomerName`, `OrderDate`, `Status`, `ItemName`, `Price`) VALUES ('$Cname', '$OrderDate', '$Status', '$ItemName', '$Price');";

    $result= $conn->query($sql);
    if ($result) {
        $data = array("status"=> true, "data"=>"Xogta waa la keydiyey😊😍");
    }else{
        $data = array("status"=>false, "data"=>$conn->error);
    }
    echo json_encode($data);
}



function read_all_Orders($conn){
    $data = array();
    $data_array = array();
    $sql = "SELECT * FROM `orders`";
    $result = $conn->query($sql);

    if ($result) {
        while($row= $result->fetch_assoc()){
            $data [] = $row;
            $data_array = array("status"=>true, "data"=>$data);
        }
    }else {
        $data_array = array("status"=>true, "data"=>$conn->error);
    }

    echo json_encode($data_array);
}


function Fetch_Orders_By_ID($conn){
    $data = array();
    $data_array = array();
    extract($_POST);
    $Id = $_POST['Id'];
    $sql = "SELECT * FROM `orders` WHERE Id =  '$Id'";
    $result = $conn->query($sql);

    if ($result) {
        while($row= $result->fetch_assoc()){
            $data [] = $row;
            $data_array = array("status"=>true, "data"=>$data);
        }
    }else {
        $data_array = array("status"=>true, "data"=>$conn->error);
    }

    echo json_encode($data_array);
}



function dakhli_wiish($conn){
    $data_array = array();
    $data = array();
    extract($_POST);
  
    $sql = "SELECT SUM(Lacag) as Dakhli FROM `wiishashka`";
    $result =  $conn->query($sql);
    if ($result) {
       while ($row = $result->fetch_assoc()) {
        $data_array [] = $row;
        $data = array("status"=>true, "data"=>$data_array); 
       }
    }else {
        $data = array("status"=>false, "data"=>$conn->error);
    }
    echo json_encode($data);
}


if (isset($_POST['action'])) {
    $action = $_POST['action'];
    $action($conn);
}else{
    echo "Action is Required";
}





?>