<?php
require_once('Enhanced_CS.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>STEMMING</title>
</head>
<body>
<h1 align="center">INFORMATION RETRIVAL</h1>
<h3 align="center">PENCARIAN KATA DASAR</h3>
<div align="center">
<form method="post" action="">
<input type="text" name="kata" id="kata" size="20" value="<?php if(isset($_POST['kata'])){ echo $_POST['kata']; }else{ echo '';}?>">
<input class="btnForm" type="submit" name="submit" value="cari"/>
</form>
<p>
  <?php
if(isset($_POST['kata'])){
	$teksAsli = $_POST['kata'];
	echo "Teks asli : ".$teksAsli.'<br/>';
	$stemming = Enhanced_CS($teksAsli);
	echo "Kata dasar : ".$stemming.'<br/>';
}

?>
</p>
<a href="upload.php">
<p>
  <input type="submit" name="uploadPDF" id="uploadPDF" value="upload PDF">
</p>
<p><a href="query.php">
<input type="submit" name="carikeyword" id="carikeyword" value="pencarian keyword">
</p>
<p><a href="download.php">
  <input type="submit" name="unduh" id="unduh" value="unduh file">
</p>
</form>
</div>
<p>&nbsp;</p>
</body>
</html>