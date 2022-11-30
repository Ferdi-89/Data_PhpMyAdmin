<?php
//Session akan dibahas pada materi selanjutnya.
include "session_check.php";
?>
<head>
<title>Buku Tamu</title>
</head>
<center>
<body>
 <h1>DAFTAR TAMU</h1>
 <h2>Universitas Komputer Indonesia</h2>
 <hr> 
 <table border=1>
 <?php
$conn=mysql_connect("localhost","root","");
 mysql_select_db("db_buku_tamu");
$sql="select * from buku_tamu order by tanggal_bertamu desc";
$hasil=mysql_query ($sql,$conn);
$row=mysql_fetch_row($hasil);
echo "<tr> <td>No
 <td>Nama Tamu
 <td>Alamat
 <td>No. Telepon 
 <td>Pesan 
 <td> Tanggal Bertamu
 <td> Aksi";
if ($row)
{
 $n=1;
 do
 {
 list ($id, $nama_tamu,$alamat_tamu,$notelp_tamu,$pesan_tamu,
$tanggal_tamu)=$row;
 echo "<tr><td>$n
 <td>$nama_tamu
 <td>$alamat_tamu
 <td>$notelp_tamu
 <td>$pesan_tamu
 <td>$tanggal_tamu
 <td><a href='hapus.php?id=$id'>Hapus</a>";
 $n=$n+1; 
 }
 while ($row=mysql_fetch_row($hasil));
}
else
{
echo "<tr><td colspan=7> <center>Tidak ada data";
}
?>
</body>