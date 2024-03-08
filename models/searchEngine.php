<?php

include('../config/database.php');

$value = $_POST['search'];

   $sql = "SELECT * FROM employee WHERE (name LIKE '%$value%' OR position LIKE '%$value%')";
    $result = $conn->query($sql);

   if ($result->num_rows > 0) {
        // output data of each row
       while ($row = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td style="text-align: center;"><?= $row['position'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td class="d-grid">
                    <button type="button" class="btn btn-sm btn-block btn-success" 
                    data-bs-toggle="modal" 
                    data-bs-target="#view-info">View</button>
                    </td>
                </tr>
            <?php
       }
  } else {
        echo "0 results";
   }
   $conn->close(); 