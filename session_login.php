<?php
session_start();
//setting dahulu xampp -> apache -> bin -> php.ini baris 976 
ganti auto start dengan 1
$username=$_POST['username'];
$pw=$_POST['password'];
$conn=mysql_connect("localhost","root","");
mysql_select_db("db_buku_tamu");
$sql="select * from admin where username='$username' and 
password=sha1('$pw')";
$hasil=mysql_query ($sql,$conn);
$row=mysql_fetch_row($hasil);
if ($row)
{ 
 do
 { 
 $_SESSION['username']=$_POST['username']; 
 header ("location: session_securepage.php");
 }
 while ($row=mysql_fetch_row($hasil));
 
} 
else
{
 echo "<center><font color=red>USERNAME DAN PASSWORD SALAH! 
</font>";
 include "session_login.html"; 
}