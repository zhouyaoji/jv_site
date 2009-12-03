<?php
 include("db.inc");
 function send_email($from,$body){
  $to = "zhouyaoji@yahoo.com";
  $subject="Automated Message from julesvano.com Re Message sent from $from.";
  $header="From: $from\n\r";
  $body=wordwrap($body,70);
  if(!mail($to,$subject,$body,$header)){
    print("<ol><li>Sorry, your message could not be sent. Please send a message to jv@julesvano.com.</li></ol>");
  }
}
  
 if(isset($_POST)){
  if(isset($_POST['name']) && !empty($_POST['name'])){
    $name = $_POST['name'];
  }else{
    $error .= "<li>The user name could not be saved.</li>"; 
  }
  if(isset($_POST['email']) && !empty($_POST['email'])){
    $email = $_POST['email'];
  }else{
    $error .= "<li>The email could not be saved.</li>";
  }
  if(isset($_POST['message']) && !empty($_POST['message'])){
    $message = $_POST['message'];
  }else{
   $error .= "<li>The message could not be saved.</li>";
  }
  if(empty($error)){
   if($_POST['mailing_list']=="true"){
      $mail_list= 1;
   }else{
      $mail_list= 0;
   }
   mysql_connect(localhost,$username,$password); 
   mysql_select_db($database) or die( "<ol><li>Unable to save your contact information and message.</li></ol>"); 
   $insert_mail = "INSERT INTO $table_mail (name,email,mail_list) VALUES (\"$name\",\"$email\",\"$mail_list\")"; 

   $insert_message = "INSERT INTO $table_message (email,message) VALUES (\"$email\",\"$message\")"; 
   mysql_query($insert_mail) || die("<ol><li>We apologize for the inconvenience, but your message could not be sent. Please contact jv@julesvano.com directly.</li></ol>");
   mysql_query($insert_message) || die("<ol><li>Could not save message.</li></ol>");
   mysql_close();
   send_email($email,$name . " wrote the following message:\n\r" . $message);
   print(""); 
  }else{
    return $error;
 }
}
?>
