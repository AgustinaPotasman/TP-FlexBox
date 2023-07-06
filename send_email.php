<html><body>
  <?php
    // The message
    $name = $_GET["name"];
    $lastname = $_GET["lastname"];
    $email_address = $_GET["email_address"];
    $message = $_GET["message"];
    $full_message = $name + '\n\r' + $email_address + '\n\r' + $message;
    $subject = $_GET["subject"];
    // Send
    mail('hoxaca4126@nasskar.com', $subject, $full_message);
  ?>

  Your mail has been sent.
</body></html>