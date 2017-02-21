<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">   
<head>   
    <title>Part 3 foreach loop</title>  
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
</head>
<body>
<?php
echo"<h2>Printing using Foreach Loop</h2>";

 $month = array('January', 'February', 'March', 'April',
 'May', 'June', 'July', 'August',
 'September', 'October', 'November', 'December'); 
 foreach($month as $i)
 {
 echo"$i <br>";
 }
 echo"<br>";
 echo"<h2>Sorting and printing months in alphabetical Order</h2>";
 function sorting_months()
 {
 global $month;
 sort($month);
 foreach($month as $i)
 {
 echo"$i <br>";
 }
 }
 sorting_months();
 ?>
 </body>
 </html>