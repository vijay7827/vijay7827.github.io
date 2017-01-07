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
  $first=$_POST['fname'];
 $last=$_POST['lname'];
 $email=$_POST['email'];
$pass=$_POST['pass'];
$repass=$_POST['repass'];
 if(empty($first)||empty($last)||empty($email)||empty($pass))
   {
     echo "entries cant be left empty";
   }
 elseif($pass!=$repass)
   {
     echo "password do not match";
   }
 else
   {
     $sql="insert into form(fname,lname,email,pass)".
"values('$first','$last','$email','$pass')";
mysqli_query($conn,$sql);
  echo "data entered succesfully";
 }

?>
</body>
</html>

