<?php 

     $db['db_host']= 'localhost';
     $db['db_us']=  'root';
     $db['db_pass']= '';
     $db['db_name']= 'login_system';

     foreach($db as $key=>$values){
     	DEFINE(strtoupper($key),$values);
     }

     $connection = mysqli_connect(DB_HOST,DB_US,DB_PASS,DB_NAME);
     if(!$connection){
     	die("failed".mysqli_error($connection));
     }















 ?>