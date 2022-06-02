<?php // VALIDATION.php **************
$servername="localhost";
$dBUsername="root";
$dBPassword="";
$dBName="Books";

$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
//--error checking----------
if(!$conn) 
{
 die("Connection failed:".mysqli_connect_error() );   
}
else "connection successfull";
//session_start();

if(isset($_POST['signin']))
{
$email=$_POST['lemail'];
$pass=$_POST['lpass'];
$query="SELECT * from signup where email='$email'";
$res=mysqli_query($conn,$query);
$x=mysqli_fetch_array($res);

   // echo $x['PASSWORD'];
if($x['password']==$pass && $x['email']==$email){
   
   header("location:dashboard.php");
 //    echo"dashboard";
    
    echo"<script>alert('record matched')</script>";
}
else
{
   
    echo"<script>alert('record did not match')</script>";
    // header("location:Login.html");
    
}}
?>