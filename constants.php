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
            const NAME = "My name is Md. Omar Faruk unmarried";
            public function introduce(){
                echo self::NAME;
            }
        }

        $me = new MyName();
        $me->introduce();
    ?>
</body>
</html>