<?php
/*
+---+
| 1 |
+---+
Use while-loop to print the numbers 1 to 10.
*/
echo "<h3>While loop to print numbers 1 to 10</h3>";

$no = 1;

while ($no <= 10) {
	echo $no." ";
	$no++;
}

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Use the PHP function range(start, end, step) 
to create array of numbers 5 to 100 with the step 5 
(example: 5, 10, 15, ...)
*/
echo "<h3>Range function</h3>";

$number = range(5, 100, 5);
foreach ($number as $nub) {
	echo $nub.", ";
}
echo "<br>";
echo "<br>";
/*
Use for-loop and if-statement to print all odd numbers.

How to check if a number is odd or even? 
Divide it by 2, and if there is a remainder, the number is odd. 
Use modulus operator (outputs the remainder after division), 
for example: 
1 % 2 = 1 -> odd number
2 % 2 = 0 -> even number
3 % 2 = 1 -> odd number
4 % 2 = 0 -> even number
*/

echo "<h3>Odd numbers:</h3>";

 $even= "";
 $odd= "";

for ($number = 0; $number <= 100; $number += 5) {
    if ($number%2==0) {
    $even.=$number."  ";
    } else {
    $odd.=$number." "; 
  }
}

echo "$odd";
// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/
$food = [
  "pizza", "ravioli", "burrito bowl", "cheesecake"
];
/*
Use while-loop to print array elements (every food in a new row).
*/
echo "<h3>While-loop</h3>";

$i = 0;
while ($i < sizeof($food)) {
  echo $food[$i];
  echo "<br>";
  $i += 1;
}

/*
Use for-loop to print array elements (every food in a new row).
*/
echo "<h3>For-loop</h3>";

for ($i=0; $i < sizeof($food) ; $i++) { 
  echo $food[$i];
  echo "<br>";
}

/*
Use foreach-loop to print array elements (every food in a new row).
*/
echo "<h3>Foreach-loop</h3>";

foreach ($food as $i) {
  echo $i;
  echo "<br>"; 
}

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Print the array from task 3 as unordered list. Printing has to be done inside the for-loop.

Before looping, you need to print the opening list-tag <ul>
After looping, you need to print the closing list-tag </ul>
*/

echo "<h3>Array as unordered list</h3><h4>(Print - using for loop)</h4>";
echo "<ul>";
for ($i=0; $i < sizeof($food) ; $i++) { 
      echo "<li>$food[$i]</li>";
}
echo "</ul>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
The array from task 3 is turned into associative array. 
The meal courses are broken down based on the type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)

$food_assoc = [
  "pizza" => [
    "type" => "main course",
    "origin" => "Italy"
  ],
  "cheesesake" => [
    "type" => "desert",
    "origin" => "Greece"
  ]
]

So, food_assoc is an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin.
*/
$food_assoc = [
  "Pizza" => [
              "type" => "Main Course",
              "origin" => "Italy"],
  "Ravioli" => [
              "type" => "Appetizer",
              "origin" => "Italy"],
  "Burrito Bowl" => [
              "type" => "Salad",
              "origin" => "Mexico"],
  "Cheese cake" => [
              "type" => "Dessert",
              "origin" => "Greece"]
];
/*
Loop through $food_assoc and use print_r() to print the entire meal course 
(entire array that includes type and origin).
*/
print_r($food_assoc);
/*
Loop through $food_assoc and print the meal names (keys of $food_assoc)
as unordered list-items. Loop through the current meal (inner loop through sub-array) 
and print the type and origin as nested list items (see the example below).
*/
echo "<br><br><h3>Favorite meals: 
</h3><ul>";
foreach ($food_assoc as $meal => $meal_value) {
    echo "<li>" . $meal . "</li>
    <ul>" . "<li>" . $meal_value['type'] . "</li>
    <li>" . $meal_value['origin'] . "</li>
    </ul>";
}
echo "</ul>";
?>