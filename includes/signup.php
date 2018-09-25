<?php 
      include "db.php";
      if(isset($_POST['submit'])){

      	$first =  mysqli_real_escape_string($_POST['first'])	;
      	$last =   mysqli_real_escape_string($_POST['last'] )	;
      	$email=   mysqli_real_escape_string($_POST['email'])	;
      	$uid =    mysqli_real_escape_string($_POST['uid']  )	;
      	$pwd =    mysqli_real_escape_string($_POST['pwd']  )	;


      	$query = "INSERT INTO users(user_first,user_last,user_email,user_uid,user_pwd) ";
      	$query .= "VALUES('{$first}','{$last}','{$email}','{$uid}','{$pwd}') ";

      	$result = mysqli_query($connection,$query);
      	if(!$result){
      		die("Failed".mysqli_error($connection));
      	}

      }
      else {
      	header("Location:../signup.php");
      	exit();
      }



 ?>