<?php

  

    $DBhost = "db658058350.db.1and1.com";
        $DBuser = "dbo658058350";
        $DBpass = "sECU006!";
        $DBname = "db658058350";


        $DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
        

$email=$_POST['email'];



$result = $DBcon->query("SELECT * FROM usersDB2 WHERE emailAddress LIKE '$email'");
 $count=$result->num_rows;
 
  if($count > 0){
    $row = $result->fetch_assoc();
    $userNumber = $row['userNumber'];
  }

 




  if ($count == 1)  {
      session_start(); 
      $_SESSION['userNumber']= $userNumber; // Initializing Session

    
   
      header("location: mail50.php"); // Redirecting To Other Page
      }
      
      
    $DBcon->close();

?>