<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP learning</title>
</head>

<script>
    function countSheeps(sheeps) {
        var counter = 0;

        for (var i=0; i<sheeps.length; i++) {
            counter = sheeps[i] ? counter + 1: counter;
        }

        console.log('The number of presenting sheeps is: ' + counter);
    }

    countSheeps([
        true,  true,  true,  false,
        true,  true,  true,  true ,
        true,  false, true,  false,
        true,  false, false, true ,
        true,  true,  true,  true ,
        false, false, true,  true 
    ]);
</script>
<body>
    <?php 
        /**
         * iterate through the array of students
         * array elements are true or false according to whether or not
         * student is presenting at the lecture
         * function counts the numbe of occurence of true and 
         * return the number of presenting students
         */
        function countStudents($students) {
            $counter = 0;
            /* foreach ($students as $student) {
                $counter = $student ? $counter + 1 : $counter;
            } */

            for ($i = 0; $i < count($students); $i++) {
                $counter = $students[$i] ? $counter + 1 : $counter;
            }

            echo 'The number of presenting students is: ' . $counter;
        }

        /**
         * returns Boolean value, true if found $x in $a, false otherwise
         */
        function isInArray($a, $x) {
            return in_array($x, $a);
            /* foreach ($a as $value) {
              if ($value === $x) {
                return true;
              }
            }
            
            return false; */
        }

        /**
         * function take year param, divide by 100 and get round down the value
         * which will equal the century 
         */
        function getCentury($year) {
            $century = ceil($year/100);
            return $century;
        }

        /**
         * First letters of strings can be accessed with syntax $sampleString[0]
         * Last letters of strings can be accessed either by substr($sampleString, -1) 
         * or $sampleString[strlen($sampleString) - 1]
         */
        function matchFirstLast($a, $b){
            return $a[0] == $b[0] && substr($a, -1) == substr($b, -1);
        }

        /**
         * 
         */
        function alphabet_position(string $s): string {
            $result = '';
            $array_from_string = str_split($s);
          
            foreach ($array_from_string as $character) {
              $order_value = ord(strtoupper($character)) - ord('A') + 1;
              $result = $result . $order_value . ' ';
            }
            
            return $result;
        }

        echo alphabet_position('the quick brown fox');

        echo isInArray(['i', 'am', 'peter'], 'peter') ? 'Found Peter' : 'Peter is not found';
        echo '<br>';

        countStudents([
            true,  true,  true,  false,
            true,  true,  true,  true ,
            true,  false, true,  false,
            true,  false, false, true ,
            true,  true,  true,  true ,
            false, false, true,  true 
        ]);

    ?>
</body>
</html>


