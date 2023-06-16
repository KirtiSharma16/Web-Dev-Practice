<?php
  $arr=array("Apple", "Banana", "Mango", "Orange");

  $comma=implode(",",$arr);
  $space=implode(" ",$arr);
  $slash=implode("/",$arr);

  echo "Afer implode<br>";
  echo $comma."<br>";
  echo $space."<br>";
  echo $slash."<br>";

  echo "<br><br><br><br>";

  $str="Apple Banana Mango Orange";
  echo "Afer explode<br>";
  print_r(explode(" ",$str));

  echo "<br><br><br><br>";

  echo "Multi-associative Array<br>";
  $new_arr=array("A"=>"Apple", "B"=>"Ball", "C"=>"Cat", "array"=>array("x","y","z"));
  print_r($new_arr);
?>