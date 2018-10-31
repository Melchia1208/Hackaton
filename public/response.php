<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bonbons ou sors !!!</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Eczar" rel="stylesheet">

</head>
<body id="bobo">
<div class="container text-center">
<img src="http://image.noelshack.com/fichiers/2018/44/2/1540919069-page2.jpg" alt="fd">
</div>

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
$result = $client -> search($_GET['ean13']);

foreach ($result as  $item) {
    echo '<div class="container text-center">';
    echo "<img src=".$item->image_thumb_url.">";
    echo '<p style="color: white">';
    echo $item->product_name;
    echo '</p>';
    echo "<hr>";
    echo '</div>';
}

?>




<pre>
    {json}
</pre>

</body>
</html>