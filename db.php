<?php
$pdo=new PDO('mysql:host=localhost;port=3306;dbname=mysql','root','root');
if(isset($_POST['entry'])){
if(isset($_POST['name']) && isset($_POST['gmail']) && isset($_POST['father']) && isset($_POST['college']) && isset($_POST['univercity']) && isset($_POST['mobile'])){
  $st="insert into student (name,gmail,father,college,univercity,mobile) values(:name,:gmail,:father,:college,:univercity,:mobile)";
  $ex=$pdo->prepare($st);
  $ex->execute(array(
    ':name'=>$_POST['name'],
    ':gmail'=>$_POST['gmail'],
    ':father'=>$_POST['father'],
    ':college'=>$_POST['college'],
    ':univercity'=>$_POST['univercity'],
    ':mobile'=>$_POST['mobile']
  ));
}
}
if(isset($_POST['login'])){
  header('Location:login.php');
}
?>
<html>
<head>
  <title>Student Databse</title>
</head>
<body>
  <p align="center">Student Database</p>
  <form method="post">
    <p>Student's Name : <input type="text" name="name"></p>
    <p>Gmail : <input type="text" name="gmail"></p>
    <p>Father's Name : <input type="text" name="father"></p>
    <p>College : <input type="text" name="college"></p>
    <p>Univercity : <input type="text" name="univercity"></p>
    <p>Mobile : <input type="text" name="mobile"></p>
    <p><input type="submit" value="submit" name="entry"><p>
    <p><input type="submit" value="go back" name="login"></P>
    </form>
  </body>
  </html>
