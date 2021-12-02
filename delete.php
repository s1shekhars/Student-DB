<?php
$pdo=new PDO('mysql:host=localhost;port=3306;dbname=mysql','root','root');
if(isset($_POST['del'])){
if(isset($_POST['name'])){
  $st="delete from student where name=:name";
  $ex=$pdo->prepare($st);
  $ex->execute(array(
    ':name'=>$_POST['name']
  ));
}
}
if(isset($_POST['login'])){
  header('Location:login.php');
}
?>
<html>
<head>
  <title>Delete</title>
</head>
<body>
  <p>Delete a record from Student</p>
  <form method="post">
    <p>Name <input type="text" name="name"></p>
    <p><input type="submit" value="Delete" name="del"></p>
    <p><input type="submit" value="go back" name="login"></p>
  </form>
</body>
</html>
