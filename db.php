<?php

  $server = "sql107.epizy.com";
  $username = "epiz_32095289";
  $password = "EZx0Mh6rr9L";
  $dbname = "epiz_32095289_Hexious";

  $conn = mysqli_connect($server, $username, $password, $dbname);

  if (!$conn){
      die("Connection Failed:" .mysqli_connect_error());
  }

?>

