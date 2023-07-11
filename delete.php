<?php 
include 'config.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `info_pekerja` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
       // echo "Padam berjaya";
       header('location:halaman.php');
    }else{
        die(mysqli_error($con));   
    }
}

?>