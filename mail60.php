<?php

session_start(); 

 $userNumber = $_SESSION['userNumber']; 


    $DBhost = "db658058350.db.1and1.com";
        $DBuser = "dbo658058350";
        $DBpass = "sECU006!";
        $DBname = "db658058350";


        $DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
        

  $result = $DBcon->query("SELECT * FROM usersDB2 WHERE userNumber LIKE '$userNumber'");
 
  $count=$result->num_rows;
 
  if($count > 0){
		$row = $result->fetch_assoc();
 
		 $email = $row["emailAddress"];
 
	}

	


		
		
		 $usertable =  'ud'.$userNumber; 

    $result = $DBcon->query("SELECT * FROM $usertable ORDER BY rID DESC");


if ($result->num_rows > 0) {
   
   
    echo "<table   cellpadding=\"5\";  id=\"tableID1\"  >";
       
     while($row = $result->fetch_assoc()) {
echo "<tr id=\"trID\" onclick=\"myFunction(this)\" ><td  id=\"tdID\"; style=\"display:none\" >" . $row["rID"]. "</td><td style=\"display:none\">" . $row["tableName"]. "</td><td>". $row["rNAME"]. "</td><td>" . $row["SUBJECT"]. " </td> <td>" . $row["LandingPage"]. "</td><td>" . $row["FROMNAME"]. "</td><td>". $row["RFROM"]. "</td><td>". $row["REPLYTO"]. "</td><td>" . $row["RMONDAY"]."</td><td> ".$row["RTUESDAY"]."</td><td> ".$row["RWEDNESDAY"]."</td><td> ".$row["RTHURSDAY"]."</td><td> ".$row["RFRIDAY"]."</td><td> ".$row["RSATURDAY"]."</td><td> ". $row["RSUNDAY"].  "</td><td>". $row["bgColor"].  "</td><td>". $row["txtColor"].  "</td><td>". $row["setStyle"].  "</td><td>". $row["mlSource"]. "</td></tr>";
     }
     echo "</table>";

}

      
      
      
    $DBcon->close();

?>


<!DOCTYPE html>
<html>
<head>

<title></title>
 <link href="recurringStyleSheet50.css" rel="stylesheet" type="text/css">
  <script src="jquery-3.1.1.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script src="jscolor.js"></script>

	
	<script>

function setBackground(){

 document.getElementById("LandPage").style.cssText = "width: 400px; height: 400px; background-color: blue; background-image:linear-gradient(45deg, #808080 25%, transparent 25%), linear-gradient(-45deg, #808080 25%, transparent 25%), linear-gradient(45deg, transparent 75%, #808080 75%), linear-gradient(-45deg, transparent 75%, #808080 75%);background-size:20px 20px;background-position:0 0, 0 10px, 10px -10px, -10px 0px"; 
      
 
 
}

</script>
	
	
	
	
	
<script>
	
	function chbg(color) {
				var patternColor = document.getElementById("colorPickerValue").value;
		 

		
			var patternColorHex = "#" + patternColor; 
	
		 var bgColor =  "#" + patternColor;
		

		
		document.getElementById("LandPage").style.cssText = "width: 400px; height: 400px; background-color: blue; background-image:linear-gradient(45deg, #808080 25%, transparent 25%), linear-gradient(-45deg, #808080 25%, transparent 25%), linear-gradient(45deg, transparent 75%, #808080 75%), linear-gradient(-45deg, transparent 75%, #808080 75%);background-size:20px 20px;background-position:0 0, 0 10px, 10px -10px, -10px 0px;" >

}  
	</script>


	
		<script>
	function 	myFunctionChecker() {
	
				var patternColor = document.getElementById("colorPickerValue").value;
		 		
			var patternColorHex = "#" + patternColor; 
	
		 var bgColor =  "#" + patternColor;
		
			
		
 document.getElementById("LandPage").style.cssText = "background-color: blue;  background-image: -webkit-linear-gradient(45deg," + bgColor + " 25%, transparent 25%), -webkit-linear-gradient(-45deg, " + bgColor + " 25%, transparent 25%), -webkit-linear-gradient(45deg, transparent 75%," + bgColor + " 75%), -webkit-linear-gradient(-45deg, transparent 75%," + bgColor + " 75%); -webkit-background-size:10px 10px; -webkit-background-position:0 0, 0 10px, 10px -10px, -10px 0px"; 
      
document.getElementById("hiddenSetStyle").value = 1;
	
	
		
	}
	
	</script>	
	
	
	
	
	
	
	
	
	
	<script>
	
	function dropDownSetStyle(){
	
		 document.getElementById("dropDownSetStyle").style.cssText = "display: block";
	
		
	}
	</script>
	
	<script>
	function myFunctionReset(){
	
				var patternColor = document.getElementById("colorPickerValue").value;
		 
	
		 var bgColor =  "#" + patternColor;
		
 
		document.getElementById("LandPage").style.cssText = "background-color:" + bgColor ;
		document.getElementById("hiddenSetStyle").value = 0;

	}
	
	</script>	

	
	
