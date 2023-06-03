<?php include "connect.php" ?>
<div class="container" style="min-height:500 ;">
  <table class="table table-bordered">
    <tr>
    
      <th>Name</th>
      <th>email</th>
      <th>subject</th>
      <th>message</th>
    
    </tr>
    <?php
    $select_personal ="SELECT * FROM personal";
    $result = mysqli_query($con,$select_personal);
    foreach ($result as $row) {
    ?>
      <tr>

        <td><?= $row['name']; ?></td>
        <td><?= $row['email']; ?></td>
        <td><?= $row['subject']; ?></td>
       <td><?= $row['message']; ?></td>



      </tr>
      <?php 
    } ?>
  </table>
    </div>