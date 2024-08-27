<?php echo "<h1> Top Necessary Functions </h1>"; ?>

<?php echo "<h2> String Functions:--------- </h2>". "</br> </br>"; ?>


<!-- strlen function -->


<?php 

$varstrlen = "Hi! I'm Md. Sihab Uddin";

$strlenoutput = strlen($varstrlen);

echo "1. Strlen Function Output (will count letter also space) = ". $strlenoutput. "<br>". "<br>";

?>


<!-- strtouppoer function -->

<?php 

$varstrtoupper = "Hi! I'm Md. Sihab Uddin";

$strtoupperoutput = strtoupper($varstrtoupper);

echo "2. strtoupper Function Output (will uppercase) = ". $strtoupperoutput ."<br>". "<br>";

?>


<!-- strtolower function -->

<?php 

$varstrtolower = "Hi! I'm Md. Sihab Uddin";

$strtoloweroutput = strtolower($varstrtolower);

echo "3. strtolower Function Output (will lowercase) = ". $strtoloweroutput. "<br>". "<br>";

?>

<!-- strpos function -->

<?php

echo "4. strpos function (it will indicate the postion of detected number of string)". "</br>"."<br>";

$fullposstring = "Hey! I am sihab from bangladesh";

$needfind = "am";

$stringposition = strpos($fullposstring, $needfind);

if($stringposition == true){
    echo "Hey we found the world ". $needfind. " in {". $fullposstring. "} <br>". "And your searching position is ". $stringposition;
}else{
    echo "your content is". $needfind . "Not Found";
}

?>

<br>

<!-- substr function -->

<?php


$substrallcontent = "Hello sihab! Have to finish your recent WordPress theme development project?";

 $substrcut = substr($substrallcontent, 20, 11); //here 8 means from which number of string with last digit and 11 means how many strings

 echo "<br>"."The substr function output is: ". $substrcut;
 
 ?>

 <br>

 <!--  -->













