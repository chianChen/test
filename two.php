<?
$str = '人易科技:上 機 測 驗 - 演算法';
// print_r(str_split($str));
/**
* @version $Id: str_split.php 10381 2008-06-01 03:35:53Z pasamio $
* @package utf8
* @subpackage strings
*/
function utf8_str_split($str, $split_len = 1)
{
    if (!preg_match('/^[0-9]+$/', $split_len) || $split_len < 1)
        return FALSE;

    $len = mb_strlen($str, 'UTF-8');
    if ($len <= $split_len)
        return array($str);

    preg_match_all('/.{'.$split_len.'}|[^\x00]{1,'.$split_len.'}$/us', $str, $ar);

    return $ar[0];
}
function is_ch($str){
  if (mb_strlen($str, mb_detect_encoding($str)) == strlen($str))
    return false;
  return true;
}
$str_array = utf8_str_split($str, 1 );
foreach($str_array as $k => $data){
  if($data == ':')
    $str_array[$k] = '：';
  if($data == ' '){
    if(is_ch($str_array[$k - 1]) && is_ch($str_array[$k + 1]))
      unset($str_array[$k]);
  }
  if($data == ':'){
    for ($i=1; $i <= sizeof($str_array); $i++) {
      if($str_array[$k + $i] <> '-'){
        if($str_array[$k + $i] <> ' ')
          print($str_array[$k + $i]);
      }else
        break;
    }
  }
}
$string = implode("",$str_array);
// print($string);
?>