<script>
    
    
</script>  
  



<script>



  



function _(el){
	return document.getElementById(el);
}

function uploadFile(){
	
	var file = _("file1").files[0];
	// alert(file.name+" | "+file.size+" | "+file.type);
	var formdata = new FormData();
	formdata.append("file1", file);
	
	formdata.append("checkbox-1", _("checkbox-1").value);
	formdata.append("checkbox-2", _("checkbox-2").value);
	formdata.append("checkbox-3", _("checkbox-3").value);
	formdata.append("checkbox-4", _("checkbox-4").value);
	formdata.append("checkbox-5", _("checkbox-5").value);
	formdata.append("checkbox-6", _("checkbox-6").value);
	formdata.append("checkbox-7", _("checkbox-7").value);
	formdata.append("LandPage", _("LandPage").value);
	formdata.append("recurringScheduleName", _("recurringScheduleName").value);
	formdata.append("subject", _("subject").value);
	formdata.append("fromName", _("fromName").value);
	formdata.append("replyto", _("replyto").value);
	formdata.append("fromAddress1", _("fromAddress1").value);
	formdata.append("hiddenField", _("hiddenField").value);
	formdata.append("tableName", _("tableName").value);
	formdata.append("colorPickerValue", _("colorPickerValue").value);
	formdata.append("textColor", _("textColor").value);
	formdata.append("hiddenSetStyle", _("hiddenSetStyle").value);
	
	
	

	var ajax = new XMLHttpRequest();
	ajax.upload.addEventListener("progress", progressHandler, false);
	ajax.addEventListener("load", completeHandler, false);
	ajax.addEventListener("error", errorHandler, false);
	ajax.addEventListener("abort", abortHandler, false);
	ajax.open("POST", "file_upload_parser40.php");
	ajax.send(formdata);
	document.getElementById("status").innerHTML = "processing...";

	 ajax.onreadystatechange = function() {
	    if(ajax.readyState == 4 && ajax.status == 200) {
		  //  location.reload(false);
				 location.href = "http://vnox.io/mail40.php";
	    }
    }
	
	
	
	
}
function progressHandler(event){
	_("loaded_n_total").innerHTML = "Uploaded "+event.loaded+" bytes of "+event.total;
	var percent = (event.loaded / event.total) * 100;
	_("progressBar").value = Math.round(percent);
	_("status").innerHTML = Math.round(percent)+"% uploaded... please wait";
}
function completeHandler(event){
	_("status").innerHTML = event.target.responseText;
	_("progressBar").value = 0;
	
}
function errorHandler(event){
	_("status").innerHTML = "Upload Failed";
}
function abortHandler(event){
	_("status").innerHTML = "Upload Aborted";
}
	

</script>

<script>






function update(jscolor) {
    // 'jscolor' instance can be used as a string
    document.getElementById('LandPage').style.backgroundColor = '#' + jscolor
    document.getElementById('colorPickerValue').value = jscolor
     
}



