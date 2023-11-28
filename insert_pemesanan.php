<?php 
include "db_connect.php"; 
$nama = $_POST['nama'];
$pesanan = $_POST['pesanan'];
$jumlah = $_POST['jumlah'];
$alamat = $_POST['alamat'];
$notelepon = $_POST['notelepon'];
$query=mysqli_query($kon, "INSERT INTO pemesanan(nama, pesanan, jumlah, alamat, notelepon)
VALUES ('$nama', '$pesanan', '$jumlah', '$alamat', '$notelepon')")or die (mysqli_error()); 
 
if($query) {
?>
<script language="JavaScript">
   document.location='index.php'</script> 
<?php 
} 
?>