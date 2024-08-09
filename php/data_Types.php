<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php
    class Car {
        public $color;
        public $model;
        public function __construct($color,$model)
    {
        $this->color = $color;
        $this->model = $model;
    }
    public function message() {
        return "My car is a " . $this->color ." " . $this->model . "!";
    }
    }
    $myCar = new Car("red", "volvo");
    var_dump($myCar);
    ?>
</body>
</html>