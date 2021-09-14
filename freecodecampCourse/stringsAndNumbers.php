<?php
$characterName = "Carlos";
$characterAge = 35;
/**
 * Using variables inside echo
 */
echo "There was once $characterName, and he was $characterAge years old.<br/>";

/**
 * Data types: string, int, float and bool.
 */
$phrase = "To be or not to be.<br/>";
$age = 30;
$gpa = 30.3;
$isMale = false;

echo $phrase;

/**
 * Working with string
 * strtolower make strings lowercase
 * strtolower make strings uppercase
 * If we use $variable[0], we can access every character in a string
 * If I use $variable[1] = "A"; I'm changing that char at that position
 * str_replace("initial string", "replacing string", $string_variable)
 * sbstr($string_variable,starting char index, final char index)
 */
$phrase2 = "Giraffe Academy<br/>";
$phrase2[0] = "B";
echo strtolower($phrase2);
echo strtoupper($phrase2);
echo $phrase2[1];
echo "Carlos"[0];
$phrase2[0] = "B";
echo str_replace("Biraffe", "Panda", $phrase2);
echo substr($phrase2, 8, 3);

/**
 * Working with numbers
 * We can use: + - * / operators, also the modulus: %
 * If we want to add something to the same value we can use
 * the += // -= // *= // /= operators
 * abs(number); gives me the absolute value of a number
 * pow(x,y); gives you x to the y potency.
 * sqrt(number); gives you the square root of a number
 * max(x, y); tell us, which is the highest number
 * min(x, y); tell us, which is the lowest number
 * round(3.2) = 3, because it rounds the number
 * ceil(3.2) = 4, because it rounds up to the next highest integer
 * floor(3.7) = 3, becuase it rounds down to the next lowest integer
 */
echo "<br/>";
echo 40;
echo "<br/>";
echo -40.874;
echo "<br/>";
echo 5 + 9;
echo "<br/>";
echo 10 % 3;
echo "<br/>";
echo 4 + 5 * 10;
echo "<br/>";
echo (4 + 5) * 10;
echo "<br/>";

$num = 10;

$num++;
echo $num;
echo "<br/>";

$num--;
echo $num;
echo "<br/>";

$num += 25;
echo $num;
echo "<br/>";

echo abs(-100);
echo "<br/>";

echo pow(2, 4);
echo "<br/>";

echo sqrt(144);
echo "<br/>";

echo max(2, 10);
echo "<br/>";

echo min(2, 10);
echo "<br/>";

echo round(3.2);
echo "<br/>";

echo ceil(3.2);
echo "<br/>";

echo floor(3.9);
echo "<br/>";
