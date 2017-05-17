<?php

$MIN_SESSION_ID = 1000000000;
$MAX_SESSION_ID = 9999999999;

$randId1 = mt_rand($MIN_SESSION_ID, $MAX_SESSION_ID);



$MIN_SESSION_ID = 1000000000;
$MAX_SESSION_ID = 9999999999;

$randId2 = mt_rand($MIN_SESSION_ID, $MAX_SESSION_ID);


$randId = $randId1. $randId2;



$userNumber = "un" . $randId;
$userData = "ud" . $userNumber;
$emailSource = "es". $userNumber;
$campaignName = "c" . $randId;



    $DBhost = "db658058350.db.1and1.com";
        $DBuser = "dbo658058350";
        $DBpass = "sECU006!";
        $DBname = "db658058350";



        $DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
        
        

   
  $result = $DBcon->query("INSERT INTO `usersDB2` (`userNumber`, `emailAddress`, `password`, `userData`, `emailSource`) VALUES ('$userNumber', 'user16@spf.media', 'sECU006!', '$userData','$emailSource')");
  
	 
	      $result = $DBcon->query("CREATE TABLE $userData
(
rID int NOT NULL AUTO_INCREMENT,
tableName varchar(255) NOT NULL,
rNAME varchar(255) NOT NULL,
LandingPage varchar(255) NOT NULL,
RMONDAY varchar(255) NOT NULL,
RTUESDAY varchar(255) NOT NULL,
RWEDNESDAY varchar(255) NOT NULL,
RTHURSDAY varchar(255) NOT NULL,
RFRIDAY varchar(255) NOT NULL,
RSATURDAY varchar(255) NOT NULL,
RSUNDAY varchar(255) NOT NULL,
RFROM varchar(255) NOT NULL,
FROMNAME varchar(255) NOT NULL,
REPLYTO varchar(255) NOT NULL,
SUBJECT varchar(255) NOT NULL,
mailingList varchar(255) NOT NULL,
lastSent varchar(255) NOT NULL,
bgColor  varchar(255) NOT NULL,
txtColor  varchar(255) NOT NULL,
setStyle  varchar(255) NOT NULL,
mlSource  varchar(255) NOT NULL,
clickRate  int(255) NOT NULL,
Unsubscribe int(255) NOT NULL,
PRIMARY KEY (rID)
)");




$tableName = $campaignName;
$recurringScheduleName = 'Sample Campaign'; 
$landingPage = 'http://domain.com/landingPage.htm';
$recurringMonday = '1';
$recurringTuesday = '1';
$recurringWednesday = '1';
$recurringThursday = '1';
$recurringFriday = '1';
$recurringSaturday = '1';
$recurringSunday = '1';
$fromAddress1 = 'user@example.com';
$fromName = 'your name or your company name';
$replyto = 'your reply to address';
$subject = 'your product or services';
$bgColor = '3026ff';
$textColor = 'f9ffe2';
$setStyle =  '1';
$esMailingList= 'campaign created with mailing list file upload';
   
 
 
 

 

//$result = $DBcon->query("INSERT INTO `$userData` (`tableName`, `rNAME`, `LandingPage`, `RMONDAY` ) VALUES ('$campaignName', '$recurringScheduleName', '$landingPage','1')");   

//$result = $DBcon->query("INSERT INTO $userData (tableName, rNAME, LandingPage, RMONDAY, RTUESDAY, RWEDNESDAY, RTHURSDAY, RFRIDAY, RSATURDAY, RSUNDAY, RFROM, FROMNAME ) VALUES ('$campaignName', '$recurringScheduleName', '$landingPage', '1', '1', '1', '1', '1', '1', '1', '$fromAddress1', '$fromName')"); 


 

$result = $DBcon->query("INSERT INTO $userData (tableName, rNAME, LandingPage, RMONDAY, RTUESDAY, RWEDNESDAY, RTHURSDAY, RFRIDAY, RSATURDAY, RSUNDAY, RFROM, FROMNAME, REPLYTO, SUBJECT, bgColor, txtColor, setStyle, mlSource) VALUES ('$tableName', '$recurringScheduleName', '$landingPage', '$recurringMonday', '$recurringTuesday', '$recurringWednesday', '$recurringThursday', '$recurringFriday', '$recurringSaturday', '$recurringSunday','$fromAddress1', '$fromName', '$replyto', '$subject',  '$bgColor', '$textColor', '$setStyle', '$esMailingList')");
 
        
//$tableName = 1;
 
 //$result = $DBcon->query(" INSERT INTO `$userData` ( `tableName`, `rNAME`, `LandingPage`, `RMONDAY`, `RTUESDAY`, `RWEDNESDAY`, `RTHURSDAY`, `RFRIDAY`, `RSATURDAY`, `RSUNDAY`, `RFROM`, `FROMNAME`, `REPLYTO`, `SUBJECT`,`bgColor`, `txtColor`) VALUES ('$tableName', '$recurringScheduleName', '$landingPage', '1', '1', '1', '1', '1', '1', '1','$fromAddress1', '$fromName', '$replyto', '$subject',  '$bgColor', '$textColor')");
  






 $result = $DBcon->query("CREATE TABLE $emailSource
(
ID int NOT NULL AUTO_INCREMENT,
emailSource varchar(255) NOT NULL,
esName varchar(255) NOT NULL,
available varchar(255) NOT NULL,
mlName varchar(255) NOT NULL,
FLAG varchar(255) NOT NULL,
PRIMARY KEY (ID)
)");




$esTableName1 = 'es1' . $userNumber;
$esTableName2 = 'es2' . $userNumber;
$esTableName3 = 'es3' . $userNumber;
$esTableName4 = 'es4' . $userNumber;
$esTableName5 = 'es5' . $userNumber;
$esTableName6 = 'es6' . $userNumber;








$result = $DBcon->query("INSERT INTO $emailSource ( emailSource, esName, available, mlName, FLAG) VALUES ('ES1', 'insightly crm', '1', '$esTableName1', '0')");
$result = $DBcon->query("INSERT INTO $emailSource ( emailSource, esName, available, mlName, FLAG) VALUES ('ES2', 'hubspot crm', '1', '$esTableName2', '0')");
$result = $DBcon->query("INSERT INTO $emailSource ( emailSource, esName, available, mlName, FLAG) VALUES ('ES3', 'zoho crm', '1', '$esTableName3', '0')");
$result = $DBcon->query("INSERT INTO $emailSource ( emailSource, esName, available, mlName, FLAG) VALUES ('ES4', 'close.io crm', '1', '$esTableName4', '0')");
$result = $DBcon->query("INSERT INTO $emailSource ( emailSource, esName, available, mlName, FLAG) VALUES ('ES5', 'agile crm', '1', '$esTableName5', '0')");
$result = $DBcon->query("INSERT INTO $emailSource ( emailSource, esName, available, mlName, FLAG) VALUES ('ES6', 'capsule crm', '1', '$esTableName6', '0')");









$DBcon->close();


 session_start(); 
      $_SESSION['userNumber']=$userNumber; // Initializing Session

      
      header("location: mail21.php"); // Redirecting To Other Page







?>
