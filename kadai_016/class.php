<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        class Food {
            private $name;
            private $price;

            public function __construct($name, $price) {
                $this->name = $name;
                $this->price = $price;
            }

            public function getName() {
                return $this->name;
            }

            public function getPrice() {
                return $this->price;
            }
        }

        class Animal {
            private $name;
            private $height;
            private $weight;

            public function __construct($name, $height, $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            public function getName() {
                return $this->name;
            }

            public function getHeight() {
                return $this->height;
            }

            public function getWeight() {
                return $this->weight;
            }
        }

        $food = new Food('potato', 250);

        $animal = new Animal('dog', 60, 5000);

        echo "Food Object ( {name:Food:private} => " . $food->getName() . " {price:Food:private} => " . $food->getPrice() . " )<br>";
        echo "Animal Object ( {name:Animal:private} => " . $animal->getName() . " {height:Animal:private} => " . $animal->getHeight() . " {weight:Animal:private} => " . $animal->getWeight() . " )<br>";

        echo $food->getPrice() . "<br>";
        echo $animal->getHeight();
        ?>
    </p>
</body>

</html>