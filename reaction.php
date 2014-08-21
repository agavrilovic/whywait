<?php
$poslovnica=$_GET['name'];
$broj=$_GET['broj'];
$iduci=$_GET['iduci'];
$zakolko=$_GET['zakolko'];

if ($zakolko==0) $zakolko=3;
if ($iduci==0) $iduci=$broj-$zakolko-3;
if ($iduci<1) $iduci=1;

$ime[1]="Policijska Uprava Zagrebacka - Petrinjska";
$ime[2]="Hrvatska Posta - ulica Nikole Jurisica Zagreb";

/*konkretna rijesenja citanja trenutnog broja iz tekstualnih datoteka QMS sustava
$file = fopen("trenutni-broj.txt", "r");
while(!feof($file))
  {
  $iduci = fgets($file);
  }
fclose($file);*/
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
body {background-color:white;}
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
                <h1><center><img src="ikona.jpg" height="30" />WhyWait?</center></h1>                
                <h3>Odabrana poslovnica:</h3><div id="velikaslova"><?php echo $ime[$poslovnica]; ?></div>
                <div id="velikaslova">Moj broj je: <br /><?php echo $broj ?><br />
                Idu&#263;i broj na redu je:
                <div id="upisiiduceg"></div>
                </div>
           </div>
                <a data-role="button" data-transition="fade" data-theme="a" href="location.php">
                    Promijeni poslovnicu / broj
                </a>

                <a style="position:fixed;top:0px;right:0px;" href="info.html"><img src="upitnik2.png" height="50" /></a>
                <a style="position:fixed;bottom:0px;left:0px;" href="#" onClick="javascript:klikTrazi()" ><img src="trazi.png" height="50" /></a>
                <a style="position:fixed;bottom:0px;right:0px;" href="#" onClick="javascript:klikSettings()"><img src="settings.png" height="50" /></a>
        </div>
    </body>
    <script>
// buduci da ne citamo stvarni txt, randomizeat cemo vrijednost varijable "iduci"

var broj = '<?php echo $broj; ?>';
var iduci = '<?php echo $iduci; ?>';
var zakolko = '<?php echo $zakolko; ?>';
if (zakolko==0) zakolko=3;
var t=setTimeout("timedCount()",0);

function timedCount()
    {
iduci++;
document.getElementById("upisiiduceg").innerHTML=iduci;
t=setTimeout("timedCount()",Math.random()*10000);
if (((broj-iduci)<zakolko)&&broj>iduci) {dojava();}
    }

function dojava() 
    {
alert('Pazi! Uskoro je tvoj broj na redu!');
    }

function klikTrazi()
    {
    window.location.href = 'trazi.php?broj=<?php echo $broj; ?>&name=<?php echo $poslovnica; ?>&iduci='+iduci+'&zakolko=<?php echo $zakolko; ?>';
    }
function klikSettings()
    {
    window.location.href = 'settings.php?broj=<?php echo $broj; ?>&name=<?php echo $poslovnica; ?>&iduci='+iduci+'&zakolko=<?php echo $zakolko; ?>';
    }
</script>
</body>
</html>