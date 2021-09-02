<h1>Daftar Mahasiswa</h2>
<br></br>
<?php
    include 'koneksi.php';
    $db     = new Database();
    $con    = $db->Connect();

    $query  = mysqli_query($con,"select * from tbsiswa");
    $res = $query->num_rows;

    if ($res > 0) {
        echo "<table border='1px solid black'>
            <tr>
                <th>ID</th>
                <th>NAMA</th>
                <th>NPM</th>
                <th>Action</th>
            </tr>";
                $no = 0;
                while($data = mysqli_fetch_array($query)){
                    echo " <tr>
                                <td>".$data["id_si"]."</td>
                                <td>".$data["nama"]."</td>
                                <td>".$data["npm"]."</td>
                                <td>
                                   <a href='latihan2.php?id_si=".$data["id_si"].">'>Tambah</a>
                                   <a href='latihan3.php?id_si=".$data["id_si"].">'>Edit</a>
                                   <a href='latihan4.php?id_si=".$data["id_si"].">'>Hapus</a>
                                </td>
                            </tr>";
                }
        echo "</table>";
    }else{
        echo "0 results";
    }
?>


