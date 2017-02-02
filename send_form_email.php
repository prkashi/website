<?php
$to      = 'punithrkashi@gmail.com';
$subject = $_POST['subject']; 
$message = $_POST['message'];
$firstname = $_POST['first_name'];
$lastname  = $_POST['last_name'];
$emails = $_POST['email'];
$telephone = $_POST['telephone'];

$total = "Name : ".$firstname." ".$lastname."\n"."Email : ".$emails."\n"."Telephone : ".$telephone."\n"."Message : ".$message;
mail($to, $subject, $total);
echo "<script type='text/javascript'>alert('Submitted successfully!');
window.location.href='index.html';</script>";
?>
