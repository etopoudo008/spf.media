<?php

session_start(); 

 $userNumber = $_SESSION['userNumber']; 



 $userData =  'ud'.$userNumber; 
 $emailSource = "es". $userNumber;



   $recurringScheduleName=$_POST['recurringScheduleName'];
   
   $recurringMonday=$_POST['checkbox-1'];
   
        if(($recurringMonday) == "on")
         $recurringMonday = "1";

         

        
   
   $recurringTuesday=$_POST['checkbox-2'];
                 
        if(($recurringTuesday) == "on")
         $recurringTuesday = "1";

         
   
   
   $recurringWednesday=$_POST['checkbox-3'];
        if(($recurringWednesday) == "on")
         $recurringWednesday = "1";
      
   
   
   $recurringThursday=$_POST['checkbox-4'];
       
    if(($recurringThursday) == "on")
         $recurringThursday = "1";

         
   
   
   $recurringFriday=$_POST['checkbox-5'];
           
    if(($recurringFriday) == "on")
         $recurringFriday = "1";

         
   
   
   $recurringSaturday=$_POST['checkbox-6'];
   
    if(($recurringSaturday) == "on")
         $recurringSaturday = "1";

   
   $recurringSunday=$_POST['checkbox-7'];
   
    if(($recurringSunday) == "on")
         $recurringSunday = "1";

  
  
   $email = $_POST['userSession'];
   $rowID = $_POST['hiddenField'];
	



   $rID = $_POST['rID'];
   $rowID_int = (int)$rowID;
 
   $landingPage=$_POST['LandPage'];
   $subject=$_POST['subject'];
   $fromName=$_POST['fromName'];
   $replyto=$_POST['replyto'];
   $fromAddress1=$_POST['fromAddress1'];
   $bgColor = $_POST['colorPickerValue'];
   $textColor = $_POST['textColor'];  
   $sendBgColor = '#'. $bgColor;
   $sendTextColor = '#'. $textColor;
   $setStyle =  $_POST['hiddenSetStyle'];

    
    
     
    $hiddenFiled = $_POST['hiddenField'];
    $tableName = $_POST['tableName'];

  


 



   $DBhost = "db658058350.db.1and1.com";
        $DBuser = "dbo658058350";
        $DBpass = "sECU006!";
        $DBname = "db658058350";

        $DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
     





if (isset($_POST['save'])) {
  
	     $result = $DBcon->query(" UPDATE $userData  SET  `tableName`='$tableName', `rNAME`='$recurringScheduleName', `LandingPage`='$landingPage', `RMONDAY`='$recurringMonday', `RTUESDAY`='$recurringTuesday', `RWEDNESDAY`='$recurringWednesday', `RTHURSDAY`='$recurringThursday', `RFRIDAY`='$recurringFriday', `RSATURDAY`='$recurringSaturday', `RSUNDAY`='$recurringSunday', `RFROM`='$fromAddress1', `FROMNAME`='$fromName', `REPLYTO`='$replyto', `SUBJECT`='$subject',`bgColor`='$bgColor', `txtColor`='$textColor', `setStyle` = '$setStyle' WHERE  `rID`=$rowID_int");
     
 header("location: mail60.php");
    
	
	
}







if (isset($_POST['clear'])) {
    
header("location: mail60.php");

}




if (isset($_POST['delete'])) {
    
  
         
        
         

       $result = $DBcon->query("DELETE FROM $userData WHERE rID=$rowID_int");


        $result = $DBcon->query(" DROP TABLE $tableName");
      
       
   $DBcon->close();     


 
 header("location: mail60.php");


    } 



















