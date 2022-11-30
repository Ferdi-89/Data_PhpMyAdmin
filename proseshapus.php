<?php
$id_tamu=$_POST['hapus_id_tamu'];
$nama_tamu=$_POST['nama_tamu'];
$conn=mysql_connect("localhost","root","");
mysql_select_db("db_buku_tamu");
$sql="delete from buku_tamu where id='$id_tamu'";
$hasil=mysql_query ($sql,$conn);
if($hasil){
 echo"<br>Data $nama_tamu telah dihapus!";
}else{
 echo"<br>Data $nama_tamu gagal dihapus!";
}
?>
