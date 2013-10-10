<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pemrosesan Form</title>
</head>

<body>
<p>
  <?PHP
$nama=$_POST['user'];
$pass=$_POST['pass'];
if ($nama=="arislamania" && $pass=="1234"){
echo '<p align="center" style="font-size:24px; color:#03F; font-stretch:inherit"> Login Succsess</p>';
include ("sukses.php");}
else {
echo '<p align="center" style="font-size:24px; color:#F00; font-stretch:inherit"> Login Failed </p>';
include ("index.php");}	
?>
<p style=" color:#03F">
</body>
</html>