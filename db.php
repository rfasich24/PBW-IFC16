<?php
define("HOST","localhost");
define("USER","root");
define("PASS","");
define("DB","northwind");
sleep(1);
$db = new mysqli(HOST,USER,PASS,DB);
if ($db->connect_error) {
    //  akan dieksekusi ketika terjadi error
    http_response_code(500);
    die("Connection failed: {$db->connect_error}");
}

$begin = isset($_GET['begin']) ? $_GET['begin']: 0;
$sql = "SELECT * FROM products ORDER BY ProductName asc limit {$begin},12";
$result = $db -> query($sql);
$data_json = [];
while ($data = $result->fetch_assoc()){
    array_push($data_json, $data);
}
header("Content-Type: application/json");
echo json_encode($data_json);


