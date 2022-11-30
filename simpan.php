<head>
<title>Buku Tamu</title>
</head>
<center>
<body>
<table border=1>
<?php
$nama_tamu=$_POST['nama_tamu'];
$alamat_tamu=$_POST['alamat_tamu'];
$notelp_tamu=$_POST['notelp_tamu'];
$pesan_tamu=$_POST['pesan_tamu'];
echo "<tr><td>Nama <td>$nama_tamu ";
echo "<tr><td>Alamat <td>$alamat_tamu ";
echo "<tr><td>No. Telp <td>$notelp_tamu ";
echo "<tr><td>Pesan <td>$pesan_tamu ";
if (($nama_tamu!="") && ($alamat_tamu!="") && ($notelp_tamu!="") &&
($pesan_tamu!=""))
{
 $conn=mysql_connect("localhost","root","");
 mysql_select_db("db_buku_tamu");
 $sql="insert into buku_tamu(nama_tamu, alamat_tamu, notelp_tamu, 
pesan_tamu,tanggal_bertamu) 
values('$nama_tamu','$alamat_tamu','$notelp_tamu','$pesan_tamu', 
now())";
 $hasil=mysql_query ($sql,$conn);
 if ($hasil)
 {
 echo"<tr><td colspan=2>Data telah disimpan!";
 }
 else
 {
 echo"<tr><td colspan=2>Data gagal disimpan!";
 }
}
else
{
 echo "<tr><td colspan=2>Data masih kosong!";
}
?>