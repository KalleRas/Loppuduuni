<?php

require "dbconnection.php";
$dbcon = createDbConnection();

$invoice_item_id = 69;

$sql = "DELETE FROM invoice_items WHERE invoiceLineId = $invoice_item_id";
?>