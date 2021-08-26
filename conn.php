<html>
<head>  
    <title>PHP login system</title>  

    <link rel = "stylesheet" type = "text/css" href = "css1.css">   
</head>  
<body> 
	<div class="loginbox">
		<img src="avtar.png" class="logo">
		<h1>Login Here</h1>
		<form action="conn.php">
			<p>Username</p>
			<input type = "text"  name="" placeholder="Enter Username">
			<p>Password</p>
			<input type = "password" name  = "" placeholder="Enter Password">
			<input type="submit" name="" value="Login">
			<a href="#">Forgot Password?</a><br>
			<a href="#">SignUp</a>
</form>

</body>
</html>
<?php      
      
 //  mysql_connect("localhost","root","")or die(mysql_error());
	
  // mysql_select_db("conn") or die (mysql_error());  
 // mysqli_connect("localhost","root","password","conn"); 
 
 $username = 'root'; // Mysql
$password = ''; // Mysql Password
$server = 'localhost'; // Mysql Host
$database = 'conn'; // Mysql Databse
// PDO Connection string
$pdo = new PDO("mysql:host=$server;dbname=$database", $username, $password);

	 if(isset($_POST['singup']))
	 {
		 $name=$_POST['name'];
		 $pass=$_POST['password'];
		 $query=mysqli_query("insert into user(username,password)values('$name','$pass')");	 }
		/*	if(mysqli_query($query))
			{
				echo"<h3>Successfully logged in!!!</h3>";
			}
		*/
		
		
	

?> 