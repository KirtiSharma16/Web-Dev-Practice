<?php
  $con=mysqli_connect("localhost","root","","db1");
  if(!$con){
    echo "Connection failed";
    exit();
  }

  $firstname=$_POST['f_name'];
  $lastname=$_POST['l_name'];
  $gender=$_POST['gender'];
  $city=$_POST['city'];
  $state=$_POST['state'];
  $country=$_POST['country'];
  $pincode=$_POST['pincode'];
  $aadhar=$_POST['aadhar'];
  $pan=$_POST['pan'];

  $sql="INSERT INTO data VALUES('$firstname','$lastname','$gender','$city','$state','$country','$pincode','$aadhar','$pan')";
  if(mysqli_query($con,$sql)){
    $_POST=array();
    header("location:form.php");
  }
  mysqli_close($con);
?>