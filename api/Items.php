
<?php

header("Content-type: Application/json");
include_once "../config/conn.php";


$action = $_POST['action'];





function Register_Item($conn){
    $data = array();
    extract($_POST);
    $sql = "INSERT INTO `items` (`ItemName`, `Quantity`, `UnitPrice`, `SubTotal`) VALUES ('$ItemName', '$Quantity', '$UnitPrice', '$Subtotal');";

    $result= $conn->query($sql);
    if ($result) {
        $data = array("status"=> true, "data"=>"Xogta waa la keydiyey😊😍");
    }else{
        $data = array("status"=>false, "data"=>$conn->error);
    }
    echo json_encode($data);
}















function fetchItemByID($conn){
    $data = array();
    $data_array = array();
    $sql = "SELECT * FROM `items`";
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


function fetch_products_id($conn){
    $data_array = array();
    $data = array();
    extract($_POST);
    $id = $_POST['id'];
    $sql = "SELECT * FROM `Items` WHERE Id = '$id';";
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


function Update_Item($conn){
    $data = array();
    extract($_POST);
    $id = $_POST['id'];
    $sql = "UPDATE `Items` SET `ItemName`='$ItemName',`Quantity`='$Quantity',`UnitPrice`='$UnitPrice',
    `Subtotal`='$Subtotal' WHERE Id = '$id'";

    $result =  $conn->query($sql);
    if ($result) {
        $data = array("status"=>true, "data"=>"SuccessFully Updated😋😎");
    }else {
        $data = array("status"=>false, "data"=>$conn->error);
    }
    echo json_encode($data);
}


function Delete_Item($conn){
    $data_array = array();
    $data = array();
    extract($_POST);
    $id = $_POST['id'];
    $sql = "DELETE FROM `Items` WHERE Id = '$id'";
    $result =  $conn->query($sql);
    if ($result) {
       
        
        $data = array("status"=>true, "data"=>"SuccessFully Deleted🥰"); 
       
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