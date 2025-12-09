<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $crops = json_decode(file_get_contents("data/crops.json"), true);
    $newCrop = [
        "id" => uniqid(),
        "name" => $_POST['name'],
        "type" => $_POST['type'],
        "quantity" => $_POST['quantity'],
        "date" => $_POST['date']
    ];
    $crops[] = $newCrop;
    file_put_contents("data/crops.json", json_encode($crops, JSON_PRETTY_PRINT));
    echo "<p>✅ Crop added successfully!</p><a href='view_crops.php'>View Crops</a>";
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
     <title>Add Crop</title>
</head>

<body>
     <h2>Add Crop</h2>
     <form method="post">
          <label>Crop Name:</label><input type="text" name="name" required><br>
          <label>Type:</label><input type="text" name="type" required><br>
          <label>Quantity:</label><input type="number" name="quantity" required><br>
          <label>Date Planted:</label><input type="date" name="date" required><br>
          <button type="submit">Save</button>
     </form>
</body>

</html>