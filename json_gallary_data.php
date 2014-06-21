<?php
 header("Content-Type: application/json");//lets browser know this has official json data in it
 $folder = $_POST["folder"]; // getting the ajax request which will the gallery1 in our case
 //$folder = "gallery1";
 $jsonData = '{'; //setting upt to render as json
 $dir = $folder."/"; //specify where the folder is located
 // open specified directory using opendir() the function
$dirHandle = opendir($dir); 


// Create incremental counter variable if needed
$i = 0;
while ($file = readdir($dirHandle)) { 
      // if file is not a folder and if file name contains the string .gif  
      if(!is_dir($file) && strpos($file, '.JPG')){
         $i++; // increment $i by one each pass in the loop
         $src = "$dir$file"; //says gallery1/somefile.gif
         $jsonData .= '"img'.$i.'":{ "num":"'.$i.'","src:"'.$src.'", "name":"'.$file.'" },';  //we pack in all of the deeply nested objects
      } // close the if statement
} // End while loop
closedir($dirHandle); // close the open directory
$jsonData = chop($jsonData, ",");

$jsonData .= "}";
echo $jsonData; 
?>