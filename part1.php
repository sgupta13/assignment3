<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>   
    <title>Part 1</title>  
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
</head>
<body>
 <?php
  function IsBitten() 
   {
     if ( 50 > rand(1,100)) 
	  {
        echo "Charlie ate my lunch! <br>";
      }
     else
      {
        echo "Charlie did not eat my lunch! <br>";
      }
   }
  IsBitten();
 ?>
</body>
</html>