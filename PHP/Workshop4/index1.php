<?php

// Q1

// function verification_date($date) {
//     echo substr($date, 0,10) ;
//     echo "<br>";
//     echo substr($date, 11) ;
// }
// if(!empty($_POST)) {
// $date=$_POST["date"];
// verification_date($date);
// }



// $date = strtotime($_POST["date"]); 
// echo date('Y/m/d h:i', $date);


// Q2


// function alerte($a)
// {
// echo "<script > alert('$a'); </script>";
// return TRUE;
// }

// if(alerte("Bonjour à tous")) echo "abdo";
// alerte('1222');




// Q3

$a= array("ABrteY","KDty vgsR","sHSGtf ");
function initmaj($in)
{
foreach($in as $ind=>$inl)
{
$in[$ind]=ucfirst(strtolower($inl));
}
return $in;
}
print_r (initmaj($a));


?>