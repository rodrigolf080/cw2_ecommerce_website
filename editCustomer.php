<?php

    //Connect to MongoDB and select database
    require __DIR__ . '/vendor/autoload.php';
    //Connect to database
    $mongoClient = (new MongoDB\Client);
    //Select database
    $db = $mongoClient->ecommerce;
    //Select a collection 
    $collection = $db->Customers;

    //Extract the data that was sent to the server
    $firstName= filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING);
    $lastName = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
    $city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_STRING);
    $postCode = filter_input(INPUT_POST, 'postCode', FILTER_SANITIZE_STRING);



    $findCriteria = [
        "email" => $email, 
     ];

     $updateCriteria = [
        '$set' => [ "firstName" => $firstName, 
                    "lastName" => $lastName, 
                    "email" => $email,
                    "phone" => $phone,
                    "address" => $address,
                    "city" => $city,
                    "postCode" => $postCode ]
    ];


    //Find all of the customers that match  this criteria
    $returnVal = $db->Customers->updateOne($findCriteria, $updateCriteria);

    if($returnVal->getModifiedCount()){
        echo'<script>alert("Details changed");
        window.location.replace("viewDetails.php");</script>';
    }

   

?>