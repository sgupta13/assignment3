<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>   
    <title>Part 3</title>  
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
</head>
<body>
<?php
echo"<h2>Printed using standard For Loop</h2>";

 $month = array('January', 'February', 'March', 'April',
 'May', 'June', 'July', 'August',
 'September', 'October', 'November', 'December'); 
 $month_count=count($month);
 for($i=0;$i<$month_count;$i++)
 {
 	echo $month[$i];
 	echo "<br>";
 }
 echo"<br>";
 echo"<h2>Sorting and Priniting the months in alphabetical order</h2>";
 function sortMonth()
 {
 global $month;
 sort($month);
 $months_count=count($month);
 for($x=0;$x<$months_count;$x++)
 {
 	echo $month[$x];
 	echo "<br>";
 }
 }
sortMonth();
 ?>