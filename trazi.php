¨<?php
$poslovnica=$_GET['name'];
$broj=$_GET['broj'];
$iduci=$_GET['iduci'];
$zakolko=$_GET['zakolko'];

//recimo da imamo 2 podrzane poslovnice
$MAKS=2;
$ime[1]="Policijska Uprava Zagrebacka - Petrinjska";
$ime[2]="Hrvatska Posta - ulica Nikole Jurisica Zagreb";

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1 max-scale=1" />
        <title>WhyWait 1.0</title>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />
    <script src="js/jquery-1.4.2.min.js"></script>  
<style>
.text-align-center {
  text-align: center;
}
.text-align-right {
  text-align: right;
}
#velikaslova {
font-size: 20pt;
}
h1 {
text-align: center;
}
</style>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js">
        </script>
        <script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js">
        </script>
    </head>
    <body>
        <div data-role="page" id="page3">
            <div data-role="content">
                <h1>
                    <center><img src="ikona.jpg" height="30" />WhyWait?</center>
                </h1>
                <h3>Gdje zelite i&#263;i dok &#269;ekate u blizini poslovnice:</h3>
                <span id="velikaslova"><?php echo $ime[$poslovnica]; ?></span>
                <form action="gdje.php">
<table>
<tr><td><input type="checkbox" name="g0" value="Javni WC" /></td>
<td><input type="checkbox" name="g1" value="Kafic" /></td>
<td><input type="checkbox" name="g2" value="Kiosk" /></td>
<td><input type="checkbox" name="g3" value="Restoran" /></td></tr>
<tr><td>Javni WC</td><td>Kafic</td><td>Kiosk</td><td>Restoran</td></tr>
</table>
<input type="hidden" name="name" value="<?php echo $poslovnica ?>" />
<input type="hidden" name="broj" value="<?php echo $broj ?>" />
<input type="hidden" name="iduci" value="<?php echo $iduci ?>" />
<input type="hidden" name="zakolko" value="<?php echo $zakolko ?>" />
                    <input value="Posalji" data-theme="a" type="submit" />
                </form>
                <a style="position:fixed;top:0px;right:0px;" href="info.html"><img src="upitnik2.png" height="50" /></a>
           </div>
        </div>
    </body>
    </html>