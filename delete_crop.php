<?php
$id = $_GET['id'];
$crops = json_decode(file_get_contents("data/crops.json"), true);
$crops = array_filter($crops, fn($c) => $c['id'] != $id);
file_put_contents("data/crops.json", json_encode(array_values($crops), JSON_PRETTY_PRINT));
header("Location: view_crops.php");
exit;
?>