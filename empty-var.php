<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Hello World</title>
</head>

<style>
    select, input {
        display: block;
        margin-top: 10px;
    }
</style>

<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example of Testing Whether a Variable is Empty in PHP</title>
</head>
<body>

<?php
    $var1 = '';
    $var2 = 0;
    $var3 = NULL;
    $var4 = '0';
    $var5 = array();
    
    // Testing the variables
    if(isset($var0)){
        echo 'This line is printed, because the $var0 is empty.';
    }
    echo "<br>";
    if(is_null($var1)){
        echo 'This line is printed, because the $var1 is empty.';
    }
    echo "<br>";

    if(empty($var2)){
        echo 'This line is printed, because the $var2 is empty.';
    }
    echo "<br>";

    if(is_null($var3)){
        echo 'This line is printed, because the $var3 is empty.';
    }
    echo "<br>";

    if(empty($var4)){
        echo 'This line is printed, because the $var4 is empty.';
    }
    echo "<br>";

    if(empty($var5)){
        echo 'This line is printed, because the $var5 is empty.';
    }
?>

</body>
</html>                                		
</body>
</html>