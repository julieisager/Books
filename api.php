<?php

require "settings/init.php";

$data = json_decode(file_get_contents('php://input'), true);


header('content-Type: application/json; charset=utf-8');

$data["password"] = "kickPHP";

if(isset($data["password"]) && $data["password"] == "kickPHP"){
    $sql ="SELECT * FROM produkter WHERE 1=1";
    $bind = [];

    if(!empty($data["nameSearch"])){
        $sql = $sql . " AND prodTitle LIKE CONCAT('%', :prodTitle, '%') ";
        $bind[":prodTitle"] = $data["nameSearch"];
    }

    /*$sql . = "SELECT * FROM produkter ORDER BY "; help*/

    $produkter = $db->sql($sql, $bind);
    header("HTTP/1.1 200 OK");

    echo json_encode($produkter);

} else {
    header("HTTP/1.1 401 Unauthorized");
    $error["errorMessage"] = "Din kodeord var forkert";

    echo json_encode($error);
}

?>
