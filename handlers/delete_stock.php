<?php

include_once('../database_model_stock.php');

$stock_id = isset($_REQUEST['stock_id']) ? $_REQUEST['stock_id'] : null;


$database = new Database();
$database->connectDB();

$status_code = $database->deleteStock(
	$stock_id);

$response_data = [ 'status_code' => $status_code];
echo json_encode( $status_code );

?>