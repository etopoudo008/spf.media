<?php

session_start(); 

 $userNumber = $_SESSION['userNumber']; 

 

$fileName = $_FILES["file1"]["name"]; // The file name
$fileTmpLoc = $_FILES["file1"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["file1"]["type"]; // The type of file it is
$fileSize = $_FILES["file1"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["file1"]["error"]; // 0 for false... and 1 for true

if (!$fileTmpLoc) { // if file not chosen
    echo "ERROR: Please browse for a file before clicking the upload button.";
    exit();
}

 

   

 $userData =  'ud'.$userNumber; 

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
  
   $rID = $_POST['rID'];
 
 
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

  


   $hiddenFiled1 = (int)$hiddenFiled;
  

 
   
 //$landingPage="this is landing page";
 //   $subject="this is landing page";
  //  $fromName="user@domain.com";
 //   $fromAddress="user@domain.com";
   // $replyto="user@domain.com";
 
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
  

	 
$result = $DBcon->query("INSERT INTO sendNow (userData, tableName, rNAME, LandingPage, RMONDAY, RTUESDAY, RWEDNESDAY, RTHURSDAY, RFRIDAY, RSATURDAY, RSUNDAY, RFROM, FROMNAME, REPLYTO, SUBJECT, bgColor, txtColor, setStyle, mlSource) VALUES ('$userData','$mlTableName', '$recurringScheduleName', '$landingPage', '$recurringMonday', '$recurringTuesday', '$recurringWednesday', '$recurringThursday', '$recurringFriday', '$recurringSaturday', '$recurringSunday','$fromAddress1', '$fromName', '$replyto', '$subject',  '$bgColor', '$textColor', '$setStyle', '$esMailingList')");

$result = $DBcon->query("INSERT INTO $userData (tableName, rNAME, LandingPage, RMONDAY, RTUESDAY, RWEDNESDAY, RTHURSDAY, RFRIDAY, RSATURDAY, RSUNDAY, RFROM, FROMNAME, REPLYTO, SUBJECT, bgColor, txtColor, setStyle, mailingList, mlSource) VALUES ('$mlTableName', '$recurringScheduleName', '$landingPage', '$recurringMonday', '$recurringTuesday', '$recurringWednesday', '$recurringThursday', '$recurringFriday', '$recurringSaturday', '$recurringSunday','$fromAddress1', '$fromName', '$replyto', '$subject',  '$bgColor', '$textColor', '$setStyle', '$mlCount', '$esMailingList')");
 
	 
	 echo "pageReload";
 }





 


 

?>
