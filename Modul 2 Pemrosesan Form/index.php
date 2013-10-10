<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form Login</title>
<style type="text/css">
#box1 {
position: absolute;
left: 600px;
top: 110px;
width: 350px;
height: 300px;
z-index: 1;
font-size: 40px;
font-family: Verdana, Helvetica, sans-serif;
color: #06F;
background-color: #A2FFFF;
text-align: center;
}
#textbox {
position: absolute;
left: 650px;
top: 200px;
width: 350px;
height: 194px;
z-index: 2;
}
</style>
<script>
function cek(a) {
al = /^[A-Za-z]{1,}$/; //inputan harus huruf
return al.test(a);
}
function validasi(){
var x=document.forms["form"]["user"].value;
var y=document.forms["form"]["pass"].value;
if (x==null || x=="" && y==null || y=="") //nilai yang diinputkan tidak boleh kosong
  {
  alert("Username atau Password Harus diisi");
  form.user.focus();
  return false;
  }
if (!cek(x) || !cek(y)){ //pemanggilan fungsi cek
alert ('Username Dan Password harus huruf!!');
return false;
}}
</script>
</head>
<div id="box1" align="left">
<label>LOGIN</label>
<hr align="center" width="300" color="#00CCFF">
</div>
<div id="textbox" align="left">
<form name="form" method="POST" action="<?php $_SERVER['PHP'];
   echo "PForm.php";?>" onSubmit="return val()">
<label>Username/ID :</label>
<br>
<input type="text" name="user" id="user" value="<?php echo isset($_POST['user']) ? $_POST['user'] : '';?>">
<br><br>
<label>Password :</label>
<br>
<input type="password" name="pass" id="pass" >
<br><br>
<input type="submit" name="Login" value="Login">
</form>
</div>
</body>
</html>