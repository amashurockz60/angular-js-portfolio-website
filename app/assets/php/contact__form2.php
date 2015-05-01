<?php
  // Grab The Form Values By the Name Attribute
  $userName = htmlentities(substr($_POST['contactName'], 0, 100), ENT_QUOTES);
  $userEmail = htmlentities(substr($_POST['contactEmail'], 0, 100), ENT_QUOTES);
  $userMessage = htmlentities(substr($_POST['messageContent'], 0, 2000), ENT_QUOTES);
  $userWebsite = htmlentities(substr($_POST['contactWebsite'], 0, 100), ENT_QUOTES);
  $projectBudget = htmlentities(substr($_POST['projectBudget'], 0, 100), ENT_QUOTES);

  $siteName = "AK Marketing Solutions";
  $to = "aaron@akmarketingsolutions.com";
  $from = "From: AK Marketing Solutions Contact Form";
  $subject = "AK Marketing Solutions Message";
  $body =
    "<html>
      <head>
        <title>Contact Message From AK Marketing Solutions</title>
      </head>
      <body>
        " . $userWebsite . "\r\n"
        . $userBudget
        . wordwrap($userMessage, 100) . "
      </body>
    </html>";
  $er = "";

  // To send HTML mail, the Content-type header must be set
  $headers = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

  // Additional Headers
  $headers .= 'From: aaron@akmarketingsolutions.com' . "\r\n";
  $headers .= 'Reply-To: ' . $userEmail . "\r\n";
  $headers .= 'Return-Path: ' . $userName . ' <' . $userEmail . '>' . "\r\n";
  $headers .= 'Date: ' . date("r") . "\r\n";
  $headers .= 'X-Mailer: ' . $siteName . "\r\n";

  if($userName && $userEmail && $userMessage){
    mail($to, $subject, $body, $headers);
  };

?>