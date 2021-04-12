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
    <th>Project</th>
    <th>Actions</th>
</tr>';

// show the table


// Add new product
// Update shippment




?>

<p>this is employees page</p>


    
</body>
</html>