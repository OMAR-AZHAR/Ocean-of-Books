



<?php


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
else "connection successfull";{



     $name=$_POST['name'];
    $email=$_POST['email'];
   $address=$_POST['address'];
   $phone=$_POST['phone'];
  
   $password=$_POST['pass'];
    
   
   
    $query="INSERT into signup(name,email,address,phone,password) values('$name','$email','$address','$phone','$password')";
    
    $c=mysqli_query($conn,$query);
    
   
               header("location:Login.html");
               

    
    /*if(!$c)
    {
        echo "<script>alert('Error inserting');</script>";
        header("location:Signup.html");
        
         
        
        }
    else{
        //---hashing passward to store in database---
                $hashedPwd=password_hash($password,PASSWORD_DEFAULT);  //use default hashing algotherem, u can use MD5, SHA etc too.
                
                //----runing query securly--
                mysqli_stmt_bind_param($stmt,"ss",$username,$hashedPwd);
             
   
    }
       */ 

}

?>





