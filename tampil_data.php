<html>
<title>Tampil Data</title>
<body>
<h2><strong>Data Pegawai Yang Berhasil Diinput adalah</strong><br>
</h2>
<table width="506" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td width="204" height="27" bgcolor="#00CCFF"><div align="center"><strong>NAMA</strong></div></td>
    <td width="190" bgcolor="#33FF66"><div align="center"><strong>NIP</strong></div></td>
    <td width="90" bgcolor="#FFFF99"><div align="center"><strong>GOLONGAN</strong></div></td>
      </tr>
 <?php
 $koneksi = mysql_connect("localhost","root","");
 mysql_select_db("pegawai");
 
 $query = "select * from tabel_pegawai";
 
$hasil= mysql_query($query);
 
 while($row=mysql_fetch_array($hasil))
 {
  echo '<tr>
    <td width="204" bgcolor="#00CCFF"><div align="center">'?><?php echo $row[0].'</div></td>
    <td width="190" bgcolor="#33FF66"><div align="center">';?><?php echo $row[1].'</div></td>
    <td width="90" bgcolor="#FFFF99"><div align="center">';?><?php echo $row[2].'</div></td>
  </tr>';?>
 <?php
 }
  mysql_close($koneksi);
 ?>
</table>
<a href="form_input.php">Kebali Ke Form Input</a>
</body>
</html>