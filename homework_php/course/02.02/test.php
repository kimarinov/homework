<?php 
// Function to check if a number is perfect 
function isPerfectNumber($N) 
{ 
    // To store the sum 
    $sum = 0; 
       
    // Traversing through each number 
    // In the range [1,N) 
    for ($i = 1; $i < $N; $i++) 
    { 
        if ($N % $i == 0) 
        { 
            $sum = $sum + $i; 
        }       
    } 
      
    // returns True is sum is equal 
    // to the original number. 
    return $sum == $N; 
} 
   
// Driver's code 
$N = 8129; 
  
if (isPerfectNumber($N)) 
    echo " Perfect Number"; 
else
    echo "Not  Perfect Number"; 
