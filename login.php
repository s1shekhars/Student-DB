<?php
if(isset($_POST['add'])){
  header('Location:db.php');
}
if(isset($_POST['delete'])){
  header('Location:delete.php');
}
if(isset($_POST['show'])){
  header('Location:show.php');
}
if(isset($_POST['cancel'])){
  header('Location:index.php');
}
 ?>
<html>
<head>
  <title>S_Shekhar</title>
</head>
<body>
  <h2 align="center">Welcome to student database</h2>
  <p>This is simple student database progrm written in php.</p>
  <p>In this database we store record in mysql</p>
  <p>Record key is Name<br> Gmail<br> Father's Name<br> College<br> Univercity<br> and Mobile Number</p>
  <p>In this program we can insert record,delete record and see databse</p>
  <p>All code is written by Sitanshu Shekhar<p>
  <form method="post">
    <p><input type="submit" value="Add record" name="add">
      <input type="submit" value="Delete record" name="delete">
      <input type="submit" value="see record" name="show">
    </p>
    <p><input type="submit" value="cancel" name="cancel"></P>
    </form>
  </body>
  </html>
