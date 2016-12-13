<?php
include 'inc/connect.php';
if (isset($_POST['submit'])){
include 'inc/insert.php';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="work.css" />
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<title>Workout Tracker</title>
</head>
<body>
<form action="track.php" method="post">
<table>
	<tr>
        <th>
        Exercise
        </th>
        <th class="set">
        Set
        </th>
        <th class="wtHd">
        Weight
        </th>
        <th class="previous">
        Prev
        </th>
        <th class="reps">
        Reps
        </th>
        <th class="previous">
        Prev
        </th>
    </tr>
   
    <tr>
    	<td>
        <h3>Squat</h3>
        </td>
        <td>&nbsp;
        
        </td>
        <td>&nbsp;
        
        </td>
        <td>&nbsp;
        
        </td>
        <td>&nbsp;
        
        </td>
        <td>&nbsp;
        
        </td>
    </tr>
    <tr>
    	<td>&nbsp;
        
        </td>
        <td>
        1
        </td>
        <td>
        <input type="number" name="sqtWt1" class="weight" />
        </td>
        <td class="previous">
        <?php echo $prev['sqtWt1']; ?>
        </td>
        <td>
        <select name="sqtRep1">
        	<option value="6">6</option>
            <option value="8">8</option>
            <option value="10">10</option>
            <option value="12">12</option>
            <option value="14">14</option>
        </select>
        </td>
        <td class="previous">
        <?php echo $prev['sqtRep1'];?>
        </td>
    </tr>
    <tr>
    	<td>&nbsp;
        
        </td>
        <td>
        2
        </td>
        <td>
        <input type="number" name="sqtWt2" class="weight"/>
        </td>
        <td class="previous">
        <?php echo $prev['sqtWt2'];?>
        </td>
        <td>
        <select name="sqtRep2">
        	<option value="6">6</option>
            <option value="8">8</option>
            <option value="10">10</option>
            <option value="12">12</option>
            <option value="14">14</option>
        </select>
        </td>
        <td class="previous">
        <?php echo $prev['sqtRep2'];?>
        </td>
    </tr>
    <tr>
    	<td>&nbsp;
        
        </td>
        <td>
        3
        </td>
        <td>
        <input type="number" name="sqtWt3" class="weight"/>
        </td>
        <td class="previous">
        <?php echo $prev['sqtWt3'];?>
        </td>
        <td>
        <select name="sqtRep3">
        	<option value="6">6</option>
            <option value="8">8</option>
            <option value="10">10</option>
            <option value="12">12</option>
            <option value="14">14</option>
        </select>
        </td>
        <td class="previous">
        <?php echo $prev['sqtRep2'];?>
        </td>
    </tr>
    <tr>
    	<td>
        <h3>Lunge</h3>
        </td>
        <td>&nbsp;
        
        </td>
        <td>&nbsp;
        
        </td>
        <td>&nbsp;
        
        </td>
        <td>&nbsp;
        
        </td>
        <td>&nbsp;
        
        </td>
    </tr>
    <tr>
    	<td>&nbsp;
        
        </td>
        <td>
        1
        </td>
        <td>
        <input type="number" name="lngWt1" class="weight" />
        </td>
        <td class="previous">
        <?php echo $prev['lngWt1'];?>
        </td>
        <td>
        <select name="lngRep1">
        	<option value="6">6</option>
            <option value="8">8</option>
            <option value="10">10</option>
            <option value="12">12</option>
            <option value="14">14</option>
        </select>
        </td>
        <td class="previous">
        <?php echo $prev['lngRep1'];?>
        </td>
    </tr>
    <tr>
    	<td>&nbsp;
        
        </td>
        <td>
        2
        </td>
        <td>
        <input type="number" name="lngWt2" class="weight" />
        </td>
        <td class="previous">
        <?php echo $prev['lngWt2'];?>
        </td>
        <td>
        <select name="lngRep2">
        	<option value="6">6</option>
            <option value="8">8</option>
            <option value="10">10</option>
            <option value="12">12</option>
            <option value="14">14</option>
        </select>
        </td>
        <td class="previous">
        <?php echo $prev['lngRep2'];?>
        </td>
    </tr>
    <tr>
    	<td>
        <h3>Bench</h3>
        </td>
        <td>&nbsp;
        
        </td>
        <td>&nbsp;
        
        </td>
        <td>&nbsp;
        
        </td>
        <td>&nbsp;
        
        </td>
        <td>&nbsp;
        
        </td>
    </tr>
    <tr>
    	<td>&nbsp;
        
        </td>
        <td>
        1
        </td>
        <td>
        <input type="number" name="bnchWt1" class="weight"/>
        </td>
        <td class="previous">
        <?php echo $prev['bnchWt1'];?>
        </td>
        <td>
        <select name="bnchRep1">
        	<option value="6">6</option>
            <option value="8">8</option>
            <option value="10">10</option>
            <option value="12">12</option>
            <option value="14">14</option>
        </select>
        </td>
        <td class="previous">
        <?php echo $prev['bnchRep1'];?>
        </td>
    </tr>
    <tr>
    	<td>&nbsp;
        
        </td>
        <td>
        2
        </td>
        <td>
        <input type="number" name="bnchWt2" class="weight"/>
        </td>
        <td class="previous">
        <?php echo $prev['bnchWt2'];?>
        </td>
        <td>
        <select name="bnchRep2">
        	<option value="6">6</option>
            <option value="8">8</option>
            <option value="10">10</option>
            <option value="12">12</option>
            <option value="14">14</option>
        </select>
        </td>
        <td class="previous">
        <?php echo $prev['bnchRep2'];?>
        </td>
    </tr>
    <tr>
    	<td>
        <h3>Bent-Over Row</h3>
        </td>
        <td>&nbsp;
        
        </td>
        <td>&nbsp;
        
        </td>
        <td>&nbsp;
        
        </td>
        <td>&nbsp;
        
        </td>
        <td>&nbsp;
        
        </td>
    </tr>
    <tr>
    	<td>&nbsp;
        
        </td>
        <td>
        1
        </td>
        <td>
        <input type="number" name="rowWt1" class="weight"/>
        </td>
        <td class="previous">
        <?php echo $prev['rowWt1'];?>
        </td>
        <td>
        <select name="rowRep1">
        	<option value="6">6</option>
            <option value="8">8</option>
            <option value="10">10</option>
            <option value="12">12</option>
            <option value="14">14</option>
        </select>
        </td>
        <td class="previous">
        <?php echo $prev['rowRep1'];?>
        </td>
    </tr>
    <tr>
    	<td>&nbsp;
        
        </td>
        <td>
        2
        </td>
        <td>
        <input type="number" name="rowWt2" class="weight"/>
        </td>
        <td class="previous">
        <?php echo $prev['rowWt2'];?>
        </td>
        <td>
        <select name="rowRep2">
        	<option value="6">6</option>
            <option value="8">8</option>
            <option value="10">10</option>
            <option value="12">12</option>
            <option value="14">14</option>
        </select>
        </td>
        <td class="previous">
        <?php echo $prev['rowRep2'];?>
        </td>
    </tr>
    <tr>
    	<td>
        <h3>Shoulder Press</h3>
        </td>
        <td>&nbsp;
        
        </td>
        <td>&nbsp;
        
        </td>
        <td>&nbsp;
        
        </td>
        <td>&nbsp;
        
        </td>
        <td>&nbsp;
        
        </td>
    </tr>
    <tr>
    	<td>&nbsp;
        
        </td>
        <td>
        1
        </td>
        <td>
        <input type="number" name="shldWt1" class="weight"/>
        </td>
        <td class="previous">
        <?php echo $prev['shldWt1'];?>
        </td>
        <td>
        <select name="shldRep1">
        	<option value="6">6</option>
            <option value="8">8</option>
            <option value="10">10</option>
            <option value="12">12</option>
            <option value="14">14</option>
        </select>
        </td>
        <td class="previous">
        <?php echo $prev['shldRep1'];?>
        </td>
    </tr>
    <tr>
    	<td>&nbsp;
        
        </td>
        <td>
        2
        </td>
        <td>
        <input type="number" name="shldWt2" class="weight"/>
        </td>
        <td class="previous">
        <?php echo $prev['shldWt2'];?>
        </td>
        <td>
        <select name="shldRep2">
        	<option value="6">6</option>
            <option value="8">8</option>
            <option value="10">10</option>
            <option value="12">12</option>
            <option value="14">14</option>
        </select>
        </td>
        <td class="previous">
        <?php echo $prev['shldRep2'];?>
        </td>
    </tr>
    <tr>
    	<td>
        <h3>Curl</h3>
        </td>
        <td>&nbsp;
        
        </td>
        <td>&nbsp;
        
        </td>
        <td>&nbsp;
        
        </td>
        <td>&nbsp;
        
        </td>
        <td>&nbsp;
        
        </td>
    </tr>
    <tr>
    	<td>&nbsp;
        
        </td>
        <td>
        1
        </td>
        <td>
        <input type="number" name="curlWt1" class="weight"/>
        </td>
        <td class="previous">
        <?php echo $prev['curlWt1'];?>
        </td>
        <td>
        <select name="curlRep1">
        	<option value="6">6</option>
            <option value="8">8</option>
            <option value="10">10</option>
            <option value="12">12</option>
            <option value="14">14</option>
        </select>
        </td>
        <td class="previous">
        <?php echo $prev['curlRep1'];?>
        </td>
    </tr>
    <tr>
    	<td>&nbsp;
        
        </td>
        <td>
        2
        </td>
        <td>
        <input type="number" name="curlWt2" class="weight"/>
        </td>
        <td class="previous">
        <?php echo $prev['curlWt2'];?>
        </td>
        <td>
        <select name="curlRep2">
        	<option value="6">6</option>
            <option value="8">8</option>
            <option value="10">10</option>
            <option value="12">12</option>
            <option value="14">14</option>
        </select>
        </td>
        <td class="previous">
        <?php echo $prev['curlRep2'];?>
        </td>
    </tr>
    <tr>
    	<td>
        <h3>Tricep Ext</h3>
        </td>
        <td>&nbsp;
        
        </td>
        <td>&nbsp;
        
        </td>
        <td>&nbsp;
        
        </td>
        <td>&nbsp;
        
        </td>
        <td>&nbsp;
        
        </td>
    </tr>
    <tr>
    	<td>&nbsp;
        
        </td>
        <td>
        1
        </td>
        <td>
        <input type="number" name="triWt1" class="weight"/>
        </td>
        <td class="previous">
        <?php echo $prev['triWt1'];?>
        </td>
        <td>
        <select name="triRep1">
        	<option value="6">6</option>
            <option value="8">8</option>
            <option value="10">10</option>
            <option value="12">12</option>
            <option value="14">14</option>
        </select>
        </td>
        <td class="previous">
        <?php echo $prev['triRep1'];?>
        </td>
    </tr>
    <tr>
    	<td>&nbsp;
        
        </td>
        <td>
        2
        </td>
        <td>
        <input type="number" name="triWt2" class="weight"/>
        </td>
        <td class="previous">
        <?php echo $prev['triWt2'];?>
        </td>
        <td>
        <select name="triRep2">
        	<option value="6">6</option>
            <option value="8">8</option>
            <option value="10">10</option>
            <option value="12">12</option>
            <option value="14">14</option>
        </select>
        </td>
        <td class="previous">
        <?php echo $prev['triRep2'];?>
        </td>
    </tr>
        <tr>
    	<td>
        <h3>Chest Fly</h3>
        </td>
        <td>&nbsp;
        
        </td>
        <td>&nbsp;
        
        </td>
        <td>&nbsp;
        
        </td>
        <td>&nbsp;
        
        </td>
        <td>&nbsp;
        
        </td>
    </tr>
    <tr>
    	<td>&nbsp;
        
        </td>
        <td>
        1
        </td>
        <td>
        <input type="number" name="flyWt1" class="weight"/>
        </td>
        <td class="previous">
        <?php echo $prev['flyWt1'];?>
        </td>
        <td>
        <select name="flyRep1">
        	<option value="6">6</option>
            <option value="8">8</option>
            <option value="10">10</option>
            <option value="12">12</option>
            <option value="14">14</option>
        </select>
        </td>
        <td class="previous">
        <?php echo $prev['flyRep1'];?>
        </td>
    </tr>
    <tr>
    	<td>&nbsp;
        
        </td>
        <td>
        2
        </td>
        <td>
        <input type="number" name="flyWt2" class="weight"/>
        </td>
        <td class="previous">
        <?php echo $prev['flyWt2'];?>
        </td>
        <td>
        <select name="flyRep2">
        	<option value="6">6</option>
            <option value="8">8</option>
            <option value="10">10</option>
            <option value="12">12</option>
            <option value="14">14</option>
        </select>
        </td>
        <td class="previous">
        <?php echo $prev['flyRep2'];?>
        </td>
    </tr>
        <tr>
    	<td>
        <h3>Lat Pulldowns</h3>
        </td>
        <td>&nbsp;
        
        </td>
        <td>&nbsp;
        
        </td>
        <td>&nbsp;
        
        </td>
        <td>&nbsp;
        
        </td>
        <td>&nbsp;
        
        </td>
    </tr>
    <tr>
    	<td>&nbsp;
        
        </td>
        <td>
        1
        </td>
        <td>
        <input type="number" name="latWt1" class="weight"/>
        </td>
        <td class="previous">
        <?php echo $prev['latWt1'];?>
        </td>
        <td>
        <select name="latRep1">
        	<option value="6">6</option>
            <option value="8">8</option>
            <option value="10">10</option>
            <option value="12">12</option>
            <option value="14">14</option>
        </select>
        </td>
        <td class="previous">
        <?php echo $prev['latRep1'];?>
        </td>
    </tr>
    <tr>
    	<td>&nbsp;
        
        </td>
        <td>
        2
        </td>
        <td>
        <input type="number" name="latWt2" class="weight"/>
        </td>
        <td class="previous">
        <?php echo $prev['latWt2'];?>
        </td>
        <td>
        <select name="latRep2">
        	<option value="6">6</option>
            <option value="8">8</option>
            <option value="10">10</option>
            <option value="12">12</option>
            <option value="14">14</option>
        </select>
        </td>
        <td class="previous">
        <?php echo $prev['latRep2'];?>
        </td>
    </tr>
    <tr>
    	<td>
        <h3>Crunch</h3>
        </td>
        <td>&nbsp;
        
        </td>
        <td>&nbsp;
        
        </td>
        <td>&nbsp;
        
        </td>
        <td>&nbsp;
        
        </td>
        <td>&nbsp;
        
        </td>
    </tr>
    <tr>
    	<td>&nbsp;
        
        </td>
        <td>
        1
        </td>
        <td>
        None
        </td>
        <td>
        (*)
        </td>
        <td>
        <select name="crunchRep1">
            <option value="15">15</option>
            <option value="20">20</option>
            <option value="25">25</option>
            <option value="30">30</option>
            <option value="35">35</option>        
        </select>
        </td>
        <td class="previous">
        <?php echo $prev['crunchRep1'];?>
        </td>
    </tr>
        <tr>
    	<td>
        <h3>Reverse Crunch</h3>
        </td>
        <td>&nbsp;
        
        </td>
        <td>&nbsp;
        
        </td>
        <td>&nbsp;
        
        </td>
        <td>&nbsp;
        
        </td>
        <td>&nbsp;
        
        </td>
    </tr>
    <tr>
    	<td>&nbsp;
        
        </td>
        <td>
        1
        </td>
        <td>
        None
        </td>
        <td>
        (*)
        </td>
        <td>
        <select name="revRep1">
            <option value="15">15</option>
            <option value="20">20</option>
            <option value="25">25</option>
            <option value="30">30</option>
            <option value="35">35</option>
        </select>
        </td>
        <td class="previous">
        <?php echo $prev['revRep1'];?>
        </td>
    </tr>
</table>
	<input type="submit" value="Submit" name="submit" class="button" />
 </form> 
 <?php
 mysqli_close($db);
 ?>    
</body>
</html>