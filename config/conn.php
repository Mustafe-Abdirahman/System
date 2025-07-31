<?php


$conn = new mysqli("localhost","root","","laundarysystem");


if ($conn->connect_error) {

    echo $conn_error;
}else
{
  //  echo "Connected Successfully"; // This line can be removed in production
}




?>