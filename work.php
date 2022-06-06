<?php
    // создание класса Work(работа)
    class Work {

        // свойства класса Work
        public $workName;
        public $mediumSalary;
        public $list = [];

        // функция конструктор для новых объектов класса Work
        public function __construct($workName, int $mediumSalary)
        {
            $this->workName = $workName;
            $this->mediumSalary = $mediumSalary;
        }

    }

    // создание новых объектов класса Work с их параметрами
    $workFirst = new Work('Back-end', 40000);
    $workSecond = new Work('Full-stack', 50000);
    $workThird = new Work('Front-end', 35000);
?>