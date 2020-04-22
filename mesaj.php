<?php 

if (isset($_POST['gonder'])) {
	
	$isim = $_POST['firstname'];
	$neden =$_POST['sebep'];
	$mesaj = $_POST['subject'];

 $file = fopen('a.php', 'a');

$yaz ="<font color='green'>İsmi :</font><font color='red'>".htmlspecialchars($isim)." </font><br>

<font color='green'>Sebep :</font><font color='red'>".$neden."</font><br>

<font color='green'>Mesajı:</font><font color='red'>".htmlspecialchars($mesaj)."</font><br><hr>";


fwrite($file,$yaz);

fclose($file);

header('Location:index.php?mesaj=ok');

exit();

}




 ?>
