<?php //sending message via php mail function
$errorMSG = "";
//Check if the fields are empty before assigning them to variables
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_POST["message"];
}
//gather data returned by the post function
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
 
$EmailTo = "cmagapu@gmail.com" //message will come to this email id as an email
$Subject = "Arcadia - Feedback";
 
// prepare email body text
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
 
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
 
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";
 
// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
 
// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
	if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}
//result is returned to AJAX object, handled on client side.
//Why AJAX? All of this stuff is done asynchronusly, i.e. user can continue using the site while the email is being sent.
 
?>