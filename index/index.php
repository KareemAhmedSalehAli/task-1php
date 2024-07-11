<?php
/*
$name = "programmer";
echo "Hello, " . $name ,"<br>","<br >";

#################

$x = "3";
$y = "5";


$summation = $x + $y;
$multiplication = $x * $y;
$subtraction = $x - $y;
echo $x , " + ", $y,"=", $summation ,"<br>";
echo $x , " * ", $y,"=", $multiplication ,"<br>";
echo $x , " - ", $y,"=", $subtraction ,"<br>";

################################

$A="1";
$B="2";
$C="3";
$D="4";
$X=($A*$B)-($C*$D);
echo "Difference =" ,$X;

################################

$N="13";
$M="15";
echo (int) $N% 10 + (int) $M % 10;

############################

$X="3569";
$first_digit = (int) substr($X, 0, 1);
if ($first_digit % 2==0) {
    echo "EVEN";  # code...
}else {
    echo "odd";
}

#######################

$a="15";
$b="10";
$k="3";
if ($a%$k==0 &&$b%$k==0) {
    # code...
    echo "both";
}elseif ($a%$k==0) {
    # code...
    echo "Memo";
}
elseif ($b%$k==0) {
    # code...
    echo "Memo";
}
else {
    
    echo "No one";
}

##########################  
*/
$n = "39";
$d1 = (int) $n[0];
$d2 = (int) $n[1];

if ($d1 == 0 || $d2 == 0) {
    echo "Not Lucky";
} elseif ($d1 % $d2 == 0 || $d2 % $d1 == 0) {
    echo "Lucky";
} else {
    echo "Not Lucky";
}
#$first_digit =  (int) substr($A, 0, 1)+(int) $A% 10;





?>

