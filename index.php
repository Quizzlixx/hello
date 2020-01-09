<?php
/**
 * Kerrie Low
 *
 *
 */
// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once("vendor/autoload.php");

// create an instane of the base class
$f3 = Base::instance();

// define a default route
$f3->route('GET /', function() {
    echo "<h1>Hello, world!</h1>";
});

// run fatfree
$f3->run();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<!-- header -->
<div class="container-fluid jumbotron jumbotron-fluid">
    <h2 class="text-center text-monospace"></h2>
    <div class="container d-flex justify-content-between">
        <p></p>
        <p class="lead">Written by Kerrie Low</p>
    </div>
</div> <!-- /header -->
<div class="container">
</div>
<!-- jQuery -->
<!-- slim jQuery does not support AJAX -->
<script src="//code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
