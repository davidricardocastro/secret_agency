<?php

//require database library
require_once 'db.php';

//write SQL query
$query = "
    SELECT *
    FROM messages
    
    ";

//run the query
$statement = db::query($query);

//fetch the results
$data = $statement->fetchAll();

//var_dump($data);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SSA</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<div class="container bg-secondary">


    <nav class="navbar navbar-dark bg-primary ">
  <span class="h1" class="navbar-brand mb-0 ">SSA -Super Secret Agency</span>
    </nav>


    <?php foreach($data as $agent) : ?>

    <div class="row">
    <div class="col bg-warning border m-3 p-3">

    <?php echo '<h3><b>Agent: </b> '. $agent['user'].'</h3>'; ?> 
    <?php echo '<h6>Message level: '. $agent['level'].'</h6>'; ?> 
    <?php echo '<p> Message: '. $agent['text'].'</p>'; ?> 



    </div>
    </div>  
    <?php endforeach; ?>


    
   


  




</div>






</body>
</html>