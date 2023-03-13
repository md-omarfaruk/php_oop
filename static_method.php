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
        class MyName{
            protected static function getName(){
                return "Md. Omar Faruk";
            }
        }

        class Me extends MyName{
            public $name;
            public function __construct(){
                $this->name = parent::getName();
            }
        }

        $me = new Me();
        echo $me->name;
    ?>
</body>
</html>