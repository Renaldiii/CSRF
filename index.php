<?php
$id = isset($_GET['id'])?$_GET['id']:"";
require("csrf.php");
?>
<table width="100%" height="100%" border="1">
	<tr height="5%">
		<td align="center">
			<a href="index.php?id_si=<?php echo base64_encode(1);?>">Mahasiswa</a>
			<a href="index.php?id_do=<?php echo base64_encode(2);?>">Dosen</a>
			<a href="index.php?id_mk=<?php echo base64_encode(3);?>">Matakulia</a>
			<a href="index.php?id=4">Nilai</a>			
		</td>
	</tr>
	<tr height="95%">
		<td valign="top" align="center">
			<?php
			$id_menu=base64_decode($_GET['$id']);
			if ($id_menu==0)
			{
			 include('halaman.php');
			}
			?>
			<?php
			$id_si=base64_decode($_GET['id_si']);
			if ($id_si==1)
			{
			 include('latihan1.php');
			}
			?>
			
			<?php
			$id_do=base64_decode($_GET['id_do']);
			if ($id_do==2)
			{
			 include('latihan5.php');
			}
			?>
			
			<?php
			$id_mk=base64_decode($_GET['id_mk']);
			if ($id_mk==3)
			{
			 include('latihan9.php');
			}
			?>
		</td>
	</tr>
</table>
