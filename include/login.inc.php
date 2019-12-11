

<?php
session_start();
if(isset($_POST['btnLogin'])){
	  $username=mysql_real_escape_string($_POST['txtEmail']);
	    $password=mysql_real_escape_string($_POST['txtPassword']);
	    $password=md5($password);
		if($username && $password){
			
			 $connect=mysql_connect("localhost","root","");
			 mysql_select_db("course_ware");
			 $sql=mysql_query("SELECT email ,password FROM users WHERE email='$username' and
			 	password='$password'");
			 while($log=mysql_fetch_assoc($sql)){
				$dbusername=$log['email'];
				$dbpassword=$log['password'];
			
			 }
			 if($username==$dbusername && $password==$dbpassword ){
				 $_SESSION['username']=$dbusername;
				 $_SESSION['password']=$dbpassword;
				 $user=$_SESSION['username'];
				 $sql=mysql_query("INSERT INTO user_session(email,password)
				 	values('$username','$password')"); 
				 	
				 header("Location: home.php");
				 echo $user;
			 }else{
				header("Location: login.php?notify=Incorrect username or password."); 
			 }
		}
	  else{
			header("Location: login.php?notify=All Fields are Required.");
			
		}
	
}


?>