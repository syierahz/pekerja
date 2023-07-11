<?php
include "config.php";

if (isset($_POST['submit'])){
      $id=$_POST['id'];
      $nama_pekerja=$_POST['nama_pekerja'];
      $no_kp=$_POST['no_kp'];
      $no_hp=$_POST['no_hp'];
      $jantina=$_POST['jantina'];

    $sql="insert into `info_pekerja`(id,nama_pekerja,no_kp,no_hp,jantina) values('$id','$nama_pekerja','$no_kp','$no_hp','$jantina')";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Data dimasukkan berjaya";
        header('location:halaman.php');
    }else{
     die(mysqli_error($con));
    }
} 
?>

<!--HTML Bermula -->

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
   <div class="container my-5">
   <div class="box mt-4">
     <h4 class="text-center text-striped">ADD MAKLUMAT</h4>
 </div>

    <form method="post">

    <div class="form-group">
         <label>ID</label>
         <input type="text" class="form-control" 
         placeholder="Sila isi nombor id anda" name="id" autocomplete="off">       
    </div>

    <br>
    
    <div class="form-group">
         <label>NAMA</label>
         <input type="text" class="form-control" 
         placeholder="Sila isi nama anda" name="nama_pekerja" autocomplete="off">       
    </div>

    <br>

    <div class="form-group">
         <label>NO KP</label>
         <input type="text" class="form-control" 
         placeholder="Sila isi nombor kad pengenalan anda" name="no_kp" autocomplete="off">        
    </div>

    <br>

    <div class="form-group">
         <label>NO HP</label>
         <input type="text" class="form-control" 
         placeholder="Sila isi nombor telefon anda" name="no_hp" autocomplete="off">   
    </div>

    <br>

    <div class="form-group">
         <label>JANTINA</label>
         <input type="text" class="form-control" 
         placeholder="Sila isi jantina anda" name="jantina" autocomplete="off">        
    </div>

    <br>
    <br>

    <button type="submit" 
            class="btn btn-primary"
            name="submit">Add</button>
    </form>
  </div>
</body>

</html>