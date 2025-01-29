The best solution is often to avoid the use of references with `unset()` if you want consistent behavior. It's safer to work directly with the original array. If using a reference is crucial, ensure you're aware of the implications and handle accordingly.

Here's an example of a safer approach:
```php
<?php
$myArray = [1, 2, 3, 4, 5];
unset($myArray[0]); // Directly modify the original array
print_r($myArray); // Output: Array ( [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
?>
```
Alternatively, you may create a copy of the array to work on:
```php
<?php
$myArray = [1, 2, 3, 4, 5];
$myArrayCopy = $myArray;
unset($myArrayCopy[0]);
print_r($myArray); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
print_r($myArrayCopy); // Output: Array ( [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
?>
```