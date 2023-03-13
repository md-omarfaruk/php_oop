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
        interface Behavior{
            public function gettingReply();
        }  
        
        class NormalPeople implements Behavior{
            public function gettingReply(){
                echo "hea";
            }
        }

        class FormalPeople implements Behavior{
            public function gettingReply(){
                echo "gii";
            }
        }

        class AngerPeople implements Behavior{
            public function gettingReply(){
                echo "hoo";
            }
        }

        $betterPeople = new FormalPeople();
        echo $betterPeople->gettingReply();
    ?>
</body>
</html>