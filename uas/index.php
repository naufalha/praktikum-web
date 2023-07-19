<?php 
    session_start();
    
    if(isset($_SESSION['username'])){
   // Session masih aktif, arahkan pengguna ke halaman beranda atau halaman lain yang sesuai
   header("Location: crud_thing.php");
   exit();
    }
    error_reporting(E_ALL & E_NOTICE & E_DEPRECATED);
    include "koneksi.php";

    $username = $_POST['username'];
    $password = $_POST['password'];
    $submit = $_POST['submit'];

    if($submit) {
        $sql = "SELECT * FROM user WHERE nama='$username' AND password='$password'";
        $query = mysqli_query($koneksi, $sql);
        $row = mysqli_fetch_array($query);

        if($row['nama']!=""){
            // berhasil login
            
            $_SESSION['username'] = $row['nama'];
            $_SESSION['id'] = $row['id'];
?>  
            <script language script="Javascript">
                alert('selamat datang <?php echo $row['nama']; ?>');
                document.location='crud_thing.php';
            </script>
<?php 
        }else{
            // gagal login
?>
        <script language script="Javascript">
            alert('Gagal Login');
            document.location='index.php';
        </script>
<?php
        }
    }
?>
<!-- <form action="login.php" method="post">
    <p align='center'>
        Username : <input type="text" name="username"> <br>
        Password : <input type="password" name="password"> <br>
        <input type="submit" name="submit">
    </p>
</form> -->

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
    <link rel="stylesheet" href="bootstrap-5.3.0-dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">Login</h2>
                <form action="index.php" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan password">
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary"></input>
                </form>
            </div>
        </div>
    </div>
    
   
    <script src="bootstrap-5.3.0-dist/js/bootstrap.min.js"></script>
</body>
</html>
