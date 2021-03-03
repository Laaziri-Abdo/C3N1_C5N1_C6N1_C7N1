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
echo "<table>";

$month = array("1" => "janvier", "2" => "Février", "3" => "Mars", "4" => "Avril", "5" => "Mai", "6" => "Juin", "7" => "Juillet", "8" => "Aout", "9" => "Septembre", "10" => "octobre", "11" => "Novembre", "12" => "Décembre");
echo "<table border=1>";
foreach ($month as $x => $x_value){
    echo "<tr><td>".$x."</td><td>".$x_value."</td></tr>";

}
echo "</table>";
?>



</body>
</html>