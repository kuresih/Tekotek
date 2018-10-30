<!DOCTYPE html>
<html>
<head>
	<title>TekOtek</title>
</head>
<body>
	<?php
	echo "<font face='Helvatica'>Tekotek anak ayam turun 100</font> <br>";
	$tekotekotek = 99;
	for ($i=$tekotekotek;$i > 0; $i--) {
		if($i % 2 == 0){
			echo "<font face ='Helvatica'><font color='#964B00'>Mati satu tinggal $i</font>"; echo "<br>";
		} 
	else{
		echo "<font face ='Helvatica'><font color='FF8C00'>Mati satu tinggal $i</font>"; echo "<br>";
			}

		}

	?>
</body>
</html>