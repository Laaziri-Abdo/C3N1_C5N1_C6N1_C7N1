<!-- ## Script PHP  -->

<?php
// <!-- question 1 -->
function nombrepremier( $nombre ){


    for ($i = 2; $i < $nombre; $i++){
        if ($nombre % $i == 0){
            $fois = 1;
        }
    }

    if (isset($fois)) {
        echo "$nombre n'est pas un nombre premier";
    }
    else{
        echo "$nombre est un nombre premier";
    }

}

nombrepremier(1);
echo "<br/>";
nombrepremier(6);
 




function carre($n){
    return $n*$n;
}
echo carre(20);
echo "<br>";
function logarithme($a){
     return log($a);
}
echo logarithme(10);
echo "<br>";
function racin_carre($r){
    return sqrt($r);

}
echo racin_carre(36);

?>