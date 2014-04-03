	<?php

$email="atomjani@gmail.com";
	$default = "http://www.somewhere.com/homestar.jpg";
	$size = 25;
		$grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;
		
		echo " <img src=\"".$grav_url."\" alt=\"\" /> ".$_SESSION['felhasznalonev']."|Leveleim(Új)|Értesítéseim(Új) | <a href=\"kijelentkezes.php\">Kijelentkezés</a>";

?>