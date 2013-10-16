<html>
    <head>
    <title>Kalkulator</title>
    <style>
       .text {
            text-align: center;
            }                                  
    </style>
    </head>
    <body bgcolor="#A2AA">
            <div class="text">
            <p>
                        <h2> Kalkulator </h2>
                        <form name="form" onsubmit="return val()" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                        <input name="nilai1" type="text" placeholder="Nilai Pertama" value="<?php echo isset($_POST['nilai1']) ? $_POST['nilai1'] : '' ?>">
                        <select name="operasi">
                            <option value="x"> x </option>
                            <option value=":"> / </option>
                            <option value="+"> + </option>
                            <option value="-"> - </option>
                        </select>
                        <input name="nilai2" type="text" placeholder="Nilai Kedua" value="<?php echo isset($_POST['nilai2']) ? $_POST['nilai2'] : '' ?>">
                        <br>
                        <button name="exec" type="submit">=</button>
                        <br><br>
                        <input name="txt" type="text" placeholder="Hasil" value="<?php
                             $nilai1 = $_POST['nilai1'];
                             $nilai2 = $_POST['nilai2'];
                             $operasi = $_POST['operasi'];
							if(isset($nilai1) && isset($nilai2)){
                             if($operasi=="x"){
                             echo $nilai1 * $nilai2;
							}else if($operasi==":"){
                            echo $nilai1 / $nilai2;
                            }else if($operasi=="+"){
                            echo $nilai1 + $nilai2;
                            }else if($operasi=="-"){
                            echo $nilai1 - $nilai2;
                            }
                    }
                    ?>">
                    </form>
                     
                </p>     
        <script>
                function val(){
                                var nilai1 = document.forms["form"]["nilai1"].value;
                                if(nilai1==null||nilai1==""){
                                        alert("Nilai tidak boleh kosong!")
                                        document.getElementById("nilai1").focus();
                                        return false;
                                }
                                
                                var nilai2 = document.forms["form"]["nilai2"].value;
                                if(nilai2==null||nilai2==""){
                                        alert("Nilai tidak boleh kosong!")
                                        document.getElementById("nilai2").focus();
                                        return false;
                                }
                        }
        </script>
    </body>
</html>