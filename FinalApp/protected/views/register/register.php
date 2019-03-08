<?php
if(isset($_POST['register'])){
$eid = $_POST['eid'];
$ename = $_POST['ename'];
$password = $_POST['password'];

$con = mysqli_connect("localhost","root","") or die("Not connected to mysql database");
$c = "create database testdrive";
$res = mysqli_query($con,$c);
$db = mysqli_select_db($con,"testdrive");
$c = "create table register(eid int,password varchar(20),ename varchar(30))";
$res = mysqli_query($con,$c);


  if(empty($eid) || empty($ename) || empty($password)){
     echo "<script> alert('All the Fields Are Not Filled. Please Fill and Try Again Later');</script>";
  }else{
     $insert_Query = "insert into register values($eid,'$password','$ename')";
	 $res = mysqli_query($con,$insert_Query);
	 echo "<script>alert('Record Inserted');</script>";
  }
}	
?>



<html>
<head><title>Register Application</title></head>
<body>
  <form action="" method="post">
	    <table width="509" height="501" border=2 align="center" style="border-collapse:collapse">
		  <tr><td colspan=2 style="text-align:center" ><h2>Registration Details<h2></td></tr>
		 
		  
		  <tr>
		     <td height="50" >Name : <input type="text" name="ename"></td>
		  </tr>
		  
		  <tr>
		     <td height="50" >Id : &nbsp; <input type="text" name="eid"></td>
		  </tr>
		  
		  <tr>
		     <td height="50" >Password : <input type="text" name="password"></td>
		  </tr>
		  
		  <tr>
		     <td colspan=2> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="submit" name="register" value="Register"> </td>
		  </tr>
			    
	</table>	  
  </form>   
</body>
</html>