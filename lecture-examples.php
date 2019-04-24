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
    <div>PHP version running on this server is <?php echo phpversion() ?></div>
    <div>
        <?php 
            $sample_empty_array = array();
            echo "The output of the sample empty array upon creation is: ";
            print_r($sample_empty_array);
            echo "<br>";
            $sample_empty_array = array("x", "y", 1, 2, 3);
            echo "The output of the sample empty array is now: ";
            print_r($sample_empty_array);
            echo "<br>";
            $sample_empty_array = ["Harry", "Hermione", "Ron"];
            echo "The output of the sample empty array is now: ";
            print_r($sample_empty_array);
            echo "<br>";
            $sample_empty_array[2] = "Ginny";
            echo "The output of the sample array after replacing Ron is: ";
            print_r($sample_empty_array);
            echo "<br>";
            $sample_empty_array[] = "Snape";
            echo "The output of the sample array after adding prof Snape is: ";
            print_r($sample_empty_array);
            echo "<br>";

        ?>
    </div>
    <div>5 is <?php echo is_int(5) ? "an integer" : "not an integer"; ?></div>
    <div>5.5 is <?php echo is_int(5.5) ? "an integer" : "not an integer"; ?></div>
    <div>5 is <?php echo is_float(5) ? "a float" : "not a float"; ?></div>
    <div>5.5 is <?php echo is_float(5.5) ? "a float" : "not a float"; ?></div>
    <div>Hello World is <?php echo is_numeric("Hello World") ? "is numerical" : "is not numerical"; ?></div>
    <div>5.5 is <?php echo is_numeric(5.5) ? "is numerical" : "is not numerical"; ?></div>
</body>
</html>