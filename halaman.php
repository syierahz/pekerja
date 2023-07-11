<?php
include 'config.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEM PEKERJA</title>
    <link rel="stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <br>
<div class="container">
     <h4>ANISHOLDINGS SDN.BHD.</h4>
 <button class="btn btn-primary my-5 "><a href="tambah.php" class="text-light"type="button" data-toggle="modal"data-target="#addNewUserModal">ADD</a></button>
 
<div>

<div class="row mt-4">
     <h4 class="text-center text-striped">SISTEM PEKERJA</h4>
 </div> 

<br>
    <table class="table table-striped table-bordered text-center">
         <thead>
             <tr>
               <th scope="col">ID</th>
               <th scope="col">NAMA PEKERJA</th>
               <th scope="col">NO KP</th>
               <th scope="col">NO HP</th>
               <th scope="col">JANTINA</th>
               
             </tr>
         </thead>
  <body>

  <?php  
  
  $sql = "SELECT * FROM `info_pekerja`";
  $result=mysqli_query($con,$sql);
  if($result){
    while($row=mysqli_fetch_assoc($result)){
      $id=$row['id'];
      $nama_pekerja=$row['nama_pekerja'];
      $no_kp=$row['no_kp'];
      $no_hp=$row['no_hp'];
      $jantina=$row['jantina'];
      echo '<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$nama_pekerja.'</td>
      <td>'.$no_kp.'</td>
      <td>'.$no_hp.'</td>
      <td>'.$jantina.'</td>
     <td>
        <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">UPDATE</a></button>
        <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">DELETE</a></button>
     </td>
    </tr>';
    }
 }
  ?>
  </body>

   </table>

</div>

<button class="btn btn-primary my-5"><a href="logout.php" class="text-light"type="button" data-toggle="modal"data-target="#addNewUserModal">Log Out</a></button>
</body>

</html>

