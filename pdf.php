<?php

 
if (!empty($_POST['register'])) {
    $fname       = $_POST['fname'];
    $lname       = $_POST['lname'];
    $password    = $_POST['password'];
    $conpassword = $_POST['conpassword'];
    $gender      = $_POST['gender'];
    $email       = $_POST['email'];
    $phone       = $_POST['phone'];
    $address     = $_POST['address'];

    require("fpdf/fpdf.php");

    $pdf = new FPDF();
    $pdf->AddPage();


    $pdf->SetFont("Arial", "B", 17);
   
    $pdf->Cell(0, 10, "Registration Details", 1, 1, 'C');

   
    $pdf->SetFont("Arial", "", 13);
    $pdf->Cell(0, 10, "First Name  :   $fname", 1, 1);
    $pdf->Cell(0, 10, "Last Name   :   $lname", 1, 1);
    $pdf->Cell(0, 10, "Gender      :   $gender", 1, 1);
    $pdf->Cell(0, 10, "Email       :   $email", 1, 1);
    $pdf->Cell(0, 10, "Phone       :   $phone", 1, 1);
    $pdf->Cell(0, 20, "Address     :   $address", 1, 1);



   
  

     $pdf->Cell(0, 50,"Thanks", 1, 1, 'C');
  
    $pdf->Output();
}



?>