<?php // Get the PHP helper library from twilio.com/docs/php/install // Loads the library require "vendor/autoload.php"; // A function that takes a phone number and // returns true if the number is valid and false otherwise. function isValidNumber($number) { // Your Account Sid and Auth Token from twilio.com/user/account $sid = "{{account_sid}}"; $token = "{{ auth_token }}"; $client = new Lookups_Services_Twilio($sid, $token); // Try performing a carrier lookup and return true if successful. try { $number = $client->phone_numbers->get($number, array("CountryCode" => "US", "Type" => "carrier"));


	require "../vendor/autoload.php";

try{
     $number->carrier->type; // Should throw an exception if the number doesn't exist.
     return true;
} catch (Exception $e) {
        // If a 404 exception was encountered return false.
        if($e->getStatus() == 404) {
            return false;
        } else {
            throw $e;
        }
    }

 
if (isValidNumber("19999999999")) {
    echo "Phone number is valid";
} else {
    echo "Phone number is not valid";
}