<?php$string = "purwakarta";
$aa = str_split($string); 
$rp1 = 'o'; 
$f1 = 'a';
function replaceChar($k1, $findStr, $replaceStr, $arr){
    $str = $arr[$k1];
    if($str == $findStr){
        $ra = str_split($replaceStr);
        $arr[$k1] = $ra[0];       
    }
    return $arr;
}
for($i=0; $i < count($aa)-1; $i++){
    $k1 = $i+1;

    $aa = replaceChar($k1, $f1, $rp1, $aa); 
    
}

echo implode('', $aa);