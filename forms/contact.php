<?php
  
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/  email-form/  email-form.php
  * For more info and help: https://bootstrapmade.com/  email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'contact@example.com';

  if( file_exists($php_email_form = '../assets/vendor/  email-form/  email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  

  echo $contact->send();
?>
