<?php
    // Send an email based on form submission
    
 $url = “http://www.yourdomain.com/index.php?msg=".urlencode($_POST["messsage"]);
    
 $to = $_POST[“theiremail”];
 
 $subject = $_POST[“yourname”].” has sent you an eCard!”;
 
 $body = “Please click on this link to view your card: “.$url;
 
 if (mail($to, $subject, $body)) {
    echo(“<p>Message successfully sent!</p>”);
 } else {
    echo(“<p>Message delivery failed...</p>”);
 }

?>
