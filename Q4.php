<!DOCTYPE html>
<html>
  <head>
    <title></title>
  </head>
  <body>
    <div>요구값을 입력하세요.</div>
    <form action="" method="post">
   width :  <input type="text" name="wid" placeholder="Enter width here"><br>
   height : <input type="text" name="hei" placeholder="Enter height here"><br>
   radius : <input type="text" name="rad" placeholder="Enter radius here"><br>
   length : <input type="text" name="len" placeholder="Enter length here"><br>
      <input type="submit" name="submit" value="Submit"><br>
    </form>
    <?php
    
   
  $wid = $hei = $len = $rad = "";

  if(empty($_POST["wid"])) {

    echo "width 값을 입력해주세요<br>";
  }
  else if(empty($_POST["hei"])) {

    echo "height 값을 입력해주세요<br>";
  }
  else if(empty($_POST["rad"])) {

    echo "radius 값을 입력해주세요<br>";
  }
  else if(empty($_POST["len"])) {

    echo "length 값을 입력해주세요<br>";
  }
  
  else{
  echo "입력받은 width :" .$_POST["wid"]."<br><br>"; 
  echo "입력받은 height :" .$_POST["hei"]."<br><br>";
  echo "입력받은 radius :" .$_POST["rad"]."<br><br>";
  echo "입력받은 length :" .$_POST["len"]."<br><br>";  

    $wid = $_POST["wid"];
    $hei = $_POST["hei"];
    $to = $wid*$hei/2;
    echo "삼각형의 면적<br><br>";
    echo " $wid X $hei X /2 = $to<br><br>";
    
    $wid = $_POST["wid"];
    $hei = $_POST["hei"];
    $to2 = $wid*$hei;
    echo "직사각형의 면적<br><br>";
    echo " $wid X $hei = $to2<br><br>";

    $rad = $_POST["rad"];
    $to3 = pi()*$rad**2;
    echo "원의 면적<br><br>";
    echo " pi X $rad^2  = $to3<br><br>";

    $wid = $_POST["wid"];
    $hei = $_POST["hei"];
    $len = $_POST["len"];
    $to4 = $wid*$hei*$len;
    echo "직육면체의 체적<br><br>";
    echo " $wid X $hei X $len = $to4<br><br>";

    $rad = $_POST["rad"];
    $hei = $_POST["hei"];
    $to5 = pi()*$rad**2;
    echo "원통의 체적<br><br>";
    echo " pi X $rad^2 X $hei  = $to5<br><br>";

    $rad = $_POST["rad"];
    $to6 = 4/3*pi()*$rad**3;
    echo "구의 체적<br><br>";
    echo " 4/3 pi X $rad^2 X hei  = $to6<br><br>";
  }
    ?>

</body>
</html>
