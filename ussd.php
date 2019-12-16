<?php

// Reads the variables sent via POST from our gateway
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

if ( $text == "" ) {

   // This is the first request. Note how we start the response with CON
   $response  = "CON Welcome to Binary Account \n";
   $response .= "1. My Binary Account \n";
   $response .= "2.Register with Binary Account";


}else if ( $text == "1" ) {
  // Business logic for first level response
  $response = "CON Get started below \n";
  $response .= "1. Enter PIN \n";
  $response .= "2. Back";
  
}else if($text == "2") {
 
  // Business logic for first level response
   $response  = "END You are already registered! \n";

  // This is a terminal request. Note how we start the response with END
  //$response = "END Your phone number is $phoneNumber";
 
}else if($text == "1*1") {
 
  // This is a second level response where the user selected 1 in the first instance
  $response = "CON Proceed \n";
  $response .= "1. Buy Goods \n";
  $response .= "2. Check Points";
  $response .= "3. Back";
 // $accountNumber  = "ACC1001";
  // This is a terminal request. Note how we start the response with END
  $response = "END Your account number is $accountNumber";
 
}else if ( $text == "1*1*1" ) {
      $response = "CON Select Location \n";
      $response .= "1. Gaborone \n";
      $response .= "2. Fransistown";
      $response .= "3. Maun";
      $response .= "4. Kanye";
      $response .= "5. Kasane";
      $response .= "6. Ghanzi";
   // This is a second level response where the user selected 1 in the first instance
  // $balance  = "NGN 10,000";
   // This is a terminal request. Note how we start the response with END
   $response = "END Your balance is $balance";

}
else if ( $text == "1*1*1*3" ) {
      $response = "CON Select Shop \n";
      $response .= "1. Jamal Trading \n";
      $response .= "2. Builders";
      $response .= "3. Haskins";
      $response .= "4. Eezee Build";
      $response .= "5. Cashbuikd";
   // This is a second level response where the user selected 1 in the first instance
  // $balance  = "NGN 10,000";
   // This is a terminal request. Note how we start the response with END
   //$response = "END Your balance is $balance";

}

else if ( $text == "1*1*1*3*1" ) {
      $response = "CON Buying from Haskins, Select: \n";
      $response .= "1. Cement \n";
      $response .= "2. Brickforce";
      $response .= "3. Tiles";
      $response .= "4. Bricks";
      $response .= "5. Plumbing";
   // This is a second level response where the user selected 1 in the first instance
  // $balance  = "NGN 10,000";
   // This is a terminal request. Note how we start the response with END
   //$response = "END Your balance is $balance";

}
else if ( $text == "1*1*1*3*1*1" ) {
      $response = "CON Enter number of Cements: \n";
      
   // This is a second level response where the user selected 1 in the first instance
  // $balance  = "NGN 10,000";
   // This is a terminal request. Note how we start the response with END
   //$response = "END Your balance is $balance";

}
// Print the response onto the page so that our gateway can read it
header('Content-type: text/plain');
echo $response;

// DONE!!!
?>