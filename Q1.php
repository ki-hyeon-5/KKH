<!DOCTYPE html>
<html>
<body>

<?php
$prod = 1;
$sum = 0;
$n = 30;


for ($x = 1; $x <= $n; $x++) {
  echo "현재x는 : $x <br>";
  $prod = $prod * $x;
  $sum = $sum + $x;
  if ($x == $n){
  echo "전체합은: $sum<br>";
  echo "전체곱은: $prod<br>";}
}
?>  

</body>
</html>