function textUpdate(jscolor) {
    // 'jscolor' instance can be used as a string
    document.getElementById('LandPage').style.color = '#' + jscolor
    document.getElementById('textColor').value = jscolor
     
}




function myFunction(e) {

  var MyTable = document.getElementById('tableID1');
  var x = MyTable.rows.length;
for (var i = 0; i < x; i++) {
    
MyTable.rows[i].style.backgroundColor = 'white';
}
  
   e.style.backgroundColor = "#D5D8DC";
   

   
  //  document.getElementById('LandPage').style.backgroundColor = '#' + e.cells[15].innerHTML;
  
	document.getElementById('colorPickerValue').value = e.cells[15].innerHTML;
    
  // document.getElementById('LandPage').style.color = '#' + e.cells[16].innerHTML;
	

	
	document.getElementById("LandPage").style.cssText = "background: " + '#' + e.cells[15].innerHTML + "; color:" + "#" + e.cells[16].innerHTML + " ; text-align: center; vertical-align: middle; font-family: ‘Arial Black’, Gadget, sans-serif;  font-size:75px; font-weight: 900;  display: block; padding:32px; padding-left:15px; border:1px solid #ccc; width:1400px; margin-right: auto; margin-left: auto";
	 
	
	
	
    document.getElementById('textColor').value = e.cells[16].innerHTML;
	
   
	  var setStyle = e.cells[17].innerHTML;
	    if(setStyle == 1)
			myFunctionChecker();	
	
	document.getElementById("status").innerHTML = e.cells[18].innerHTML;
	
	
    document.getElementById("recurringScheduleName").value = e.cells[2].innerHTML;
    
    document.getElementById("LandPage").value = e.cells[4].innerHTML;
    document.getElementById("subject").value = e.cells[3].innerHTML;
        document.getElementById("fromAddress1").value = e.cells[6].innerHTML;
    document.getElementById("fromName").value = e.cells[5].innerHTML;
    document.getElementById("replyto").value = e.cells[7].innerHTML;
    
      
     document.getElementById("hiddenField").value = e.cells[0].innerHTML;
     
     document.getElementById("tableName").value = e.cells[1].innerHTML;
     
    
    
          if((e.cells[8].innerHTML) == 1)
       
        document.getElementById("checkbox-1").checked = true;
    
       
       
    

       if((e.cells[9].innerHTML) == 1)
       
        document.getElementById("checkbox-2").checked = true;
    
     
        
               if((e.cells[10].innerHTML) == 1)
       
        document.getElementById("checkbox-3").checked = true;
    
   
        
               if((e.cells[11].innerHTML) == 1)
       
        document.getElementById("checkbox-4").checked = true;
    
 
        
               if((e.cells[12].innerHTML) == 1)
       
        document.getElementById("checkbox-5").checked = true;
    

        
               if((e.cells[13].innerHTML) == 1)
       
        document.getElementById("checkbox-6").checked = true;
    

        
               if((e.cells[14].innerHTML) == 1)
       
        document.getElementById("checkbox-7").checked = true;
    
   
   
   
        

    
}
	
	
	
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function clikable_dropdown() {
    document.getElementById("myDropdown").classList.add("show");
}

function mouse_out_function(){

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
	


}


	
	
	
	
	
	
</script>
 
    
   
<style type="text/css">

	#setting_id{
		color: #FF3333;
	}

	#setting_id:hover{
		color: #0BB5FF;
	}
	
	
		#ul_horizontal_menu_top-nav_container{
		list-style: none;
		padding: 0px;
		margin: 0px;  
		font-family:arial, sans-serif; 
	}
	
	

	
	  	#ul_horizontal_menu_top-nav_container li { 
		display: block;
		position: relative;
		float: left;
	
	}
	
	
	
	
	  #ul_horizontal_menu_top-nav_element ul {
		display: none;
	}
	

	
	 	#ul_horizontal_menu_top-nav_container li #anchore_button {
		display: block;
		background: #9f9bff ; 
		padding: 5px;
    white-space: nowrap;
		color: #fff; 
		
	}
	
	
	
	
	  #ul_horizontal_menu_top-nav_element:hover #item_container {
		display: block; 
		position: absolute; 
	
	}
	
	
	
	
