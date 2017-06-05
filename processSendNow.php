<?php 


   $DBhost = "db658058350.db.1and1.com";
        $DBuser = "dbo658058350";
        $DBpass = "sECU006!";
        $DBname = "db658058350";

        $DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
        
      
    
    $result = $DBcon->query("SELECT * FROM `sendNow`"); 

if ($result->num_rows > 0) 

 while($row = $result->fetch_assoc()) {
     
     sendNow($row["rID"], $row["userData"], $row["tableName"], $row["SUBJECT"], $row["LandingPage"], $row["RFROM"],  $row["REPLYTO"], $row["FROMNAME"], $row["bgColor"], $row["txtColor"], $row["setStyle"] );
     

     
 }
$DBcon->close();




function sendNow( $rowID, $userData, $mltableName, $subject, $landingPage, $fromAddress,  $replyto, $fromName, $bgColor, $txtColor, $setStyle ){

   $DBhost = "db658058350.db.1and1.com";
        $DBuser = "dbo658058350";
        $DBpass = "sECU006!";
        $DBname = "db658058350";


        $DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
        
  
 $result = $DBcon->query("DELETE FROM sendNow WHERE rID='$rowID'");

	
	$msg1 = "

<html>
<head>
<style> 



</style>
</head>
<body style=\"width: 100%; padding: 32px; background-color: blue;  background-image: linear-gradient(45deg, $bgColor 25%, transparent 25%), linear-gradient(-45deg, $bgColor  25%, transparent 25%), linear-gradient(45deg, transparent 75%, $bgColor 75%), linear-gradient(-45deg, transparent 75%, $bgColor  75%); background-size:10px 10px; background-position:0 0, 0 10px, 10px -10px, -10px 0px\"; >
 <a style=\"font-family:Verdana, Verdana, Geneva, sans-serif; font-weight:600; font-size:24px; text-decoration:none; color:$txtColor; \" href=\"$landingPagelink\"> $landingPage</a>     
<table>
<tr>
<th></th>
<th></th>
</tr>
<tr>
<td </td>
<td ></td>
</tr>
</table>


</body>
</html>

";

if($setStyle == 1)	
	$message = $msg1;
	
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From:'. $fromAddress . "\r\n";
	
	
 
    
    $result = $DBcon->query("SELECT * FROM $mltableName "); 

if ($result->num_rows > 0) {

 while($row = $result->fetch_assoc()) {
   
	 $to = $row["emailAddress"];
     
   mail($to,$subject,$message,$headers);

     
 }



$lastSent  = date("m/d/y g.i a"); 

	
$result = $DBcon->query("UPDATE  $userData  SET lastSent = '$lastSent' WHERE tableName = '$mltableName' ");
	

$DBcon->close();
}

}




?>