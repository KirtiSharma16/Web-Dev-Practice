<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ChessBoard</title>
</head>
<body>
  <table border="1" style="border-collapse: collapse">
    <?php
      for($i=0;$i<8;$i++){
        echo "<tr>\n";
        for($j=0;$j<8;$j++){
          $total=$i+$j;
          if($total%2==0) echo "<td height=30px width=30px bgcolor=black></td>\n";
          else echo "<td height=30px width=30px bgcolor=white></td>\n";
        }
        echo "</tr>\n";
      }
    ?>
  </table>

</body>
</html>
