


<?php
class Animal {
    protected $weight;
    protected $age;
    protected $color;

    public function __construct($weight, $age, $color) {
        $this->weight = $weight;
        $this->age = $age;
        $this->color = $color;
    }

    public function getInfo() {
        return "Вес: {$this->weight} kg, Возраст: {$this->age} лет, Окрас: {$this->color}.";
    }
}

class Dog extends Animal {
    private $breed;

    public function __construct($weight, $age, $color, $breed) {
        parent::__construct($weight, $age, $color);
        $this->breed = $breed;
    }

    public function getInfo() {
        return parent::getInfo() . " Порода: {$this->breed}.";
    }
}

class Cat extends Animal {
    private $isIndoor;

    public function __construct($weight, $age, $color, $isIndoor) {
        parent::__construct($weight, $age, $color);
        $this->isIndoor = $isIndoor ? "Да" : "Нет";
    }

    public function getInfo() {
        return parent::getInfo() . " Домашний: {$this->isIndoor}.";
    }
}

class Bird extends Animal {
    private $wingSpan;

    public function __construct($weight, $age, $color, $wingSpan) {
        parent::__construct($weight, $age, $color);
        $this->wingSpan = $wingSpan;
    }

    public function getInfo() {
        return parent::getInfo() . " Размах крыльев: {$this->wingSpan} см.";
    }
}


$animals = [
    new Dog(15, 5, 'коричневый', 'Лабрадор'),
    new Cat(5, 3, 'черный', true),
    new Bird(0.3, 2, 'желтый', 25)
];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Информация о животных</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Информация о животных</h1>
    <?php foreach ($animals as $animal): ?>
        <div class="animal">
            <h3>Информация о животном:</h3>
            <p><?php echo $animal->getInfo(); ?></p>
        </div>
    <?php endforeach; ?>
</body>
</html>

