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
        abstract class Fruit{
            public $name;

            function __construct($name){
                $this->name = $name;
            }

            abstract public function intro() : string;
        }

        class Mango extends Fruit{
            public function intro() : string{
                return $this->name;
            }
        }

        class Banana extends Fruit{
            public function intro() : string{
                return $this->name;
            }
        }

        $Mango = new Mango("Mango");
        echo $Mango->intro();
        echo "<br>";
        $Banana = new Banana("Banana");
        echo $Banana->intro();
        echo "<br>";

        // ANOTHER ABSTRACT CLASSES USES---------------------------------
        // ANOTHER ABSTRACT CLASSES USES---------------------------------

        abstract class MyName {
            abstract protected function maritalStatus($name);
        }
            class Status extends MyName{
                public function maritalStatus($name){
                    if($name == "Md. Omar Faruk"){
                        $maritalPrefix = "Not married";
                    }
                    else{
                        $maritalPrefix = "Married";
                    }
                    return "{$name} is {$maritalPrefix} yet.";
                }
            }

            $marriedOrNot = new Status;
            echo $marriedOrNot->maritalStatus("Md. Omar Faruk");
        
    ?>
</body>
</html>