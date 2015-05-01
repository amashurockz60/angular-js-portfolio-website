<?php
  // Grab The Form Values By the Name Attribute
  $userName = htmlentities(substr($_POST['contactName'], 0, 100), ENT_QUOTES);
  $userEmail = htmlentities(substr($_POST['contactEmail'], 0, 100), ENT_QUOTES);
  $userMessage = htmlentities(substr($_POST['messageContent'], 0, 2000), ENT_QUOTES);

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
        " . wordwrap($userMessage, 100) . "
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


  // If Submit Button Clicked, Run The Following Code
//  if($_POST['submit']){
//    // If Following Variables Exist, Mail Them
//    if(mail($to, $subject, $body, $from)){
//      echo "<p>Thanks for contacting me, I will get back to you as soon as possible!</p>";
//    } else {
//      echo "<p>Something went wrong, please refresh the page and try again</p>";
//    }
//  }

//  // Main Variables Used Throughout the Script
//  $domain = "http://" . $_SERVER["HTTP_HOST"]; // Root Domain - http://example.com
//  $siteName = "AK Marketing Solutions";
//  $siteEmail = "aaronk9511@gmail.com";
//  $er = "";
//
//  // Check if the web form has been submitted
//  if (isset($_POST["contactEmail"])){
//    
//    /*
//     * Process the web form variables
//     * Strip out any malicious attempts at code injection, just to be safe.
//     * All that is stored is safe html entities of code that might be submitted.
//     */
//    $contactName = htmlentities(substr($_POST["contactName"], 0, 100), ENT_QUOTES);
//    $contactEmail = htmlentities(substr($_POST["contactEmail"], 0, 100), ENT_QUOTES);
//    $messageContent = htmlentities(substr($_POST["messageContent"], 0, 10000), ENT_QUOTES);
//    
//    /*
//     * Perform some logic on the form data
//     * If the form data has been entered incorrectly, return an Error Message
//     */
//     
//     // Check if the data entered for the E-mail is formatted like an E-mail should be
//    if (!eregi('^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]{2,})+$', $contactEmail)){
//      $er .= 'Please enter a valid e-mail address.<br />';
//    }
//    
//    // Check if all of the form fields contain data before we allow it to be submitted successfully
//    if ($contactName == "" || $contactEmail == "" || $messageContent == ""){
//      $er .= 'Your Name, E-mail, and Message Content cannot be left blank.<br />';
//    }
//    
//    // IF NO ERROR - START
//    if ($er == ''){
//      
//      // Prepare the E-mail elements to be sent
//      $message = 
//      '<html>
//        <head>
//          <title>' . $siteName . ': A Contact Message</title>
//        </head>
//        <body>
//          ' . wordwrap($messageContent, 100) . '
//        </body>
//      </html>';
//      
//      /*
//       * We are sending the E-mail using PHP's mail function
//       * To make the E-mail appear more legit, we are adding several key headers
//       * You can add additional headers later to further customize the E-mail
//       */
//      
//      $to = $siteName . ' Contact Form <' . $siteEmail . '>';
//      
//      // To send HTML mail, the Content-type header must be set
//      $headers = 'MIME-Version: 1.0' . "\r\n";
//      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//      
//      // Additional Headers
//      $headers .= 'From: ' . $contactName . ' <' . $contactEmail . '>' . "\r\n";
//      $headers .= 'Reply-To: ' . $contactName . ' <' . $contactEmail . '>' . "\r\n";
//      $headers .= 'Return-Path: ' . $contactName . ' <' . $contactEmail . '>' . "\r\n";
//      $headers .= 'Date: ' . date("r") . "\r\n";
//      $headers .= 'X-Mailer: ' . $siteName . "\r\n";
//      
//      // And now, mail it
//      if (mail($to, $message, $headers)){
//        echo '<div>Thank you for contacting ' . $siteName . '. I will get back to you as soon as possible.</div>';
//      }
//      else {
//        $er .= 'We weren\'t able to send your message. Please contact ' . $siteEmail . '.<br />';
//      }
//    }
//    // IF NO ERROR - END
//  }
//
//  // If web form has not been submitted, show a blank form
//  else {
//    showContactForm();
//  }
//
//  /*
//   * If there have been errors, we want to return notification
//   * We also want to be nice, and send any data already filled in back so they don't re-enter it
//   */
//
//  // If there are errors, and the contact E-mail is filled in
//  if ($er != '' && isset($_POST["contactEmail"])){
//    showContactForm($contactName, $contactEmail, $messageContent, $er);
//  }
//
//  // If there are errors, and the contact E-mail isn't filled in
//  else if ($er != '' && !isset($_POST["contactEmail"])){
//    showContactForm('', '', '', '', $er);
//  }
//
//  // Setup a function to display a contact form
//  function showContactForm($contactName = "", $contactEmail = "", $messageContent = "", $er = ''){
//    echo '
//          <form action="' . $_SERVER["REQUEST_URI"] . '" method="post" name="contactForm">
//          
//            <div class="contact__form--text">
//              <input type="text" name="contactName" placeholder="Your Name" id="contactName" value="' . $contactName . '"><br>
//
//              <input type="email" name="contactEmail" placeholder="Your Email" id="contactEmail" value="' . $contactEmail . '"><br>
//
//              <textarea name="messageContent" placeholder="Type Your Message Here" id="messageContent">' . $messageContent . '</textarea>
//            </div>
//
//            <input type="submit">
//          </form>';
//  }
?>