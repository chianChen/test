<?
$a = array('77','5','5','22','13','55','97','4','796','1','0','9');
$b = array('0','1','2','3','4','5','6','7','8','9');
print_r($a);
echo "<br>";
print_r($b);
echo "<br>";


sort($a);
sort($b);


$c = array();
for ($i=0; $i < sizeof($a); $i++) {
  for ($j=0; $j < sizeof($b); $j++) {
    if($a[$i] == $b[$j] && !in_array($a[$i], $c))
      array_push($c,$a[$i]);
  }
}
// print_r($c);
// echo "<br>";



$mergeab = array_merge($a, $b);
$mergeab = array_unique($mergeab);
sort($mergeab);
$d = $mergeab;
for ($i=0; $i < sizeof($mergeab); $i++) {
  for ($j=0; $j < sizeof($b); $j++) {
    if($mergeab[$i] == $b[$j])
      unset($d[$i]);
  }
}
// print_r($d);
// echo "<br>";




$mergeab = array_merge($a, $b);
$e = array_unique($mergeab);
sort($e);
// print_r($e);
// echo "<br>";
?>
