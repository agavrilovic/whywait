<?php
$poslovnica=$_GET['name'];
$broj=$_GET['broj'];
$iduci=$_GET['iduci'];
$zakolko=$_GET['zakolko'];
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
                <h3></h3>
                <span id="velikaslova">Moj listi&#263; je broj: <?php echo $broj; ?></span>
                <form action="reaction.php">
                    <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup" data-mini="true">
                        <label for="textinput1">
                             Dojavi koliko brojeva ranije: 
                        </label>
                        <input id="textinput1" placeholder="" value="<?php echo $zakolko; ?>" name="zakolko" type="tel" />
                    </fieldset>
                </div>
                    <input type="hidden" name="name" value="<?php echo $poslovnica; ?>" data-theme="a" />
                    <input type="hidden" name="broj" value="<?php echo $broj; ?>" data-theme="a" />
                    <input type="hidden" name="iduci" value="<?php echo $iduci; ?>" data-theme="a" />
                    <input type="submit" value="Izaberi broj" data-theme="a" />
                </form>
                <a style="position:fixed;top:0px;right:0px;" href="info.html"><img src="upitnik2.png" height="50" /></a>
           </div>
        </div>
    </body>
    <script>
jQuery(window).ready(function(){  
            jQuery("#Pronadji").click(initiate_finding);  
        });  
        function initiate_sending() {  
                   var poslovnica = '<?php echo $poslovnica; ?>';
                   var broj = prompt("Koji je tvoj broj?","0");
            window.location = './reaction.php?name='+poslovnica+'&broj='+broj;
        }
        function initiate_finding() {  
                   var poslovnica = '<?php echo $poslovnica; ?>';
            window.location = './location.php?name='+poslovnica;
        }
         </script>
</html>