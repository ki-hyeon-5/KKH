<!DOCTYPE html>
<html>
<body>

<?php
$n = 30;
$data = array();
for($i = 0; $i < $n; $i++){
$data[] = rand(10, 100);
}

$datalength = count($data);
for($i = 0; $i < $n; $i++) {
  echo "생성된 랜덤숫자: ".$data[$i];
  echo "<br>";
  }
echo "<br>";

sort($data);


$datalength = count($data);
for($i = 0; $i < $n; $i++) {
  echo "정렬된 숫자: ".$data[$i];
  echo "<br>";
  }
?>  

</body>
</html>
