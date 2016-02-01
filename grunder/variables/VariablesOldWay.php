
<?php
//data som ska presenteras, hålls i variabler
 $marke="Volvo";
 $modell="XC90";
 $pris=235000;
 $rabatteratPris=$pris*0.9;
 $bild="http://www.largus.fr/images/images/Volvo-XC-90-2014_1.jpg";
 $datum=date("Y-h-d");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Case</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h2>Våra bilar <?=$datum?></h2>
            <div class="panel panel-default">
                <div class="panel-heading">
                        <?=$marke?>
                </div>
                <div class="panel-body">
                    <?php
                        //data i variablerna presenteras
                        echo $modell,'<br>';
                        echo '<strike>',$pris,'kr</strike><br>';
                        echo '<h5>Special pris <span class="label label-default">',$rabatteratPris,'</span></h5>';
                        echo '<img src="',$bild,'" width="64" height="64">';
                       
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>