<?
$str = '0,1,2,3,4,5,6,7,8,9';
$str_array = explode(",", $str);
// print_r($str_array);

function odd($var){
  return($var & 1);
}

function even($var){
  return(!($var & 1));
}

$answer = array_sum(array_filter($str_array, "odd")) - array_sum(array_filter($str_array, "even"));
print($answer);

$odd = array_filter($str_array, "odd");
// print_r($odd);
$even = array_filter($str_array, "even");
// print_r($even);
?>
