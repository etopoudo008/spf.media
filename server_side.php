<?php 



session_start(); 

 $userNumber = $_SESSION['userNumber']; 


 $esUserData = 'es'. $userNumber;



   function objectToArray($d) {
        if (is_object($d)) {
            // Gets the properties of the given object
            // with get_object_vars function
            $d = get_object_vars($d);
        }
  
        if (is_array($d)) {
            /*
            * Return array converted to object
            * Using __FUNCTION__ (Magic constant)
            * for recursive call
            */
            return array_map(__FUNCTION__, $d);
        }
        else {
            // Return array
            return $d;
        }
    }
  






require("insightly-php/insightly.php");

$apiKey=$_POST['apiKey'];

$i = new Insightly($apiKey);

  
  

$contacts = $i->getContacts();




$contactInfo = array_column($contacts, 'CONTACTINFOS');

$results = objectToArray($contactInfo);


  
$esTableName1 = 'es1' . $userNumber;     
 
 
    $DBhost = "db658058350.db.1and1.com";
        $DBuser = "dbo658058350";
        $DBpass = "sECU006!";
        $DBname = "db658058350";


        $DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
 
  
  
     $result = $DBcon->query(" DROP TABLE $esTableName1");
   
  
  
       $result = $DBcon->query("CREATE TABLE $esTableName1
(
ID int NOT NULL AUTO_INCREMENT,
emailAddress varchar(255) NOT NULL,

PRIMARY KEY (ID)
)");

 
 
 

    foreach($results as $result)
     {

 
    $line = $result[0]['DETAIL'];
    
    $DBcon->query("INSERT INTO `$esTableName1` (`emailAddress`) VALUES ('$line')");
    
 
   }

    $result = $DBcon->query("SELECT * FROM `$esTableName1` ");


if ($result->num_rows > 0) {


  $result = $DBcon->query("UPDATE `$esUserData`  SET `available` = '1' ,  `FLAG` = '1'  WHERE `emailSource` = 'ES1' ");

  echo "1";

}
else
{

 echo "Invalid api key or no emails available from crm.  Please try again or see support page.";

}





?>


