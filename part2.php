<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">   
<head>   
    <title>Checker Board</title>  
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
</head>  
<body>   
  <h2>Checker Board</h2>  
  <table width="300px" cellspacing="1px" cellpadding="1px" border="1px">  
   <?php  
       for($row=1;$row<=8;$row++)  
	    {  
         echo "<tr>";  
         for($col=1;$col<=8;$col++)  
            {  
             $total=$row+$col;  
             if($total%2==0)  
              {  
               echo "<td height=35px width=35px bgcolor=red></td>";  
              }  
             else  
              {  
               echo "<td height=35px width=35px bgcolor=black></td>";  
              }  
            }  
         echo "</tr>";  
        }  
   ?>  
  </table>  
</body>  
</html>  



  

