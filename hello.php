<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BENN's SHOP</title>
</head>

<body>
<?php
/*function hello($name){
    echo "Hello $name";
}*/
      //this is mycomment
      echo "<table border=1><tr><th>สินค้า</th><th>รายละเอียด</th></tr>";
      $name = "BENN's SHOP";
      echo "<p style='font-size:30px'>Welcome to..  $name<br/></p>";
      $setColumn=3;
      for($i=1;$i<11;$i++){
        $r=rand(0,256);
        $g=rand(0,256);
        $b=rand(0,256);
        $product = ['','Loga TUKTUK', 'Loga PRINTSTREAM', 'Loga GOOD OLD DAYS 80', 
        'Tai-Hao T10 Midnight Sun ABS Double Shot', 'Tai-Hao Blue/Pink ABS Double Shot', 
        'Tai-Hao T12 Mint/Red ABS Double Shot', 'Tai-Hao Mint/Beige ABS Double Shot', 
        'Tai-Hao T15 Dark Blood Black+Red PBT Double Shot', 'Tai-Hao T23 The Forest Blue PBT Backlit', 
        'Tai-Hao T4 England Blue ABS Double Shot'];
        $price = ['','1790','1990','1790','1390','1190','1990','1990','1590','1990','1190'];
        $imgg = ['','01','02','03','04','05','06','07','08','09','10'];
        echo "<tr><td></td><td><p style='color:rgb($r,$g,$b)'>ID $i $product[$i]<br/>Price $$price[$i]<br/></p></td>";
      }
      echo "</table>";
?>
</body>
</html>