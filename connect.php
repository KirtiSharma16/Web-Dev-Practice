<?php
  // creating connection
  $conn=mysqli_connect("localhost","root","","db1");
  if($conn){
    echo "Connection built<br>";
  }
  else{
    echo "Connection failed<br>";
    exit();
  }

  // creating table

  $sql="CREATE TABLE demo_table(first_name VARCHAR(20), last_name VARCHAR(20), age INT)";
  if(mysqli_query($conn,$sql)){
    echo "Table created<br>";
  }  

  // inserting into table
  $first="Taylor";
  $last="Swift";
  $age=32;
  $sql="INSERT INTO demo_table VALUES('$first','$last','$age')";
  mysqli_query($conn,$sql);

  $first="Ariana";
  $last="Grande";
  $age=28;
  $sql="INSERT INTO demo_table VALUES('$first','$last','$age')";
  mysqli_query($conn,$sql);

  $first="Marshall";
  $last="Mathers";
  $age=45;
  $sql="INSERT INTO demo_table VALUES('$first','$last','$age')";
  mysqli_query($conn,$sql);

  // fetching the rows from table
  $sql="SELECT * FROM demo_table";
  if($res=mysqli_query($conn,$sql)){
    if(mysqli_num_rows($res)>0){
      echo "<table>";
        echo "<tr>";
          echo "<th>First Name</th>";
          echo "<th>Last Name</th>";
          echo "<th>Age</th>";
        echo "</tr>";
        while($row=mysqli_fetch_array($res)){
          echo "<tr>";
            echo "<td>".$row['first_name']."</td>";
            echo "<td>".$row['last_name']."</td>";
            echo "<td>".$row['age']."</td>";
          echo "</tr>";
        }
      echo "</table>";
      mysqli_free_result($res);
    }
    else{
      echo "No record was found<br>";
    }
  }

  // deleting row
  $sql="DELETE FROM demo_table WHERE age=28";
  if(mysqli_query($conn,$sql)){
    echo "Row deleted<br>";
  }

  // drop table
  $sql="DROP TABLE demo_table";
  if(mysqli_query($conn,$sql)){
    echo "Table dropped<br>";
  }

  // closing the connection
  mysqli_close($conn);
?>