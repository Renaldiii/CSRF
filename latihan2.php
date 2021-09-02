<h1>Tambah Mahasiswa</h1>
<a href="index.php?id_si=<?php echo base64_encode(1);?>"><= Kembali</a>
<br></br>
<?php
    include 'koneksi.php';
    $db     = new Database();
    $con    = $db->Connect();

    //perintah insert ke database
    if(isset($_POST['proses']))
    {
        if (validation()==true) 
        {
        
         $query = mysqli_query($con,"INSERT INTO tbsiswa ( nama, npm) values('".$_POST['nama']."','".$_POST['npm']."')");
         echo "<script>alert('Data Berhasil Disimpan')('location:latihan1.php');</script>";
        
        }else{

            echo "<script>alert('csrf token tidak sesui')('location:latihan1.php');</script>";
        }
    }
?>

<form action="" method="POST">
    <input type="hidden" name="csrf_name" value="echo createtoken();">
    <input type="text" name="nama">
    <input type="text" name="npm">
    <input type="submit" name="proses" value="Simpan">
</form> 
