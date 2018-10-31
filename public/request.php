<?php
/**
 * Created by PhpStorm.
 * User: fred
 * Date: 31/10/18
 * Time: 09:38
 */

require '../vendor/autoload.php';
use OpenFoodFacts\Api;

$client = new Api();
$result = $client -> search('haribo');

foreach ($result as  $item) {
    echo $item->product_name;
    echo "<img src=".$item->image_thumb_url.">";
    echo "<hr>";
}

?>


