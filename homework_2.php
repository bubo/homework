<?php

$arr = range(20, 1000, 37);

function find_3_prime() {
    $br=0;
    
foreach ($GLOBALS['arr'] as $number)
    if(IsPrime($number))
    {
        $br++;
        if($br==3)
        {
            echo "$number</p>";
            return;
        }
            
    }
}
find_3_prime();
function IsPrime($Num)
{
        
        for($CurrNum = 2; $CurrNum < $Num; $CurrNum++)
            if($Num % $CurrNum == 0)
                return FALSE;
        return TRUE;
}

function check_exists()
{
    if(in_array(146, $GLOBALS['arr']))
        echo "The number 146 exist in the array </p>";
    else     
        echo "The number 146 does not exist in the array </p>";
    if(in_array(284, $GLOBALS['arr']))
        echo "The number 284 exist in the array</p>";
    else     
        echo "The number 284 does not exist in the array</p>";
    if(in_array(871, $GLOBALS['arr']))
        echo "The number 871 exist in the array</p>";
    else     
        echo "The number 871 does not exist in the array</p>";
}

check_exists();
?>
