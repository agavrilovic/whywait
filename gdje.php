<?php
$gdje0=$_GET['g0'];
$gdje1=$_GET['g1'];
$gdje2=$_GET['g2'];
$gdje3=$_GET['g3'];
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
        <div data-role="page" id="page2">
            <div data-role="content">
                <h1>
                    <center><img src="ikona.jpg" height="30" />WhyWait?</center>
                </h1>
                <h3>Preporu&#269;amo u blizini poslovnice <?php $ime[$poslovnica] ?> odabrano:</h3>
                <?php if (($gdje0)&&(($poslovnica==1)||($poslovnica==2))) echo "Najbli&#382;i javni WC: <a href=\"http://www.openstreetmap.org/?minlon=15.9784&minlat=45.8132&maxlon=15.9804&maxlat=45.8133\">ulica Augusta Cesarca</a>";?><br />
                <?php if ($gdje1) echo "Najbli&#382;i kafic: -";?><br />
                <?php if ($gdje2) echo "Najbli&#382;i kiosk: -";?><br />
                <?php if ($gdje3) echo "Najbli&#382;i restoran: -";?><br />
                <a data-role="button" data-transition="fade" data-theme="a" href="reaction.php?broj=<?php echo $broj; ?>&name=<?php echo $poslovnica; ?>&zakolko=<?php echo $zakolko; ?>&iduci=<?php echo $iduci; ?>">
                    Natrag
                </a>
                <a style="position:fixed;top:0px;right:0px;" href="info.html"><img src="upitnik2.png" height="50" /></a>
           </div>
        </div>
    </body>
</html>