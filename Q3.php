<!DOCTYPE html>
<html>
<body>

<?php
$a = 1;
$b = 1;
$num = rand(0,100);

for($i = 0; $i < $num; $i++)
{
$c = $b +$a;
$h = $b/$a;
echo "피보나치 수열 : $c = $b + $a<br>";
echo "뒤항과의 비례 : $b $a $h<br>";
$a = $b;
$b = $c;
}
?>  

</body>
</html>
