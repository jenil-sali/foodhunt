<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $fname=$_POST['fname'];
    $email=$_POST['email'];
    $mnumber=$_POST['mobile'];
    $date=$_POST['date'];
    $nop=$_POST['nop'];
    $spec=$_POST['spec'];
    

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "food hunt";

    $conn = mysqli_connect($servername,$username,$password,$database);
    if(!$conn){
        die("Failed to Connect: ".mysqli_connect_error());
    }
    else{
        

        $sql = "INSERT INTO `reserve`(`name`, `email`, `mobile`, `date`, `persons`, `spec`) VALUES ('$fname','$email','$mnumber','$date','$nop','$spec')";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo '<div class="alert alert-success" role="alert">
                Wohh... Table has been Booked !!
            </div>';
            $mail = new PHPMailer(true);
            try {
                // SMTP configuration
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'gaming09jenil@gmail.com';
                $mail->Password = 'neumgjxactekyelk';
                $mail->SMTPSecure = 'ssl';
                $mail->Port = 465;

                // Sender and recipient
                $mail->setFrom('gaming09jenil@gmail.com', 'Food Hunt');
                $mail->addAddress($email, $fname);

                // Email content
                $mail->isHTML(false);
                $mail->Subject = 'Booking Confirmation';
                $mail->Body = "Dear $fname,\n\nThank you for your booking. We have received the following information:\n\nName: $fname\nEmail: $email\nDate: $date\n\nWe will contact you shortly with further details.\n\nRegards,\nFood Hunt";

                $mail->send();
                echo "Booking information sent successfully!";
            } catch (Exception $e) {
                echo "Failed to send booking information. Error: " . $mail->ErrorInfo;
            }
        }
        else{
            echo'<div class="alert alert-danger" role="alert">
            Oops!! Something Went Wrong. Please try again.
          </div>'.mysqli_error($conn);
        }
    }
    
}
    

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="5; URL=index.php">
    <title>Book your Enjoyment</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    
    
    <div class="container">
        <div class="box">
            <h3>Book your table hassle-free and enjoy culinary delights.</h3><br>
            <form method="post" name="reserve" action="/foodhunt/reserve.php" autocomplete="on">
                <label for="fname"><b>Name: </b></label>
                <input type="text" id="fname" name="fname" placeholder="Enter your Full Name." size="50" required>
                <br><br>
                <label for="email"><b>Email id: </b></label>
                <input type="email" id="email" name="email" placeholder="Enter your Email ID." size="50" required>
                <br><br>
                <label for="mobile"><b>Mobile No: </b></label><br>
                <input type="tel" id="mobile" name="mobile" placeholder="+91 " pattern="[6-9]{1}[0-9]{9}" size="25" required>
                <br><br>
                <label for="date"><b>Date of Visit: </b></label>&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="date" id="date" name="date" required>
                <br><br>
                <label for="nop"><b>Person: </b></label>&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="number" id="nop" size ="25" name="nop" min="1" max="15" required>
                <br><br>
                <label for="spec"><b>Specification:  </b></label>
                <input type="text" id="spec" name="spec" placeholder="Enter any Specification." size="50">
                <br><br><br>
                <center>
                    <input class="btn btn-primary" type="submit" value="Submit" name="submit">
                </center>
            </form>
        </div>
    </div>

</body>
</html>