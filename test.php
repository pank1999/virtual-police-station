<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

 $con= new mysqli("localhost:3308","root","","virtual_police_station") or die(mysqli_error($con));  
  
 $query1="SELECT * FROM event_details";
 $query=mysqli_query($con,$query1);
 
 while($row=mysqli_fetch_array($query)){

 
 ?>
 <form action="" method="post" enctype="multipart/form-data">
 <table >
     <tr>
         <td>  <img src="E_description/<?php echo $row['E_description'] ; ?>" > </td>
     </tr>
     <tr>
     <td>
       <?php echo $row['E_place'];  ?>
     </td></tr>
      <?php } ?>
 
 </table> 
 </form>

 
</body>
</html>