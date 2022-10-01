<?php // ********************************
// Part 5:  Display the following array in an HTML table with Name, Email and Status table headers.
// Specify PHP status with red color.
//    $students = [
//        ['name' => 'Alaa', 'email' => 'alaa@test.com', 'status' => 'PHP'],
//        ['name' => 'Shamy', 'email' => 'shamy@test.com', 'status' => '.Net'],
//        ['name' => 'Youssef', 'email' => 'youssef@test.com', 'status' => 'Testing'],
//        ['name' => 'Waleid', 'email' => 'waleid@test.com', 'status' => 'PHP'],
//        ['name' => 'Rahma', 'email' => 'rahma@test.com', 'status' => 'Front End'],
//    ];
$students=[
           ['name' => 'Alaa', 'email' => 'alaa@test.com', 'status' => 'PHP'],
           ['name' => 'Shamy', 'email' => 'shamy@test.com', 'status' => '.Net'],
           ['name' => 'Youssef', 'email' => 'youssef@test.com', 'status' => 'Testing'],
           ['name' => 'Waleid', 'email' => 'waleid@test.com', 'status' => 'PHP'],
           ['name' => 'Rahma', 'email' => 'rahma@test.com', 'status' => 'Front End'],
       ];




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab2_PHP</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    foreach($students as $key => $value){
    ?>
    <tr>
    <?Php  if($value['status'] =='PHP'){?>
      <td scope="row" style="color:red;"><?php echo $value['name'];?></td>
      <td scope="row" style="color:red;"><?php echo $value['email'];?> </td>
     
      <td scope="row" style="color:red;"><?php echo $value['status'];?></td>
      <?php  }else{?>
        <td scope="row"><?php echo $value['name'];?></td>
      <td scope="row"><?php echo $value['email'];?> </td>
     
        <td scope="row"><?php echo $value['status'];?></td>
        <?php }?>
    </tr>
    <?php
     }
    ?>
  </tbody>
</table>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    
</body>
</html>