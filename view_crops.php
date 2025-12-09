<?php
$crops = json_decode(file_get_contents("data/crops.json"), true);
?>
<!DOCTYPE html>
<html>

<head>
     <title>View Crops</title>
</head>

<body>
     <h2>All Crops</h2>
     <a href="add_crop.php">Add New Crop</a><br><br>
     <table border="1" cellpadding="5">
          <tr>
               <th>Name</th>
               <th>Type</th>
               <th>Quantity</th>
               <th>Date</th>
               <th>Action</th>
          </tr>
          <?php foreach ($crops as $crop): ?>
          <tr>
               <td><?= $crop['name'] ?></td>
               <td><?= $crop['type'] ?></td>
               <td><?= $crop['quantity'] ?></td>
               <td><?= $crop['date'] ?></td>
               <td><a href="delete_crop.php?id=<?= $crop['id'] ?>">Delete</a></td>
          </tr>
          <?php endforeach; ?>
     </table>
</body>

</html>