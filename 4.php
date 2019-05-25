<?php 
function pattern($n, $o) 
{ 
    for ($i = 0; $i < $n; $i++) { 
        for ($j = 0; $j < $n; $j++) { 
            if ($i == 0 || $i == $n - 1 ||  $o == $j  )          
                echo "X";          
  
                else
                echo "="; 
        } 
        
        echo "\n"; 
    } 
} 
      $n = 5; 
      $m = (($n-1)/2);
      $o = $m +1;
    pattern($n, $m); 
?> 