<?php
    include ('../common.php');
    outputHeader("CMS Login");  
?>      

<!--- cms navbar -->
<div class="cms-container">
    <ul>
		<li><a href="add_product.php">Add product</a></li>
        <li><a href="edit_product.php">Edit product</a></li>
		<li><a href="view_products.php">View products</a></li>
		<li><a href="orders.php">Placed orders</a></li> 
    </ul>        
</div>
<?php

//Connect to MongoDB and select database
require __DIR__ . '/vendor/autoload.php';
//Connect to database
$mongoClient = (new MongoDB\Client);
//Select database
$db = $mongoClient->ecommerce;
//Select a collection 
$collection = $db->Products;

// For each product on database table output name
// Gather all products from the database
$handle = $db->customers->find();
// Output the result
echo "<h1> Products: </h1>";
foreach ($handle as $product)
    echo "<p> Product name: "  . $product['name'] . " | ID: ".$product['id'] . "</p>";
}


?>
<?php
        outputFooterCMS();
?>