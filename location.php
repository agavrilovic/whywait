<?php
$poslovnica=$_GET['name'];

//recimo da imamo 2 podrzane poslovnice
$MAKS=2;

$podrzanX[1]=45.805278778076;
$podrzanY[1]=15.980414390564;
$ime[1]="Policijska Uprava Zagrebacka - Petrinjska";

$podrzanX[2]=45.8124313354492;
$podrzanY[2]=15.983606338501;
$ime[2]="Hrvatska Posta - ulica Nikole Jurisica Zagreb";

function createDropdown($arr, $frm) {
   $i=1;
   echo '<select name="'.$frm.'" id="'.$frm.'">
         <option value="">Izaberite neku od ponudjenih poslovnica...</option>';
   foreach ($arr as $key => $value) {
      echo '<option value="'.$i.'">'.$value.'</option>'; 
      $i++;
   }
   echo '</select>';
} 

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
                <h3>Odabrana poslovnica:</h3>
                <span id="velikaslova"><?php echo $ime[$poslovnica]; ?></span>
                <form action="action.php">
                    <div data-role="fieldcontain">
         <select name="" id="">
         <option value="Zagreb">Zagreb</option>'
         </select>
                    </div>
                    <div data-role="fieldcontain">
                        <?php createDropdown($ime, 'name'); ?>
                    </div>
                    <input value="Posalji" data-theme="a" type="submit" />
                </form>
                <a style="position:fixed;top:0px;right:0px;" href="info.html"><img src="upitnik2.png" height="50" /></a>
           </div>
        </div>
    </body>
    </html>