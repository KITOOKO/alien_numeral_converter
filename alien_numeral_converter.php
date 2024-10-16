<?php
function alien_to_integer($s) {
    $symbol_values = array('A' => 1, 'B' => 5, 'Z' => 10, 'L' => 50, 'C' => 100, 'D' => 500, 'R' => 1000);
    
    $result = 0;
    $n = strlen($s);
    
    for ($i = 0; $i < $n; $i++) {

        if ($i < $n - 1 && $symbol_values[$s[$i]] < $symbol_values[$s[$i + 1]]) {
            $result -= $symbol_values[$s[$i]];
        } else {

            $result += $symbol_values[$s[$i]];
        }
    }
    
    return $result;
}

// ทดสอบ
echo alien_to_integer("AAA") . "\n";      // Output: 3
echo alien_to_integer("LBAAA") . "\n";    // Output: 58
echo alien_to_integer("RCRZCAB") . "\n";  // Output: 1994
?>
