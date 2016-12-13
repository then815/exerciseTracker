<?php
$sqt1 = $_POST['sqtWt1'];
$sqt2 = $_POST['sqtWt2'];
$sqt3 = $_POST['sqtWt3'];
$sqt4 = $_POST['sqtRep1'];
$sqt5 = $_POST['sqtRep2'];
$sqt6 = $_POST['sqtRep3'];
$lng1 = $_POST['lngWt1'];
$lng2 = $_POST['lngWt2'];
$lng3 = $_POST['lngRep1'];
$lng4 = $_POST['lngRep2'];
$bnch1 = $_POST['bnchWt1'];
$bnch2 = $_POST['bnchWt2'];
$bnch3 = $_POST['bnchRep1'];
$bnch4 = $_POST['bnchRep2'];
$row1 = $_POST['rowWt1'];
$row2 = $_POST['rowWt2'];
$row3 = $_POST['rowRep1'];
$row4 = $_POST['rowRep2'];
$shld1 = $_POST['shldWt1'];
$shld2 = $_POST['shldWt2'];
$shld3 = $_POST['shldRep1'];
$shld4 = $_POST['shldRep2'];
$curl1 = $_POST['curlWt1'];
$curl2 = $_POST['curlWt2'];
$curl3 = $_POST['curlRep1'];
$curl4 = $_POST['curlRep2'];
$tri1 = $_POST['triWt1'];
$tri2 = $_POST['triWt2'];
$tri3 = $_POST['triRep1'];
$tri4 = $_POST['triRep2'];
$fly1 = $_POST['flyWt1'];
$fly2 = $_POST['flyWt2'];
$fly3 = $_POST['flyRep1'];
$fly4 = $_POST['flyRep2'];
$lat1 = $_POST['latWt1'];
$lat2 = $_POST['latWt2'];
$lat3 = $_POST['latRep1'];
$lat4 = $_POST['latRep2'];
$crunch = $_POST['crunchRep1'];
$rev = $_POST['revRep1'];


$insert = "INSERT INTO tracking (sqtWt1,sqtWt2,sqtWt3,sqtRep1,sqtRep2,sqtRep3,lngWt1,lngWt2,lngRep1,lngRep2,bnchWt1,bnchWt2,bnchRep1,bnchRep2,rowWt1,rowWt2,rowRep1,rowRep2,shldWt1,shldWt2,shldRep1,shldRep2,curlWt1,curlWt2,curlRep1,curlRep2,triWt1,triWt2,triRep1,triRep2,flyWt1,flyWt2,flyRep1,flyRep2,latWt1,latWt2,latRep1,latRep2,crunchRep1,revRep1) VALUES('$sqt1','$sqt2','$sqt3','$sqt4','$sqt5','$sqt6','$lng1','$lng2','$lng3','$lng4','$bnch1','$bnch2','$bnch3','$bnch4','$row1','$row2','$row3','$row4','$shld1','$shld2','$shld3','$shld4','$curl1','$curl2','$curl3','$curl4','$tri1','$tri2','$tri3','$tri4','$fly1','$fly2','$fly3','$fly4','$lat1','$lat2','$lat3','$lat4','$crunch','$rev')";
if(mysqli_query($db,$insert)){
echo "<p class='record'>New record created</p>";
}else{echo "Error. " . $insert. "<br>" . $db->error;} 

?>