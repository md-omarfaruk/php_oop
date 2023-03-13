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
        trait maritalStatusYes{
            public function yesMsg(){
                echo "Yes, I am married";
            }
        }   
        
        trait maritalStatusNo{
            public function noMsg(){
                echo "No, I am not married yet";
            }
        }

        class Marital_status{
            use maritalStatusYes, maritalStatusNo;
        }

        $me = new Marital_status();
        $me->noMsg();


    ?>
</body>
</html>