<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$object = ['Emmanuel joseph', 'Mark zuckberg','Jack grealish'];

foreach ($object as $show)

echo  '<div class="card">
    <div class="card-border">
<h1>
 '.'My name is ' .$show.'
</h1>
   </div>
    </div>


';

?>
    
</body>
</html>