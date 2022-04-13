<?php
// PHP program to find factorial
// of given number
 
// function to find factorial
// of given number
function factorial($n)
{
    if ($n == 0)
        return 1;
    return $n * factorial($n - 1);
}
 
    // Driver Code
    $num = 5;
    echo "Factorial of ", $num, " is ", factorial($num);
 
?>