<?php
$server_name="localhost";
$username="id18286487_omkarrenuse";
$password="Omaish@55555";
$database_name="id18286487_cleandropngo";
$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['PayNow']))
{	
	 $Name = $_POST['Name'];
	 $Email = $_POST['Email']; 
	 
	 $Address = $_POST['Address'];
	 $Mobile = $_POST['Mobile'];
	 

	 $sql_query = "INSERT INTO donation_info (Name,Email,Address,Mobile)
	 VALUES ('$Name','$Email','$Address','$Mobile')";
     if (mysqli_query($conn, $sql_query)) 
     {
     header('location:index.html');
    } 
    else
      {
     echo "Error: " . $sql . "" . mysqli_error($conn);
    } 

	
	 mysqli_close($conn);
   
     
}



?>