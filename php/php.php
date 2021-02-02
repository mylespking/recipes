<?php

	// Echo all errors back to the screen of the browser so PHP can be debugged
    ini_set('display_errors', 'On');
    error_reporting(E_ALL);
    ini_set('memory_limit', '1024M');

    $executionStartTime = microtime(true);

    // Initialize cURL
    $ch = curl_init('https://api.spotify.com/v1/users/mylesking/playlists');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    // Store the data
    $result = curl_exec($ch);
    
    // End the cURL
    curl_close($ch);

    // Decode JSON response
    $data = json_decode($result, true);

     // Assign the output variable properties to relevant data
     $output['status']['code'] = "200";
     $output['status']['name'] = "ok";
     $output['status']['description'] = "success";
     $output['status']['executedIn'] = intval((microtime(true) - $executionStartTime) * 1000) . " ms";
     $output['data'] = $data;

    header('Content-Type: application/json; charset=UTF-8');

   // Echo out all the useful data
    echo json_encode($output);
    
?>


// Fill the select option with available countries from the border data file
$.ajax({
    url: "php/php.php",
    type: 'POST',
    dataType: 'json',
    success: function(result) {

        console.log(result)
    },
    error: function(jqXHR, exception){
        errorajx(jqXHR, exception);
        console.log("Option select");
    }
}); 
