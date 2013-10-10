<html> 
<head>
  <title>CheckBox Preselecting</title>
</head>
 
<body>
  <form action="<?php $_SERVER['PHP'];?>" method="post">
    Daftar Julukan Klub ISL Jawa Timur:
    <br /><input type="checkbox" name="ISL[]" value="Laskar Joko Tingkir"checked=" 
<?PHP 
{echo 'selected="selected"';}
?>"
    />PERSELA <br />
 
    <input type="checkbox" name="ISL[]" value="Laskar Joko Samudro"
    />PERSEGRES <br />
 
    <input type="checkbox" name="ISL[]" value="Singo Edan"
    />AREMA <br />
	
	<input type="checkbox" name="ISL[]" value="Laskar Sapeh Kerap"
    />PERSEPAM <br />
	
	<input type="checkbox" name="ISL[]" value="Kadal Ijo"
    />PERSEBAYA <br />
	
	<input type="checkbox" name="ISL[]" value="Macan Putih"
    />PERSIK <br />
 
    <input type="submit" value="OK" />
  </form>
 
<?php
// Ekstrak nilai
if (isset($_POST['ISL'])) {
  foreach ($_POST['ISL'] as $key => $val) {
    echo $val . '<br />';
  }
}
// merupakan checkbox preselection, dimana checkbox PERSELA akan selalu tercentang
?>
</body>
</html> 