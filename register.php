<?php

    require __DIR__ . '/vendor/autoload.php';

    //Connect to database
    $mongoClient = (new MongoDB\Client);

    //Select a database
    $db = $mongoClient->ecommerce;
    
    //Select a collection 
    $collection = $db->Customers;

    //Extract the data that was sent to the server
    $firstName= filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING);
    $lastName = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
    $city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_STRING);
    $postCode = filter_input(INPUT_POST, 'postCode', FILTER_SANITIZE_STRING);


     //Create a PHP array with our search criteria
     $findCriteria = [
        "email" => $email, 
     ];

     //Find e-mail
    $cursor = $db->Customers->findOne($findCriteria);


    //Check if e-mail arleady exists in database
    if(!empty($cursor)){
        echo '<script> alert("Email taken");';
        echo 'window.location.replace("myAccount.php");</script>';
    }

    else{
    //Convert to PHP array
    $dataArray = [
    "firstName" => $firstName, 
    "lastName" => $lastName, 
    "email" => $email,
    "phone" => $phone,
    "password" => $password,
    "address" => $address,
    "city" => $city,
    "postCode" => $postCode
    ];
    }

    $insertResult = $collection -> insertOne($dataArray);
    
    //Alert result back to user
    if($insertResult->getInsertedCount()==1){
        echo '<script> alert("Account created");
        window.location.replace("myAccount.php");</script>';
    }
    else {
        echo 'Error adding customer';
    }

?>


