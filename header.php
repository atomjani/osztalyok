
<?php
session_start();
header('Content-type: text/plain; charset=utf-8'); 

include_once 'SplClassLoader.php';


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!--<html>
<head>
	
	<title>Kedvenc oldalaim, ajánlásaim, projekteim, feladataim stb.(Fejlesztési verzió.)</title>
	<link rel="stylesheet" type="text/css" href="/style.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

</head>
<body>
<div id="felsodoboz">
	<div id="felsobal">
<div id="profilmenu">
	<?php
//if (isset($_SESSION['felhasznalonev']))
//	{
 //       include_once ('/kinezet/headertag.php');
//		}
//		else 
                    include_once '/kinezet/headervendeg.php';
	
?>
</div>
		<div id="cimsor">
		Kedvenc oldalaim, ajánlásaim, projekteim, feladataim stb. (Fejlesztési verzió.)
		</div>
	</div>
	<div class="clear"></div>

	<div id="menu">
		<a href="/">főoldal</a><a href="/szerkesztes.php">Szerkesztői panel(még nincs) </a><a href="/beallitasok.php">Beállítások(még nincs) </a><a href="/utmutato.php">Útmutató(még nincs) </a><a href="/kerdesek.php">Kérdések(még nincs) </a><a href="/fejlemenyek.php">Fejlemények(még nincs)</a>
		</div>
</div>
<div id="kozlemeny">
		Már nem gond, ha másik böngészőben, gépen, helyen vagy, minden elmentett webcímet, fontosabb információt ezentúl bárhol elérhetsz, megoszthatsz másoknak.
	</div>
<?php
//<meta name="Description" content="Megadod, hogy mid van otthon, vagy mit termelsz, a másik mit szeret, vagy a legolcsóbb összetevőket, akkor kidobja a neked megfelelő ételek receptjeit, melyeket meg tudsz csinálni."/>
//

//<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
//echo '<div id="felsodoboz"><div id="cim">Kedvenc oldalaim, ajánlásaim, projekteim, feladataim stb.(Fejlesztési verzió.)</div><br/><a href="/">főoldal</a><a href="/szerkesztes.php">Szerkesztői panel(még nincs) </a><a href="/beallitasok.php">Beállítások(még nincs) </a><a href="/kerdesek.php">Kérdések(még nincs) </a><a href="/fejlemenyek.php">Fejlemények(még nincs)</a>Beléptető/regisztráló<br/>ablak</div><br/>';


//echo '<div id="fejlec"><div id="menufejlec">Kedvenc oldalaim, ajánlásaim, projekteim, feladataim stb.(Fejlesztési verzió.)</div><div id="menufejlec"><a href="/">főoldal</a><a href="/szerkesztes.php">Szerkesztői panel(még nincs) </a><a href="/beallitasok.php">Beállítások(még nincs) </a><a href="/kerdesek.php">Kérdések(még nincs) </a><a href="/fejlemenyek.php">Fejlemények(még nincs)</a></div><div id="login">Beléptető/regisztráló<br/>ablak</div></div><br/>';
//echo "Akik segítenek másokon, azoknak egy hasznos eszköz lesz ez. Fejlesztési verzió.<br/>";
	?>
<div class="clear"></div>-->