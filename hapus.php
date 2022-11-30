<html>
<form action="proseshapus.php" method=post>
<center>
<h1>Detail Data</h1>
<hr>
<table border=1>
<?php
$id=$_GET['id'];
$conn=mysql_connect("localhost","root","");
mysql_select_db("db_buku_tamu");
$sql="select * from buku_tamu where id='$id'";
$hasil=mysql_query ($sql,$conn);
$row=mysql_fetch_row($hasil);
if ($row)
{ 
 do
 {
 list ($id, $nama_tamu,$alamat_tamu,$notelp_tamu,$pesan_tamu,
$tanggal_tamu)=$row;
 echo "<tr><td>Nama <td>$nama_tamu
 <tr><td>Alamat<td>$alamat_tamu
 <tr><td>No. Telepon<td>$notelp_tamu
 <tr><td>Pesan<td>$pesan_tamu
 <tr><td>Tanggal<td>$tanggal_tamu</table>";
 echo"<input type=hidden name=hapus_id_tamu value='$id'>";
 echo"<input type=hidden name=nama_tamu value='$nama_tamu'>"; 
 }
 while ($row=mysql_fetch_row($hasil));
 echo"<hr><input type=submit value='Konfirmasi Hapus'>";
}
else
{
echo "</table> <h2><font color=red>Data '$namabarang' Tidak Ada<h2>";
}
?>
</form>