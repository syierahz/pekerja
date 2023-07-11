<?php
include "config.php"; 

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    if ($username === 'admin' && $password === '125') {
        echo "<script>alert(' BERJAYA');
        window.location='halaman.php'</script>";
        
        }else{
        echo "<script>alert('GAGAL!'); 
        window.location='index.php'</script>";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEM PEKERJA</title>
    <link rel="stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    
    <br>
    <br>
    <h2 style="text-align:center;">SELAMAT DATANG KE SISTEM PEKERJA</h2>
    <body>
   <div class="container my-5">
    <form method="post">

    <div class="form-group">
         <label for="username">Username</label>
         <input type="text" class="form-control" name="username" autocomplete="off" required>       
    </div>

    <br>

    <div class="form-group">
         <label for="password">Password</label>
         <input type="text" class="form-control" name="password" autocomplete="off" required>       
    </div>

    <br>

    <button type="submit" class="btn btn-primary" name="login">Login</button>

    <!--<?php if (isset($error)) { ?>
        <div><?php echo $error; ?></div>
    <?php } ?>
    <form method="POST" action="">
        <label for="username">Username : </label>
        <input type="text" name="username" required>
        <br>
        <br>
        <label for="password">Password : </label>
        <input type="password" name="password" required>
        <br>
        <br>
        <input type="submit" name="login" value="Login">-->
    </form>
</body>
</html>