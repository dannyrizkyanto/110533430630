<html>
<head>
	<title>Set Cookies</title>
</head>
<body>

<?php
    // Men-set nilai cookie
    setcookie('nama_cookie', 'nilai_cookie');
                
    echo $_COOKIE['nama_cookie'];
    ?>
                
    <p>
    Tekan Refresh (f5);
</body>
</html>