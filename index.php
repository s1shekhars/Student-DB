<?php
if(isset($_POST['admin']) && isset($_POST['password'])){
  $e=$_POST['admin'];
  $p=$_POST['password'];
  if($e=="Sitanshu" && $p=="php123"){
    header('Location: login.php');
  }
  else{
    echo"<p style='color:red'>wrong admin or password</p>";
  }
}
if(isset($_POST['cancel'])){
  echo"<p style='color:green'>see sourse code</p>";
}
?>
 <html>
 <head>
   <title>Student Database</title>
 </head>
 <body>
   <h3>Please login to enter student databse</h3>
   <!--Hint admin="Sitanshu" and Password="php123"-->
   <form method="post">
     <p>Admin name <input type="text" name="admin"></p>
     <p>Password <input type="password" name="password"></p>
     <p><input type="submit" value="login"></p>
     <p><input type="submit" value="forget password" name="cancel"></p>
   </form>
 </body>
 </html>
