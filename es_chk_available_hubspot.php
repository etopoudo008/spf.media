<?php 

session_start(); 

 $userNumber = $_SESSION['userNumber']; 


 $esUserData = 'es'. $userNumber;



    $DBhost = "db658058350.db.1and1.com";
        $DBuser = "dbo658058350";
        $DBpass = "sECU006!";
        $DBname = "db658058350";


        $DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
 

$result = $DBcon->query("SELECT * FROM $esUserData WHERE ID=2");
$count=$result->num_rows;

if($count > 0)
$row = $result->fetch_assoc();
 

 $available =  $row["available"];  
  
if($available) { 

   
      header('Location: es_available_hubspot.php'); 
}
else
  header("location: enter_api_key_hubspot.php");
 

?>


