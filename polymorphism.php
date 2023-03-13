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
            public $name;
            public $color;

            public function __construct ($name, $color){
                $this->name = $name;
                $this->color = $color;
            }

            public function intro(){
                echo "{$this->name} is a great fruit and its color is {$this->color}.";
            }
        }

        class Cherry extends Fruit{
            public $name;
            public $color;
            public $price;

            public function __construct ($name, $color, $price) {
                $this->name = $name;
                $this->color = $color;
                $this->price = $price;
            }

            public function intro(){
                echo "{$this->name} is a delicious fruit, its price is {$this->price}, its look like {$this->color}.";
            }
        }

        $strawberry = new Cherry ("Strawberry", "red", 35);
        $strawberry->intro();
    ?>
</body>
</html>