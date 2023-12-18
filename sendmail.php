<script>
    alert('Form Submited!');

    
function myFunction() {
  location.replace("homepage.php")
}
    </script>

 <?php
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\SMTP;
 use PHPMailer\PHPMailer\Exception;
 
// use PHPMailer\PHPMailer\PHPMailer;
// require_once './vendor/autoload.php';

// $fname = $_POST['fname'];
// $lname = $_POST['lname'];
// $email = $_POST['email'];
// $ctarget = $_POST['cus_target'];
// $cate = $_POST['cus_cater'];
// $quantity = $_POST['quantitys'];
// $cust_msg = $_POST['cust_msg'];
// $cust_file = $_POST['document-images'];
// // $message = $_POST['message'];

// $to = "zengangtacc@gmail.com";
// $subject = "New Email Received from " . $fname . " " . $lname;

// $message = "
// First Name: " . $fname . "
// Last Name: ". $lname . "
// Email: " . $email . "
// Subject: " . $subject . "
// ";

// $headers = "From: " . $email . "\r\n";
// $headers .= "Reply-To: " . $email . "\r\n";

// if (mail($to, $subject, $message, $headers)) {
//     echo "Your email has been sent successfully!";
// } else {
//     echo "There was a problem sending your email. Please try again.";
// }

?>

<?php
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


// for ($i = 0; $i < count($_FILES['files']['name']); $i++) {
//     $filetype[]       = $_FILES['files']['type'][$i];
//     $filename[]       = $_FILES['files']['name'][$i];
// }
if(isset($_FILES['image'])){
    $errors= array();
    $target_dir = 'uploads/';
    $file_name = $_FILES['files']['name'];
    $file_size = $_FILES['files']['size'];
    $file_tmp = $_FILES['files']['tmp_name'];
    $file_type = $_FILES['files']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['files']['name'])));

    $target_file = $target_dir . basename($_FILES["files"]["name"]);
}

// $files = $filename;

$mail = new PHPMailer(true);

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$ctarget = $_POST['cus_target'];
$cate = $_POST['cus_cater'];
$quantity = $_POST['quantitys'];
$cust_msg = $_POST['cust_msg'];

$to = "cherich2023@gmail.com";
$subject = "New Email Received from " . $fname . $lname;

$message = "
Name: " . $fname . $lname . "
Email: " . $email . "
Customer Target Market: ". $ctarget ."
Category to receive a quote: ". $cate ."
Order Quantity: ". $quantity . "
Message: " . $cust_msg ."
Files: " ."
";

// for ($x = 0; $x < count($files); $x++) {
//     $file = fopen($_FILES[$x],"rb");
//     $data = fread($file, filesize($files[$x]));
//     fclose($file);
//     $message = $files[$x].$data;
// }
$headers = "From: " . $email . "\r\n";
$headers .= "Reply-To: " . $email . "\r\n";

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp-relay.brevo.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'teekh-wm22@student.tarc.edu.my';                     //SMTP username
    $mail->Password   = 'ypjhk9CMAdD7H8fV';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->setFrom( $email, $fname.$lname);
    $mail->addAddress('cherich2023@gmail.com', 'Nguyens Factory'); 
    $mail->addAttachment("Kid.jpg");     
    
    $mail->Subject = $subject;
    $mail->Body = $message;

    $mail->send();
    

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
echo "<script>alert('Message has been sent')</script>";
echo "<script>window.location.replace('Home.php')</script>"
?>