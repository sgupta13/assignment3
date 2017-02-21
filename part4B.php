<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">   
<head>   
    <title>Part 4B</title>  
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
</head>  
<body>   
<?php
$bestRstrnt =array(
array("Restaurant" => "Chama Gaucha","AvgCosts" => "$40.50"),
array("Restaurant" => "Aviva by Kameel","AvgCosts" => "$15.00"),
array("Restaurant" => "Bones Restaurantt","AvgCosts" => "$65.00"),
array("Restaurant" => "Umi Sushi Buckhead","AvgCosts" => "$40.50"),
array("Restaurant" => "Fandangles","AvgCosts" => "$30.00"),
array("Restaurant" => "Capital Grille","AvgCosts" => "$60.50"),
array("Restaurant" => "Canoe","AvgCosts" => "$35.50"),
array("Restaurant" => "One Flew South","AvgCosts" => "$21.00"),
array("Restaurant" => "Fox Bros BBQ","AvgCosts" => "$15.00"),
array("Restaurant" => "South City Midtown","AvgCosts" => "$29.00"),
);
?>

<?php   
    foreach($bestRstrnt as $c=>$key) {
        $sort_num[] = $key['AvgCosts'];
        $sort_ref[] = $key['Restaurant'];
   
    }

    array_multisort($sort_num, SORT_ASC,$sort_ref, SORT_STRING, $bestRstrnt);
  
?>    
<h2>Printing Table ordered by Average Cost</h2>
<table border=3>
  <thead align="left" style="display: table-header-group">
  <tr>
     <th>Restaurants Name</th>
     <th>Restaurants Average Cost</th>
    
  </tr>
  </thead>

<tbody>
<?php 
$total = 0;
foreach ($bestRstrnt as $rows) :?>

  <tr>
       
        <td> <?php echo $rows['Restaurant']; ?></td>
        <td> <?php echo $rows['AvgCosts']; ?></td>
     
  </tr>

<?php endforeach;?>
</tbody>
</table>
</body>
</html>
