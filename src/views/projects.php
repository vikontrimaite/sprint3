<?php

use Models\Project;
use Models\Employee;

include_once '../bootstrap.php';

// Helper functions
function redirect_to_root(){
    header("Location: " . parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH));
}

?>

<!DOCTYPE html>


<?php
include('head.php');
?>

<body>

    <?php
include('header.php');

echo '<table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Employees</th>
                <th>Actions</th>
            </tr>';

// show the table
print("<pre>Find shippment for specific product (choose product with shipment): " . "<br>");
$project = $entityManager->find('Models\Project', 4);
if($project){
    print($project->getId());
    print($project->getName());
    // $shipment = $product->getShippment();
    // if($shipment) print(" | " . $shipment->getShippmentDetails() . " | ");
    print(' <a href="?updatable"><button>UPDATE</button></a>');
}
print("</pre><hr>");


// Add new product
// Update shippment




?>

<p>this is projects page</p>


    
</body>
</html>