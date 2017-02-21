<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">   
<head>   
    <title>Part 4</title>  
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
</head>
<body>
<h3>Table of the Restaurants Name and Restaurants Average Cost</h3>
<table cellspacing="1px" cellpadding="1px" border="1px">
<thead>
<tr>
<th>Restaurants Name</th>
<th>Restaurants Average Cost</th>
</tr>
</thead>
<?php
$bestrstrnt=array("Chama Gaucha"=>"40.50","Aviva by Kameel"=>"15.00","Bone's Restaurant"=>"65.00","Umi Sushi Buckhead"=>"40.50","Fandangles"=>"30.00","Capital Grille"=>"60.50","Canoe"=>"35.50","One Flew South"=>"21.00","Fox Bros.BBQ"=>"15.00","South City Kitchen Midtown"=>"29.00");
foreach($bestrstrnt as $rst=>$price)
{
echo'<tbody>';
echo'<tr>';
echo'<td>'.$rst.'</td>';
echo'<td>'.$price.'</td>';
echo'</tr>';
echo'</tbody>'; 
}
echo "<br>";
?>
</table>
</body>
</html>