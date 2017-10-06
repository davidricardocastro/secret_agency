<?php

//require database library
require_once 'db.php';

$query = "
SELECT *
FROM users
";

//run the query
$statement = db::query($query);

//fetch the results
$data = $statement->fetchAll();

//var_dump($data);

var_dump ($_POST);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>



<div class="container">



<nav class="navbar navbar-dark bg-primary ">
  <span class="h1" class="navbar-brand mb-0 ">SSA -Super Secret Agency</span>
    </nav>


  
<div class="row">
<div class="col">

    
<form action="login.php" method="post">

<div class="form-group">
<label> Username: </label>
 <input class="form-control" type="text" name="username">
</div>


<div class="form-group">
<label>Password: </label>
<input class="form-control" type="password">
</div>

<div class="form-group">
<input class="btn btn-primary" type="submit" value="Sign in">
</div>

<div class="form-group">
<input class="btn btn-primary" type="submit" value="Sign up">
</div>

</form>



</div>
</div>
</div>



</body>
</html>