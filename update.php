<?php
include "config.php";
$id=$_GET['updateid'];
$sql="Select * from `info_pekerja` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$id=$row['id'];
$nama_pekerja=$row['nama_pekerja'];
$no_kp=$row['no_kp'];
$no_hp=$row['no_hp'];
$jantina=$row['jantina'];

if (isset($_POST['submit'])){
      $no_kp=$_POST['no_kp'];
      $nama_pekerja=$_POST['nama_pekerja'];
      $no_hp=$_POST['no_hp'];
      $jantina=$_POST['jantina'];

      $sql="update `info_pekerja` set id=$id,nama_pekerja='$nama_pekerja',no_kp='$no_kp',no_hp='$no_hp',jantina='$jantina' where id=$id";
      $result=mysqli_query($con,$sql);
      
      if($result){
        // echo "kemaskini berjaya";
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
<div class="container">
 <button class="btn btn-danger my-5 "><a href="halaman.php" class="text-light"type="button" data-toggle="modal"data-target="#addNewUserModal">BACK</a></button>

 <br>

<div>
   <div class="container my-5">
   <div class="box mt-4">
   <h4 class="text-center text-striped">UPDATE MAKLUMAT</h4>
    <form method="post">

    <div class="form-group">
         <label>IC</label>
         <input type="text" class="form-control" 
         placeholder="Sila isi nombor kad pengenalan anda" name="no_kp" autocomplete="off" value=<?php echo $no_kp;?>>        
    </div>

 <br>

    <div class="form-group">
         <label>NAMA</label>
         <input type="text" class="form-control" 
         placeholder="Sila isi nama anda" name="nama_pekerja" autocomplete="off" value=<?php
         echo $nama_pekerja;?>>
    </div>

    <br>

    <div class="form-group">
         <label>HP</label>
         <input type="text" class="form-control" 
         placeholder="Sila isi nombor telefon anda" name="no_hp" autocomplete="off" value=<?php echo $no_hp;?>>   
    </div>

    <br>

    <div class="form-group">
    <label>JANTINA</label>
    <select class="form-select appearance-none block w-full px-3 mt-2 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example" name="jantina" required>
                    <option value="lelaki">--Sila Pilih--</option>
                    <option value="lelaki" <?php if ($jantina == "LELAKI") echo "selected"; ?>>LELAKI</option>
                    <option value="Perempuan" <?php if ($jantina == "PEREMPUAN") echo "selected"; ?>>PEREMPUAN</option>
      </select>  

    <br>
    <br>
    
    <button type="submit" 
            class="btn btn-primary"
            name="submit">Update</button>
    </form>
  </div>


</body>

</html>