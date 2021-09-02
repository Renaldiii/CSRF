
<h1>DELET</h1>
<a href="index.php?id_si=<?php echo base64_encode(1);?>"><= Kembali</a>
<br></br>
<?php 
    include 'koneksi.php';
    $db     = new Database();
    $con    = $db->Connect();
    $id_si     = $_GET['id_si'];

    $data = mysqli_query($con,"DELETE FROM tbsiswa WHERE id_si='$id_si'");
     echo "<script>alert('Data Berhasil Dihapus')('location:latihan1.php');</script>";
?> 