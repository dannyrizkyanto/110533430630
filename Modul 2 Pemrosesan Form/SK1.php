<html>
<head>
  <title>Seleksi Preselecting</title>
</head>
 
<body>
 
  <form action="<?php $_SERVER['PHP'];?>" method="post">
    Tahun Lulusan :
    <select name="year">
	  <option value="2013">2013
      <option value="2012">2012 
      <option value="2011">2011
	  <option value="2010">2010
      <option value="2009"selected="
    <?PHP
	
{echo 'selected="selected"';}
?>">2009
    </select>
    <input type="submit" value="OK" />
  </form>
 
<?php
if (isset($_POST['year'])) {
  echo $_POST['year'];
}
//script diatas merupakan seleksi preselecting, dengan option seleksi berupa tahun, dimana option tahun 2009 sebagai preselecting
//tahun 2009 akan selalu terpilih, jika kita memilih tahun lain, maka akan seleksi akan kembali pada tahun 2009
?>
</body>
</html>