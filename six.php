<?
/**
  * @param Integer[] $nums
  * @param Integer $target
  * @return Integer[]
  */
function twoSum($nums, $target) {
  foreach ($nums as $k => $v) {
    unset($nums[$k]);
    $k_next = array_search(($target - $v), $nums);
    if($k_next)
      return [$k, $k_next];
  }
  return;
}


// $nums = ['2','7','11','15'] ;
// $target = '9';

// $nums = ['3','2','4'] ;
// $target = '6';

// $nums = ['3','3'] ;
// $target = '6';

// $ans = twoSum($nums, $target);
// print_r($ans);
?>
