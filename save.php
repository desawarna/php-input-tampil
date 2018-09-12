<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simpan Data Pegawai PHP</title>
</head>
<body>
    <?php
    $nip = $_POST[nip];
    $nama = $_POST[nama];
    $jabatan = $_POST[jabatan];
    $golongan = $_POST[golongan];
    if($nip=="")
    {
        echo "upss nip masih kosong";
        include ('index.php');
    }
    elseif ($nama=="")
    {
        echo "ups nama masih kosong";
        include ('index.php');
    }
    elseif ($jabatan=="")
    {
        echo "ups jabatan masih kosong";
        include ('index.php');
    }
    elseif ($golongan=="")
    {
        echo "ups golongan masih kosong";
        include ('index.php');
    }
    else
    {
        $koneksi=mysql_connect("localhost","root","");
        mysql_select_db("pegawai");

        $query = "insert into datapegawai (nip,nama,jabatan,golongan) values ('".$nip."','".$nama."','".$jabatan."','".$golongan."')";
        echo 'Data berhasil disimpan <a href="view.php">View Tampilkan Data</a> atau <a href="index.php">Kembali Ke Form</a>';
        mysql_query($query);
        mysql_close($koneksi);
    }
    ?>
</body>
</html>