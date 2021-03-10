<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

//Fonction 
function affichtable($month){
    echo "<table border=1>";
    foreach ($month as $x => $x_value){
        echo "<tr><td>".$x."</td><td>".$x_value."</td></tr>";
    }
    echo "</table>";
}

//** */
//Déclaration tableau
$month = array("cle" => "value", "said" => "13", "badr" => "16", "najat" => "15",);
//Afficher Tableau 
affichtable($month);

//Insertion
$month["karim"] ="10";
unset($month["said"]);

$month=array_merge($month, ["zrze" => "sdf"]);


affichtable($month);


//var_dump($month);

//Calcul note maximal t la note minimale
echo "la note maximale est: ".max($month)."la note minimale est:".min($month);
asort($month);
affichtable($month);
echo"la moyenne de la classe:".round(array_sum($month)/count($month),3);
echo array_sum($month);


?>
</body>
</html>