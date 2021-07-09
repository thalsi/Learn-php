<?php
include 'db_connection.php';

$conn = OpenCon();
$response=array();

$query = "SELECT * FROM user";
$result = mysqli_query($conn,$query);

while ($row = $result->fetch_assoc()) {     
    $response[]= array(
        "id"=>$row["id"],
     "name" => $row["name"],
     "city" => $row["city"],
     "age" => $row["age"]
  );
}

echo json_encode($response);

CloseCon($conn);
?>