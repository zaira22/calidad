<?php
require_once 'src/App/Dummy.php';
//require_once 'vendor/autoload.php'; // if using Composer autoloader and psr-0
use App\Dummy;

/**
 * 
 * @author Said Dawn
 */

$dummy = new Dummy();
$dummy->setNombre("said");
$dummy->setCorreo("dauun.said@gmail.com");

?>
<!DOCTYPE html>
<html>
<head>
    <title>Dummy Example</title>
</head>
<body>
<h1>Dummy Example</h1>

    <h4>Prueba</h4>
<div style="width:960px;">
    <pre>
        <?= $dummy->getNombre() ?>
        <?php var_dump($dummy->isValidEmail()); ?>
    </pre>
</div>

</body>
</html>
