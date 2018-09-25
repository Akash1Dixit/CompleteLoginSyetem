<?php 
      include "db.php";
      if(isset($_POST['submit'])){

      	$first = $_POST['first'];
      	$last =$_POST['last'];
      	$email= $_POST['email'];
      	$uid = $_POST['uid'];
      	$pwd = $_POST['pwd'];


      	$query = "INSERT INTO users(user_first,user_last,user_email,user_uid,user_pwd) ";
      	$query .= "VALUES('{$first}','{$last}','{$email}','{$uid}','{$pwd}') ";

      	$result = mysqli_query($connection,$query);
      	if(!$result){
      		die("Failed".mysqli_error($connection));
      	}

      }



 ?>