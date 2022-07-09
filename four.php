<?
$str = '77,5,5,22,13,55,97,4,796,1,0,9';
$str_array = explode(",", $str);
// print_r($str_array);

function sort_cust($arr) {
    $len = sizeof($arr);
    for ($i = 0; $i < $len; $i++) {
      $min = $i;
      for ($j = $i+1; $j < $len; $j++) {
          if ($arr[$j] < $arr[$min]) {
            $min = $j;
          }
      }
      if ($min != $i) {
          $old = $arr[$i];
          $arr[$i] = $arr[$min];
          $arr[$min] = $old;
      }
    }
    return $arr;
}

// print_r(sort_cust($str_array))
?>
