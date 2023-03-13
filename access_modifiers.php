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
        class Cars{
            public $name;
            protected $color;
            private $price;

            function set_name($name){
                $this->name = $name;
            }
            function set_color($color){
                $this->name = $color;
            }
            function set_price($price){
                $this->name = $price;
            }

            function get_name(){
                return $this->name;
            }
            function get_color(){
                return $this->color;
            }
            function get_price(){
                return $this->price;
            }
        }

        $rolls_royce = new Cars();

        $rolls_royce->set_name("Rolls Royce");
        echo $rolls_royce->get_name();

        $rolls_royce->set_color("Black");
        echo $rolls_royce->get_color();

        $rolls_royce->set_price("300,00,00");
        echo $rolls_royce->get_price();




    ?>
</body>
</html>