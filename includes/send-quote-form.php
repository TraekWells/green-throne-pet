<?php

function send_quote_form() {
  if ( ! empty( $_POST ) ) {
    // Get all of the form fields
    $zipCode = sanitize_text_field($_POST['zipCode']);
    $numberOfDogs = $_POST['howMany'];
    $cleanedLast = $_POST['cleanedLast'];
    $howOften = $_POST['howOften'];
    
    $firstName = sanitize_text_field($_POST['firstName']);
    $lastName = sanitize_text_field($_POST['lastName']);
    $email = sanitize_email($_POST['emailAddress']);
    $phoneNumber = sanitize_text_field($_POST['phoneNumber']);
    $address1 = sanitize_text_field($_POST['address1']);
    $address2 = sanitize_text_field($_POST['address2']);
    
    $yardSafe = $_POST['yardSafe'];
    $contactMethod = $_POST['contactMethod'];
  
    $to = get_option('admin_email');
    $subject = "New Quote Form Submission";
    $message = $firstName . " " . $lastName . " has just submitted a quote request."
              . "\r\n\r\n"
              . "\r\n\r\n"
              . "<h3>Service Information</h3>"
              . "\r\n\r\n"
              . "<strong>Zip Code:</strong> " . $zipCode . "<br>"
              . "\r\n\r\n"
              . "<strong>Number of Dogs:</strong> " . $numberOfDogs . "<br>"
              . "\r\n\r\n"
              . "<strong>When was the yard last cleaned?</strong> " . $cleanedLast . "<br>"
              . "\r\n\r\n"
              . "<strong>How often do you want the yard cleaned?</strong> " . $howOften . "<br>"
              . "\r\n\r\n"
              . "<h3>Contact Information</h3>"
              . "\r\n\r\n"
              . "<strong>Name</strong> " . $firstName . " " . $lastName . "<br>"
              . "\r\n\r\n"
              . "<strong>Email Address:</strong> " . $email . "<br>"
              . "\r\n\r\n"
              . "<strong>Phone Number:</strong> " . $phoneNumber . "<br>"
              . "\r\n\r\n"
              . "<strong>Address:</strong> " . $address1 . $address2 . "<br>"
              . "\r\n\r\n"
              . "<h3>Pet Information</h3>"
              . "\r\n\r\n"
              . "<strong>Can you be in the yard with the dogs?</strong> " . $yardSafe . "<br>"
              . "\r\n\r\n"
              . "<strong>Preferred Contact Method:</strong> " . $contactMethod . "<br>";
      $headers[] = "From:" . $email;
      $headers[] = "Content-Type: text/html; charset=UTF-8";
  
    wp_mail( $to, $subject, $message, $headers);
  
    wp_safe_redirect( site_url('/thank-you') );
    exit;
  }
}