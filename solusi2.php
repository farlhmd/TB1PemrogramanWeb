<?php  
//code by farhan ilhamdi
 require('db_connect.php');

if (isset($_POST['varUSER']) and isset($_POST['varPWD'])){

$username = $_POST['varUSER'];
$password = $_POST['varPWD'];

$query = "SELECT * FROM `MAHASISWA` WHERE NIM='$username' and PASSWORD='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){
echo "<script type='text/javascript'>alert('LOGIN SUKSES!')</script>";

}else{
echo "<script type='text/javascript'>alert('USERNAME ATAU PASSWORD SALAH!')</script>";
}
}
?>