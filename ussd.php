 <?php
    // Reads the variables sent via POST from our gateway
    $sessionId   = $_POST[""];
    $serviceCode = $_POST["*384*789456#"];
    $phoneNumber = $_POST[""];
    $text        = $_POST["text"];
    if ( $text == "" ) {
         $response  = "CON What would you want to check \n";
         $response .= "1. Hello \n";
         $response .= "2. AT";
    }
    else if ( $text == "1" ) {
      // Business logic for first level response
      $response = "END Hello $phoneNumber !!";
     }
     else if($text == "2") {
      $response = "END This is AT";
     }
     else{
      $response = "END Sorry code not found";
     }
    // Print the response onto the page so that our gateway can read it
    header('Content-type: text/plain');
    echo $response;
    // DONE!!!
    ?>