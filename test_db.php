<?php

  $username="joecater";
  $passwd="9elGguj!";
  $db = "joecater_jvcontacts";
  $mailing_list_tb="mailing_list";
  mysql_connect("localhost",$username,$passwd) or die(mysql_error());
  mysql_select_db($db);
$sql = "INSERT INTO mailing_list (name,email,mail_list) VALUES ('Joe','zhouyaoji.com',1)";
$result = mysql_query($sql);
print_r($result);
?>
