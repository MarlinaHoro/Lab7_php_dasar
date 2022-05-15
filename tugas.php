<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        * {
            padding: 0;
            margin: 0;
        }

        body {
            font-size: 16px;
            font-weight: 500px;
            color: rgb(32, 32, 32);
        }

        .conteiner {
            margin: 20px 15px;
            width: 30%;
        }

        hr {
            margin-bottom: 10px;
            margin-top: 10px;
        }

        .kirim {
            margin-top: 20px;
            width: 60%;
            padding: 5px 10px;
        }

        .nama {
            margin-bottom: 10px;
            margin-top: 5px;
            width: 60%;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="conteiner">
        <h1>BIODATA</h1>
        <hr>
        <form action="" method="post">
            <label for="">Nama </label>
            <br>
            <input type="text" class="nama" name="nama">
            <br>
            <label for="">Tanggal Lahir</label>
            <br>
            <input type="date" class="nama" name="tanggal" value="">
            <br>
            <label for="job">Pekerjaan</label>
            <br>
            <select name="job" id="job" class="nama">
                <option value="pilih">pilih....</option>
                <option value="karyawan">karyawan</option>
                <option value="Guru">Guru</option>
            </select>
            <br>
            <input type="submit" class="kirim" name="submit" value="Submit">
            <hr>
        </form>

        <div class="Output">
            <?php
            echo 'Nama saya : ' . @$_POST['nama'];
            echo '<br>';
            // Output tanggal lahir
            $tanggal_lahir = new DateTime(@$_POST['tanggal']);
            $sekarang = new DateTime("today");
            if ($tanggal_lahir > $sekarang) {
                $thn = "0";
                $bln = "0";
                $tgl = "0";
            }
            $thn = $sekarang->diff($tanggal_lahir)->y;
            echo "Umur Saya : " . $thn . ' TAHUN';
            echo '<br>';

            // output pekerjaan
            echo 'Pekerjaan : ' . @$_POST['job'];
            echo '<br>';
            if (@$_POST['job'] == 'karyawan') {
                echo 'Gaji Rp. 3.000.000 juta';
            } else if (@$_POST['job'] == 'Guru') {
                echo 'Gaji Rp. 2.500.000 juta';
            } else {
                echo 'tidaka memiliki pekerjaan';
            }
            ?>
        </div>
    </div>
</body>