<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TARIF BUS</title>
</head>
<body>
    <center>
        <h1>Program Tarif Bus</h1>
        <p>
            <form action="" method="POST">
               namabus <input type="text" name="namabus" id=""><br>
               jurusan<select name="jurusan" id="">
                <option value="jakarta">jakarta</option>
                <option value="medan">medan</option>
               </select><br>
               <input type="submit" value="PROSES" name="proses">
            </form>
            <?php
            if (@$_POST ['proses']) {
                $namabus = @$_POST ['namabus'];
                $jurusan = @$_POST ['jurusan'];

                echo "namabus : " . $namabus . "<br>";
                echo "jurusan : " . $jurusan . "<br>";
                if ($jurusan == "jakarta") {
                    echo "tarif bus : Rp. 100.000";
                } else if ($jurusan == "medan") {
                    echo "tarif bus : Rp. 150.000";
                } else {
                    echo "jurusan tidak valid";
                } 

            }
            ?>
        </p>
    </center>
</body>
</html>