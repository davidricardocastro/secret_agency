<?php

//require database library
require_once 'db.php';

//write SQL query
$query = "
    SELECT *
    FROM messages
    WHERE messages.user=?
    ";

//run the query
$statement = db::query($query, ['agent3']);

//fetch the results
$data = $statement->fetchAll();

//var_dump($data);

//output the results
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>movies</h1>
    <ul>

    <?php foreach($data as $user) : ?>
    <li> <?php echo $user['text']; ?> </li>

    <?php endforeach; ?>
    
    </ul>

</body>
</html>