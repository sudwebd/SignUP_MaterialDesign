<?php
 function is_present($var){
   return(isset($var)&&$var!=="");
 }
 function leng($var,$max,$min){
   $length =strlen($var);
   return (($length>=$min)&&($length<=$max));
 }
 function comp($var1,$var2){
    return strcmp($var1,$var2);
 }
?>
