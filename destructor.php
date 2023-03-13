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
        class Fruit {
            public $name;
            public $color;

            function __construct($name, $color) {
                $this->name = $name;
                $this->color = $color;
            }

            function __destruct()
            {
                echo "The fruit name is {$this->name}.<br/>And this fruit color is{$this->color}";
            }
        }
        
        $mango = new Fruit("Mango", "Yellow");
    ?>
</body>
</html>