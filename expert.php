<?php

declare(strict_types=1);

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

function new_exercise($_x)
{

    $block = "<br/><hr/><br/><br/>Exercise $_x starts here:<br/>";
    echo $block;

}

new_exercise(1);

new_exercise(2);
// === Exercise 2 ===
// Below we create a week array with all days of the week.
// We then try to print the first day which is monday, execute the code and see what happens.

$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];

echo $monday;

new_exercise(3);
// === Exercise 3 ===
// This should echo ` "Debugged !" `, fix it so that that is the literal text echo'ed

$str = '"Debugged !"Also very fun';
echo substr($str, 0, 12);

new_exercise(4);
// === Exercise 4 ===
// Sometimes debugging code is just like looking up code and syntax...
// The print_r($week) should give:  Array ( [0] => mon [1] => tues [2] => wednes [3] => thurs [4] => fri [5] => satur [6] => sun )
// Look up whats going wrong with this code, and then fix it, with ONE CHARACTER!

foreach ($week as &$day) {
    $day = substr($day, 0, strlen($day) - 3);
}

print_r($week);

new_exercise(5);
// === Exercise 5 ===
// The array should be printing every letter of the alfabet (a-z) but instead it does that + aa-yz
// Fix the code so the for loop only pushes a-z in the array

$arr = [];
foreach (range('a', 'z') as $letter) {

    array_push($arr, $letter);
}

print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alfabetical array

new_exercise(6);
// === Final exercise ===
// The fixed code should echo the following at the bottom:
// Here is the name: $name - $name2
// $name variables are decided as seen in the code, fix all the bugs whilst keeping the functionality!
$arr = [];

function randomHeroName()
{
    $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
    $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
    $heroes = [$hero_firstnames, $hero_lastnames];

    $randname = [$heroes[0][rand(0, 10)], $heroes[1][rand(0, 10)]];
    //$randname = ;
    return $randname;

}

function randomGenerate($arr, $amount)
{
    for ($i = 0; $i < $amount; $i++) {
        array_push($arr, randomHeroName());
    }

    return $arr;
}

$arr = randomGenerate($arr, 1);
var_dump($arr);


function combineNames($str1 = "", $str2 = "") {
    $params = [$str1, $str2];
        echo implode(" - ", $params);
}

echo "Here is the name: ";
echo combineNames($arr[0][0], $arr[0][1]);

new_exercise(7);

function copyright( $year)
{
    return "&copy; $year BeCode";
}
//print the copyright
$date = new DateTime();

echo copyright(date_format($date, 'Y'));

new_exercise(8);

function login(string $email, string $password)
{
    if ($email == 'john@example.be' || $password == 'pocahontas') {
        return 'Welcome John';
        return ' Smith';
    }
    return 'No access';
}
//should great the user with his full name (John Smith)
$login = login('john@example', 'pocahontas');
//no access
$login = login('john@example', 'dfgidfgdfg');
//no access
$login = login('wrong@example', 'wrong');

echo ($login);