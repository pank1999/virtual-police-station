<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>generatepdf</title>
  <!-- Additional CSS Files -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

<link rel="stylesheet" href="assets/css/templatemo-training-studio.css">
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<?php 

require('vendor/autoload.php');


$con= new mysqli("localhost:3308","root","","virtual_police_station") or die(mysqli_error($con));
 $id= $_GET['E_id'];
 $query1=" SELECT * FROM `complainat_details`JOIN event_details JOIN witness_details ON event_details.Event_id=complainat_details.comp_id AND event_details.Event_id=witness_details.Witness_id where Event_id='$id'";

   $query=mysqli_query($con,$query1);
 
   $row=mysqli_fetch_array($query);
 


   $html= '<center><h1 style="margin-left:150px;"><u>FIRST INFORMATION REPORT</u></h1><h4 style="margin-left:250px;">(Under section 154 Cr.pc)</h4></center><br> ';
   $html.='<style> .table,th,td{ cell-padding:10px;  width:80%;border:1px solid black; border-collapse:collapse; text-align:left;border-spacing:2px; }  h4{ font-size:20px;} </style>';

  $html.= ' <table> ';
  $html.= ' <tr> <th>FIR ID</th> <th>FIR TYPE</th> <th>Timestamp</th> </tr>';
  $html.='<tr> <td> '.  $row['Event_id']. ' </td> <td> '.  $row['FIR_TYPE']. ' </td> <td> '.  $row['E_time']. ' </td> </tr>';
  $html.= '</table>';
  $html.='<br><br>';

  $html.= ' <table> ';
  $html.= ' <tr> <th>Tahsil</th> <th>Area of occurence </th> <th>Police Station</th> </tr>';
  $html.='<tr> <td> '.  $row['Tahsil']. ' </td> <td> '.  $row['E_place']. ' </td> <td> '.  $row['Police_station']. ' </td> </tr>';
  $html.= '</table>';
  $html.='<br><br>';



  
  $html.='<center><h3>1.COMPLAINANTS DETAILS</h3><center>';
  $html.= ' <table class="table"> ';
  $html.= '<tr> <th>Name:</th> <td><h4>'. $row['C_name'] .'</h4></td> </tr>';
  $html.= '<tr> <th>Father Name:</th> <td><h4>'. $row['C_fathername'] .'</h4></td> </tr>';
  $html.= '<tr> <th>District:</th> <td><h4>'. $row['C_district'] .'</h4></td> </tr>';
  $html.= '<tr> <th>Address:</th> <td><h4>'. $row['C_address'] .'</h4></td> </tr>';
  $html.= '<tr> <th>Mobile no:</th> <td><h4>'. $row['C_mobileno'] .'</h4></td> </tr>';
   $html.='</table>';
  $html.='<br>';

  $html.='<center><h3>2. WITNESS DETAILS</h3><center>';
  $html.= ' <table class="table"> ';
  $html.= '<tr> <th>Name:</th> <td><h4>'. $row['W_name'] .'</h4></td> </tr>';
  $html.= '<tr> <th>Father Name:</th> <td><h4>'. $row['W_fathername'] .'</h4></td> </tr>';
  $html.= '<tr> <th>District:</th> <td><h4>'. $row['W_district'] .'</h4></td> </tr>';
  $html.= '<tr> <th>Address:</th> <td><h4>'. $row['W_address'] .'</h4></td> </tr>';
  $html.= '<tr> <th>Mobile no:</th> <td><h4>'. $row['W_mobileno'] .'</h4></td> </tr>';
  $html.='</table>';
  $html.='<br>';

  $html.='<center><h3>3.EVENT DETAILS<h3></center>';
  $html.= ' <table class="table"> ';
  $html.= '<tr> <th>Place of occurrence:</th> <td><h4>'. $row['E_place'] .'</h4></td> </tr>';
  $html.= '<tr> <th>Date  of occurrence:</th> <td><h4>'. $row['E_date'] .'</h4></td> </tr>';
  $html.= '<tr> <th>Time of occurrence:</th> <td><h4>'. $row['E_time'] .'</h4></td> </tr>';
  $html.='<tr> <th>Any suspect:</th> <td><h4>'. $row['E_suspect'] .'</h4></td> </tr>';
  $html.= '</table>';
  $imagename=$row['E_description'];
  $html.='<div> <h4> 4. EVENT DESCRIPTION </h4> <img src="E_description/'.$imagename.'" style="height:500px;width:700px;" ></div>';
  

  $mpdf=new \Mpdf\Mpdf();
  $mpdf->WriteHTML($html);
  $file=time().'.pdf';
  $mpdf->output($file,'D');

 
?>
</body>
</html>


