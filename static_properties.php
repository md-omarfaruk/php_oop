<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align:center">
    <?php

use MyName as GlobalMyName;

        class StaticName{
            public static $name = "Md. Omar Faruk";
        }

        class MyName extends StaticName{
            public function name(){
                return parent::$name;
            }
        }
        echo MyName::$name;
        echo "<br/>";
        
        $myName = new MyName();
        echo $myName->name();
    ?>
</body>
</html>