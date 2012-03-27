<?php

$number = $_GET['number'];
if(!is_numeric($number))
{
    echo "<font color='red'>The parameter is not a number</font>";
    return;
}
    
if($number<0||$number>19999)
{
    echo "<font color='red'>The parameter is not within the range [0,19999]</font>";
    return;
}


function IsPrime($Num)
{
        
        for($CurrNum = 2; $CurrNum < $Num; $CurrNum++)
            if($Num % $CurrNum == 0)
                return FALSE;
        return TRUE;
}
if(IsPrime($number))
    echo "<font color='blue'>The number $number is prime !";
?>