if (isset($_POST['send'])) {
    

	 
$MIN_SESSION_ID = 1000000000;
$MAX_SESSION_ID = 9999999999;

$randId1 = mt_rand($MIN_SESSION_ID, $MAX_SESSION_ID);



$MIN_SESSION_ID = 1000000000;
$MAX_SESSION_ID = 9999999999;

$randId2 = mt_rand($MIN_SESSION_ID, $MAX_SESSION_ID);


$randId = $randId1. $randId2;

$mlTableName = "cml" . $randId;
 

     
     

    $DBhost = "db658058350.db.1and1.com";
        $DBuser = "dbo658058350";
        $DBpass = "sECU006!";
        $DBname = "db658058350";

        $DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
     


     $result = $DBcon->query("CREATE TABLE $mlTableName
(
ID int NOT NULL AUTO_INCREMENT,
emailAddress varchar(255) NOT NULL,

PRIMARY KEY (ID)
)");


 
  
   
    
  $fp = fopen($_FILES['file1']['tmp_name'], 'rb');
 
 if ($fp){
  while ( ($line = fgets($fp)) !== false) {
 	
	$DBcon->query("INSERT INTO `$mlTableName` (`emailAddress`) VALUES ('$line')");
    $mlCount += 1;
  
  
  }
  $esMailingList= 'campaign created with mailing list from file upload';
  $lastSent = "in progress";

	 
$result = $DBcon->query("INSERT INTO sendNow (userData, tableName, rNAME, LandingPage, RMONDAY, RTUESDAY, RWEDNESDAY, RTHURSDAY, RFRIDAY, RSATURDAY, RSUNDAY, RFROM, FROMNAME, REPLYTO, SUBJECT, bgColor, txtColor, setStyle, mlSource) VALUES ('$userData','$mlTableName', '$recurringScheduleName', '$landingPage', '$recurringMonday', '$recurringTuesday', '$recurringWednesday', '$recurringThursday', '$recurringFriday', '$recurringSaturday', '$recurringSunday','$fromAddress1', '$fromName', '$replyto', '$subject',  '$bgColor', '$textColor', '$setStyle', '$esMailingList')");

$result = $DBcon->query("INSERT INTO $userData (tableName, rNAME, LandingPage, RMONDAY, RTUESDAY, RWEDNESDAY, RTHURSDAY, RFRIDAY, RSATURDAY, RSUNDAY, RFROM, FROMNAME, REPLYTO, SUBJECT, bgColor, txtColor, setStyle, mailingList,lastSent, mlSource) VALUES ('$mlTableName', '$recurringScheduleName', '$landingPage', '$recurringMonday', '$recurringTuesday', '$recurringWednesday', '$recurringThursday', '$recurringFriday', '$recurringSaturday', '$recurringSunday','$fromAddress1', '$fromName', '$replyto', '$subject',  '$bgColor', '$textColor', '$setStyle', '$mlCount', '$lastSent',  '$esMailingList')");
 
	 

 }
	
	
	
	 function process_emailSource ($crm, $emailSource, $mlName, $esName ,  $userData, $mlTableName, $recurringScheduleName, $landingPage, $recurringMonday, $recurringTuesday, $recurringWednesday, $recurringThursday, $recurringFriday, $recurringSaturday, $recurringSunday, $fromAddress1, $fromName, $replyto, $subject,  $bgColor, $textColor, $setStyle, $esMailingList ) {
	
	  $esMailingList= 'campaign created with mailing list from ' ." ". $esName ;
    $lastSent = "in progress";
	
	 
$MIN_SESSION_ID = 1000000000;
$MAX_SESSION_ID = 9999999999;

$randId1 = mt_rand($MIN_SESSION_ID, $MAX_SESSION_ID);



$MIN_SESSION_ID = 1000000000;
$MAX_SESSION_ID = 9999999999;

$randId2 = mt_rand($MIN_SESSION_ID, $MAX_SESSION_ID);


$randId = $randId1. $randId2;

$mlTableName = "cml" . $randId;
 

	    $DBhost = "db658058350.db.1and1.com";
        $DBuser = "dbo658058350";
        $DBpass = "sECU006!";
        $DBname = "db658058350";

        $DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
     


     $result = $DBcon->query("CREATE TABLE $mlTableName
(
ID int NOT NULL AUTO_INCREMENT,
emailAddress varchar(255) NOT NULL,

PRIMARY KEY (ID)
)");

	
	
	
	
	
	  $result = $DBcon->query("SELECT * FROM `$mlName` ");
       if ($result->num_rows > 0)
         
      
      while($row = $result->fetch_assoc()) {
          
          $line = $row["emailAddress"];
         
          $DBcon->query("INSERT INTO `$mlTableName` (`emailAddress`) VALUES ('$line')");
          
				 $mlCount += 1;
      }
       
      $result = $DBcon->query("UPDATE `$emailSource`  SET `FLAG`= '0' WHERE `emailSource` = '$crm' ");
	  
	
	
	
		 
$result = $DBcon->query("INSERT INTO sendNow (userData, tableName, rNAME, LandingPage, RMONDAY, RTUESDAY, RWEDNESDAY, RTHURSDAY, RFRIDAY, RSATURDAY, RSUNDAY, RFROM, FROMNAME, REPLYTO, SUBJECT, bgColor, txtColor, setStyle, mlSource) VALUES ('$userData','$mlTableName', '$recurringScheduleName', '$landingPage', '$recurringMonday', '$recurringTuesday', '$recurringWednesday', '$recurringThursday', '$recurringFriday', '$recurringSaturday', '$recurringSunday','$fromAddress1', '$fromName', '$replyto', '$subject',  '$bgColor', '$textColor', '$setStyle', '$esMailingList')");

$result = $DBcon->query("INSERT INTO $userData (tableName, rNAME, LandingPage, RMONDAY, RTUESDAY, RWEDNESDAY, RTHURSDAY, RFRIDAY, RSATURDAY, RSUNDAY, RFROM, FROMNAME, REPLYTO, SUBJECT, bgColor, txtColor, setStyle, mailingList, lastSent, mlSource) VALUES ('$mlTableName', '$recurringScheduleName', '$landingPage', '$recurringMonday', '$recurringTuesday', '$recurringWednesday', '$recurringThursday', '$recurringFriday', '$recurringSaturday', '$recurringSunday','$fromAddress1', '$fromName', '$replyto', '$subject',  '$bgColor', '$textColor', '$setStyle', '$mlCount', '$lastSent', '$esMailingList')");
 
	
	
	$DBcon->close();

	
}
	

	
	
	
	
	
	
	
	
	
  $DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
     

    $result = $DBcon->query("SELECT * FROM `$emailSource`"); 

if ($result->num_rows > 0) 
  while($row = $result->fetch_assoc()) {
    
	 $available = $row["available"];
	 $mlName = $row["mlName"];
	 $esName = $row["esName"];
	 $crm = $row["emailSource"];
	 
	 if($row["FLAG"])
		
	process_emailSource ($crm, $emailSource, $mlName, $esName ,  $userData, $mlTableName, $recurringScheduleName, $landingPage, $recurringMonday, $recurringTuesday, $recurringWednesday, $recurringThursday, $recurringFriday, $recurringSaturday, $recurringSunday, $fromAddress1, $fromName, $replyto, $subject,  $bgColor, $textColor, $setStyle, $esMailingList );
     

     
 }
 

 	
	
	
	
header("location: mail60.php");




}



?>
