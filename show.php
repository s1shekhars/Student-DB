<?php
$pdo=new PDO('mysql:host=localhost;port=3306;dbname=mysql','root','root');
$sql=$pdo->query("select name,gmail,father,college,univercity,mobile from student");
echo('<p align="center">Student Details</p>');
$re=1;
echo'<table>';
while($row=$sql->fetch(PDO::FETCH_ASSOC)){
  echo'<tr><td>';
  echo'<hr>';
  echo'</td></tr><tr><td>';
  echo'Name= ';
  echo($row['name']);
  echo'</td></tr><tr><td>';
  echo'Gmail= ';
  echo($row['gmail']);
  echo'</td></tr><tr><td>';
  echo'Father Name= ';
  echo($row['father']);
  echo'</td></tr><tr><td>';
  echo'college= ';
  echo($row['college']);
  echo'</td></tr><tr><td>';
  echo'Univercity= ';
  echo($row['univercity']);
  echo'</td></tr><tr><td>';
  echo'Mobile= ';
  echo($row['mobile']);
  echo'</td></tr>';
}
echo'</table>';
if(isset($_POST['login'])){
  header('Location:login.php');
}
?>
<html>
<head>
  <title>Show database</title>
</head>
<body>
  <form method="post">
    <p><input type="submit" value="go back" name="login"></P>
    </form>
  </body>
  </html>
