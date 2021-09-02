<h1>Edit Mahasiswa</h1>
<a href="index.php?id_si=<?php echo base64_encode(1);?>"><= Kembali</a>
 <br></br>   
<?php
    include 'koneksi.php';
    require("csrf.php");
    $db     = new Database();
    $con    = $db->Connect();
    $id_si     = $_GET['id_si'];
    $data   = mysqli_query($con,"SELECT * FROM tbsiswa WHERE id_si='$id_si'");
    $d = mysqli_fetch_array($data);   


    if(isset($_POST['proses'])){

    }

        if (validation()==true)      
    {

        mysqli_query($con, "UPDATE tbsiswa  SET nama = '$_POST[nama]',npm = '$_POST[npm]'
        WHERE id_si = '$_GET[id_si]'");
        echo "<script>alert('Data Berhasil Diupdate')('location:latihan1.php');</script>";
    
    }else{
      echo "<script>alert('csrf token tidak sesui')('location:latihan1.php');</script>"; 
    }

?>

<form action="" method="POST">
    <input type="hidden" name="csrf_name" value="<?php echo createtoken();?>"/>
    <input type="text" name="nama" value="<?php echo $d['nama'];?>">
    <input type="text" name="npm" value="<?php echo $d['npm'];?>">
    <input type="submit" name="proses" value="Update">
</form>
