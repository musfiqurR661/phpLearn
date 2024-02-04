<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Learn</title>
</head>
<body>
<?php
// PHP 
//variable declaration(case-sensitive) & print
/*
$a
$_a
$a_01
*/
// $dept= "CSE";
// echo 'I study in UIU on '.$dept. '<br>';
// echo ' pari nah ' .$dept. '<br>';
// print('Hello').'<br>';
// //datatype
// $name ='Musfiqur';
// $name1 ='Rahman';
// $age = 23;
// $age1= 23.4;

// //to check datatype and its length

// var_dump($name);
// echo '<br>';
// var_dump($name1);
// echo '<br>';
// var_dump($age);
// echo '<br>';
// var_dump($age1);
// echo '<br>';

// $fruits = array('Apple', 'Banana', 'Mango');
// var_dump($fruits);
// echo '<br>';
// $null = null;
// echo '<br>';
// var_dump($null);//no output for null , it shows the 'NULL' instead of blank
// echo '<br>';
// //------------------OBJECTs-------------//
// class phone{

//     var $model;
//     function phoneModel($number){
//         global $model;
//         $model= $number;
//         echo " $model <br>";

//     }
// }


// $onePlus = new phone;
// $onePlus->phoneModel('I used onePlus 9RT.');
// echo '<br>';
// $apple= new phone;
// $apple->phoneModel('my 15pro is comming...');

// echo '<br>';
// echo '-----length & wordcount -----';
// echo '<br>';
// //length & wordcount 
// echo 'I used onePlus 9RT.';
// echo '<br>';
// echo strlen('I used onePlus 9RT.');
// echo '<br>';
// echo str_word_count('I used onePlus 9RT.');
// echo '<br>';
// echo '-----String Reverse-----';
// echo '<br>';
// echo strrev('I used onePlus 9RT.');
// echo '<br>';
// echo '-----to check position-----';
// echo '<br>';
// echo strpos('I used onePlus 9RT.','onePlus');
// echo '<br>';
echo '-----to change a word from a string-----';
echo '<br>';
echo str_replace('Pizza', 'Pasta', 'I love to eat Pizza');
echo '<br>';
echo '<br>';
echo '-----mathmatical operations -----';
echo '<br>';
echo'pi =' .pi();
echo '<br>';
echo'Minimum = ' .min(20,10,190,9,9,0.9,2,0);
echo '<br>';
echo'Maximum = ' .max(20,10,190,9,9,0.9,2,0);
echo '<br>';
echo'Absulate = ' .abs(-190);
echo '<br>';
echo'Squar Root = ' .sqrt(16);
echo '<br>';
echo'Power= ' .pow(6,2);
echo '<br>';
echo'Random Number= ' .rand(1,6);

echo '<br>';
echo '<br>';
echo '-----Constant -----';
echo '<br>';
$a=10;
$b=9;
$a=16;

echo($a);
echo '<br>';
define('x','17');
echo(x);
echo '<br>';
var_dump(x);
echo '<br>';
define('y',17);
echo(y);
echo '<br>';
var_dump(y);
echo '<br>';
define('Car',['BMW', 'Toyota','Mazda']);
echo(Car);
var_dump(Car);
?>
</body>
</html>