ul {
		list-style: none;
		padding: 0px;
		margin: 0px;  
		font-family:arial, sans-serif; 
	}
	
  ul li { 
		display: block;
		position: relative;
		float: left;
		
	}
  li ul {
		display: none;
	}
  ul li #setStyle {
		display: block;
		background: #9f9bff ; 
		padding: 5px;
    white-space: nowrap;
		color: #fff; 
		
	}
	
	
  ul li #setStyle:hover {
		background: #AEFF14;
	}
	


	  li:hover ul {
		display: block; 
		position: absolute; 
	
	}
	
	

	
	
  li:hover li {
		float: none;
	}
  li:hover #setStyle {
		background: #AEFF14;
	}
  li:hover li #setStyle1:hover {
	
	}
  #drop-nav li ul li {
		border-top: 0px; 
		font-family:arial, sans-serif; 
	}
	

	/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
    background-color: #3e8e41;
}

/* The container div - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;

	z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}			

	
	
	
	
	
	
	
		
	

	
</style>





</head>
<body>




  

  


















<table id="tableTAB">
    


<tr >
    
<td class="tdTAB">
   
   
    
<div  style="text-align: center;  vertical-align: middle">
	
	
   
<a id="aTAB" href="emailSource2.php">crm</a>
</div>


</td >





<td class="tdTAB">
    
    <div  style="text-align: center;  vertical-align: middle">
			


<a id="aTAB" href="mail60.php">email automation</a>

	</div>
</td>


<td class="tdTAB" >
  <div  style="text-align: center; vertical-align: middle">
		
 
    

<a id="aTAB" href="http://vnox.io/analytics60.php">analytics</a>

			</div> 
</td>




    
<td >
   
   
   <div  style="text-align: center;   vertical-align: middle">
		 


<a class="tdTAB" id="aTAB" href="http://vnox.io/supportPage90.php">support</a>

	</div> 


</td>

	

	
	
	
	
	
<td width=12%> <div style="position:relative; z-index:10 ; " >


<ul id="ul_horizontal_menu_top-nav_container" >
	
	
	<li  id="ul_horizontal_menu_top-nav_element" ><a href="#" id=""  style="text-align: left;  vertical-align: middle; color: blue; cursor: pointer; border: none;  font-size: 12px;  text-decoration:none;" >
		<?php echo $email; ?>     &#x25bc; </a>            
	 
		
		<ul id="item_container"  >
       
			
				
			
			<li   id= "a_dropdown_listContaing_table"  style = ""  >
				 
					 
					 
					 
					 
				      <a  href="settings4.php" class="testClass" id="setting_id"  value="" onmouseover=""  style="font-size: 18px "> Settings	 </a>
		 
						 
		
					 
				
				
					 
					 
			</li>			 					 
					 
					
	<li>					

<div style=" vertical-align: middle;cursor: pointer; text-align: right" >
<b><a class="aProfile" href="logout.php">Log Out</a></b>
</div>

				 
											 
											 
											 
											 
											 
											 
					 
					 
				 
			 
			</li>
				
		
			
			
          </ul>
  </li>
 
</ul>	

</div>
</td>


	
	
	

</tr>


 </table>





<div>
 
 <form action="file_upload_parser60.php" id="upload_form" enctype="multipart/form-data" method="post">   



 

<table id="tableCheckBox">
  <tr>
   
      
    <th>
        

 
      <div style="float:left" >
        <input id="checkbox-1" class="checkbox-custom" name="checkbox-1" type="checkbox" >
        <label for="checkbox-1" class="checkbox-custom-label">Monday</label>
      </div>





        
        
        
        </th>
    <th>
        
        
      <div style="float:left">
        <input id="checkbox-2" class="checkbox-custom" name="checkbox-2" type="checkbox">
        <label for="checkbox-2" class="checkbox-custom-label">Tuesday</label>
      </div>



        </th> 
    <th>
        
      <div style="float:left">
        <input id="checkbox-3" class="checkbox-custom" name="checkbox-3" type="checkbox">
        <label for="checkbox-3"class="checkbox-custom-label">Wednesday</label>
        </div>




        </th>
        
        
        
            <th>
         
        <div style="float:left">
        <input id="checkbox-4" class="checkbox-custom" name="checkbox-4" type="checkbox">
        <label for="checkbox-4"class="checkbox-custom-label">Thursday</label>
        </div>




        
        
        
        </th>
    <th>
        
        
        <div style="float:left">
        <input id="checkbox-5" class="checkbox-custom" name="checkbox-5" type="checkbox">
        <label for="checkbox-5"class="checkbox-custom-label">Friday</label>
        </div>

  



        </th> 
    <th>
        
        <div style="float:left">
        <input id="checkbox-6" class="checkbox-custom" name="checkbox-6" type="checkbox">
        <label for="checkbox-6"class="checkbox-custom-label">Saturday</label>
        </div>



        </th>
        
        
            <th>
        
        <div style="float:left">
        <input id="checkbox-7" class="checkbox-custom" name="checkbox-7" type="checkbox">
        <label for="checkbox-7"class="checkbox-custom-label">Sunday</label>
        </div>




        </th>
        
        
        
  </tr>

</table>



 
<table id="tableColorPicker">
    

<tr>
    



    


<td width="15%">
<p>Change background color:    
<input class="jscolor {onFineChange:'update(this)',valueElement:null,value:'66ccff'}" style="border:2px #000033; width:50px; height:45px;">

</td>


<td >
<div style="float:left; border: 1px solid blue">
<p>Change text color:
<input class="jscolor {onFineChange:'textUpdate(this)',valueElement:null,value:'66ccff'}" style="border:2px #000033; width:50px; height:45px;">

</div>
</td>


	
	<td>
	
	
<div class="dropdown">
  <a onclick="clikable_dropdown()" class="dropbtn">Set Style</a>
  <div  onmouseleave="mouse_out_function()"    id="myDropdown" class="dropdown-content">
    <table  >
	<tr>
	<td> 

		<input class="testClass" id="setStyle1" type="button" value="" onmouseover="chbg()" onclick="myFunctionChecker()" name="setStyle1" style="cursor: pointer; border: none; width:180px; height:65px; background-image: url('../images/img5000.jpg');">
		 
	</td>
		<td> 	
		 <input id="setStyle2" type="button" value="" onclick="setBackground()" name="setStyle2" style="cursor: pointer; border: none; width:180px; height:65px; background-image: url('../images/img5000.jpg');">
      
	</td>
	
		<td> 

        		<input id="setStyle3" type="button" value="" onclick="myFunctionSetStyle3()" name="setStyle3" style="cursor: pointer; border: none; width:180px; height:65px; background-image: url('../images/img5000.jpg');">
      				
	</td>
	
		<td> 

        		 <input id="setStyle4" type="button" value="" onclick="myFunctionSetStyle4()" name="setStyle4" style="cursor: pointer; border: none; width:180px; height:65px; background-image: url('../images/img5000.jpg');">
      				
	</td>
	
		<td> 

       			<input id="setStyle5" type="button" value="" onclick="myFunctionSetStyle5()" name="setStyle5" style="cursor: pointer; border: none; width:180px; height:65px; background-image: url('../images/img5000.jpg');">
      			 
	</td>
	
	
	
	
	</tr>
	
	<tr>
	
	<td> 

            		<input id="setStyle6" type="button" value="" onclick="myFunctionSetStyle6()" name="setStyle6" style="cursor: pointer; border: none; width:180px; height:65px; background-image: url('../images/img5000.jpg');">
       				 	
	</td>
	
		<td> 

        		<input id="setStyle7" type="button" value="" onclick="myFunctionSetStyle7()" name="setStyle7" style="cursor: pointer; border: none; width:180px; height:65px; background-image: url('../images/img5000.jpg');">
       		
	</td>
	
		<td> 

             		<input id="setStyle8" type="button" value="" onclick="myFunctionSetStyle8()" name="setStyle8" style="cursor: pointer; border: none; width:180px; height:65px; background-image: url('../images/img5000.jpg');">
   
	</td>
	
		<td> 

          		 <input id="setStyle9" type="button" value="" onclick="myFunctionSetStyle9()" name="setStyle9" style="cursor: pointer; border: none; width:180px; height:65px; background-image: url('../images/img5000.jpg');">
       			
	</td>
	
		<td> 

             		 <input id="setStyle10" type="button" value="" onclick="myFunctionSetStyle10()" name="setStyle10" style="cursor: pointer; border: none; width:180px; height:65px; background-image: url('../images/img5000.jpg');">
      		
	</td>
	
	
	

	</tr>
	
	</table>
	
	

  </div>
</div>

	</td>
	
	
	
	
	
	


<td> <div style="position:relative; z-index:10">


<ul id="drop-nav">
	<li><a href="#" id="setStyle"  style="text-align: left; vertical-align: middle; cursor: pointer; border: none; font-size: 12px; height:45px; text-decoration:none;" >SET STYLE</a>
	  <ul   >
       <li   id="dropDownSetStyle">
				 <table>
					 <tr>
					 <td>
				      <input class="testClass" id="setStyle1" type="button" value="" onmouseover="chbg()" onclick="myFunctionChecker()" name="setStyle1" style="cursor: pointer; border: none; width:180px; height:65px; background-image: url('../images/img5000.jpg');">
		 
						 </td>
						 <td>
				 <input id="setStyle2" type="button" value="" onclick="setBackground()" name="setStyle2" style="cursor: pointer; border: none; width:180px; height:65px; background-image: url('../images/img5000.jpg');">
      
						 </td>
						 
						 <td>
             		<input id="setStyle3" type="button" value="" onclick="myFunctionSetStyle3()" name="setStyle3" style="cursor: pointer; border: none; width:180px; height:65px; background-image: url('../images/img5000.jpg');">
      				 
						 </td>
						 
						 <td>
             		 <input id="setStyle4" type="button" value="" onclick="myFunctionSetStyle4()" name="setStyle4" style="cursor: pointer; border: none; width:180px; height:65px; background-image: url('../images/img5000.jpg');">
      				 
						 </td>
					   
						 <td>
             			<input id="setStyle5" type="button" value="" onclick="myFunctionSetStyle5()" name="setStyle5" style="cursor: pointer; border: none; width:180px; height:65px; background-image: url('../images/img5000.jpg');">
      			 
						 </td>
					 
					 
					 </tr>
					 <tr>
					 
						 <td>
             		<input id="setStyle6" type="button" value="" onclick="myFunctionSetStyle6()" name="setStyle6" style="cursor: pointer; border: none; width:180px; height:65px; background-image: url('../images/img5000.jpg');">
       				 
						 </td>
						 
						 <td>
             		<input id="setStyle7" type="button" value="" onclick="myFunctionSetStyle7()" name="setStyle7" style="cursor: pointer; border: none; width:180px; height:65px; background-image: url('../images/img5000.jpg');">
       				 
						 </td>
					   
						 <td>
             		<input id="setStyle8" type="button" value="" onclick="myFunctionSetStyle8()" name="setStyle8" style="cursor: pointer; border: none; width:180px; height:65px; background-image: url('../images/img5000.jpg');">
       				 
						 </td>
						 
						 <td>
             		 <input id="setStyle9" type="button" value="" onclick="myFunctionSetStyle9()" name="setStyle9" style="cursor: pointer; border: none; width:180px; height:65px; background-image: url('../images/img5000.jpg');">
       				 
						 </td>
					   
						 <td>
             		 <input id="setStyle10" type="button" value="" onclick="myFunctionSetStyle10()" name="setStyle10" style="cursor: pointer; border: none; width:180px; height:65px; background-image: url('../images/img5000.jpg');">
      				 
						 </td>
					 
					 
					 </tr>
				 </table>
			 
			</li>
          </ul>
  </li>
 
</ul>	

</div>
</td>
	
	
	
<td >
     <input id="" class="" onclick="myFunctionReset()" value="RESET" name="Reset" type="button" style="border: none; width:50px; height:45px;">
</td>
	
	
<td width=50% >
	<p id="status" class=""  name="status" style="text-align: center;  vertical-align: middle; color: grey"  ></p>
			 
	
</td>

</tr>

  
 </table> 



<table id="tableLandingPage">
    



<tr>
    


<td>
    
    
<div  >
<input style="text-align: center; color: #ccc; vertical-align: middle; font-family: ‘Arial Black’, Gadget, sans-serif;  font-size:75px; font-weight: 900;  display: block; padding:32px; padding-left:15px; border:1px solid #ccc; width:1400px; margin-right: auto; margin-left: auto; " id="LandPage" name="LandPage" placeholder="landing page URL here  for example http://domain-name.com/landing-page.htm" class="landing_page_url" type="textarea"> 




</div>

</td>


</tr>


 </table>




    







<table id="tableEmailHeader">
    


<tr>
    
<td >
   
   
    
<div >
<input  class="typeText" id="recurringScheduleName" name="recurringScheduleName" placeholder="Recurring Schedule Name"    type="text"> 
</div>



</td>


<td >
   
   
       
<div >
<input class="typeText" id="fromAddress1" name="fromAddress1" placeholder="From Address"    type="text"> 
</div>
 






</td>





<td>
    
  
  
 <div >
<input class="typeText" id="fromName" name="fromName" placeholder="From Name"    type="text"> 
</div> 
  
  
    

</td>


</tr>



<tr>
    
<td >
   
  
  
  
  
   
    
<div  >
<input class="typeText" id="subject" name="subject" placeholder="Subject"    type="text"> 
</div>




</td>







<td>
    
    
<div >
<input class="typeText" id="replyto" name="replyto" placeholder="Reply-to Address"    type="text">


</div>

</td>

	<td>
	
<table id="tableAction">
  <tr>
		
		<td >
    
    
<div>
    
<label class="fileUpload">
   
   Upload
<input type="file" name="file1" class = "upload" id="file1">

</label>


</div>

</td>

		
		
  <td >
       <div > 
        <input class ="typeButton" id="mybtn" type="submit" value="SEND"  name="send" >


     </div>
        </td>

		
		
    <th>
        
        <input type="submit" value="SAVE"  name="save">



        </th>
		
			
		<th>
        
        
        <input type="submit" value="CLEAR"  name="clear">
  



        </th> 
		
		
    <th>
        

 
<input type="submit" value="DELETE"  name="delete">




        
        
        
        </th>
    


		
		
  </tr>

</table>

		
	</td>
	</tr>

	 </table>






<table id="tableHiddenFields">
    





<tr>
    
<td >
<input  class="typeTextHidden" id="hiddenField" name="hiddenField" type="text">
</td>


<td>
<input  class="typeTextHidden" id="tableName" name="tableName" type="text">
</td> 

<td>
<input class="typeTextHidden"  id="colorPickerValue" name="colorPickerValue" type="text">
</td>

	<td>
<input class="typeTextHidden"  id="textColor" name="textColor" type="text">
</td> 
	
	
</tr>

	<tr>
		

		
	
<td>
<input class="typeTextHidden"  id="hiddenSetStyle" name="hiddenSetStyle" type="text">
</td> 

<td>
<input class="typeTextHidden"  id="userSession" name="userSession" type="text">
 </td> 


</tr>


 </table>







<script>

document.getElementById("userSession").value = document.getElementById("tableProfile").rows[0].cells[0].innerHTML;

</script>


</form>


</body>
</html>
