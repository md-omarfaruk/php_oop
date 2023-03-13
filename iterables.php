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
        class CreateIterators implements Iterator {
            private $products = [];
            private $productKey = 0;

            public function __construct ($products){
                $this->products = $products;
            }
            public function current(){
                return $this->products[$this->productKey];
            }
            public function key(){
                return $this->productKey;
            }
            public function next() {
                    $this->productKey++;
            }
            public function rewind() {
                $this->productKey = 0;
            }
            public function valid() {
                return $this->productKey < count($this->products);
            }
        }

        function productsIterable(iterable $products){
                foreach($products as $product){
                    echo $product;
                }
        }

        $allProducts = new CreateIterators([1,2,3,4,5]);

        productsIterable($allProducts);
    ?>
</body>
</html>