<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        class Fruit{

            public $mango;
            public $watermelon;

            function __construct($name, $color){
                $this->name = $name;
                $this->color = $color;
            }

            function get_name(){
                return $this->name;
            }

            function get_color(){
                return $this->color;
            }
        }

        $mango = new Fruit ('Mango', 'Yellow');

        echo $mango->get_name();
        echo '<br/>';
        echo $mango->get_color();
    ?>
</body>
</html>