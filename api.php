<?php

require "settings/init.php";

$data = json_decode(file_get_contents('php://input'), true);


header('content-Type: application/json; charset=utf-8');

$data["password"] = "kickPHP";

if(isset($data["password"]) && $data["password"] == "kickPHP"){
    $sql ="SELECT * FROM produkter WHERE 1=1";
    $bind = [];

    if (!empty($data["nameSearch"])) {
        $sql = $sql . " AND (prodTitle LIKE CONCAT('%', :prodTitle, '%') OR prodAuthor LIKE CONCAT('%', :prodAuthor, '%') OR prodLanguage LIKE CONCAT('%', :prodLanguage, '%')) ";
        $bind[":prodTitle"] = $data["nameSearch"];
        $bind[":prodAuthor"] = $data["nameSearch"];
        $bind[":prodLanguage"] = $data["nameSearch"];
    }

    $sql .= " ORDER BY prodTitle ASC";

    $produkter = $db->sql($sql, $bind);
    header("HTTP/1.1 200 OK");

    echo json_encode($produkter);

} else {
    header("HTTP/1.1 401 Unauthorized");
    $error["errorMessage"] = "Din kodeord var forkert";

    echo json_encode($error);
}

?>
