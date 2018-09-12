<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Data Pegawai PHP</title>
</head>
<body>
    <h1>Formulir Data Pegawai</h1>
    <form action="save.php" method="post">
        <table width="454" border="0">
            <tr>
                <td width="159">NIP</td>
                <td width="279"><input type="text" name="nip" id="nip" size="55"> </td>
            </tr>
            <tr>
                <td width="159">Nama</td>
                <td width="279"><input type="text" name="nama" id="nama" size="55"> </td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td><input type="text" name="jabatan" id="jabatan" size="55"></td>
            </tr>
            <tr>
                <td>Golongan</td>
                <td><input type="text" name="golongan" id="golongan" size="55"></td>
            </tr>
        </table>
        <p>
            <input type="submit" name="button" id="button" value="Simpan">
            <input type="reset" name="button2" id="button2" value="Reset">
        </p>
</body>
</html>