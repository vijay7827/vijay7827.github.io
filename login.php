<?php
$host="localhost";
$dbuser="root";
$pass="";
$dbname="form";
$conn=mysqli_connect($host,$dbuser,$pass,$dbname);
if(mysqli_connect_errno())
{
die("connection failed".mysql_connect_error());
}
else
{
 echo "connected to daatabase";
}
?>
<html>
<head><title>Signup page</title></head>
<body>
<?php
    $email=$_POST['email'];
     $pass=$_POST['pass'];
   $sql="select * from form where email='$email' and pass='$pass'";
   $result=mysqli_query($conn,$sql);
   if(mysqli_num_rows($result)==1)
 {
  echo "you are successfully in";
  echo "<br/>";
  echo "username=$email";
 }
else
 {
   echo "username/password incorrect";
}

?>
</body>
</html>

