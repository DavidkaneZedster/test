<?php
    include_once ('salary.php');
    use Salary\Salary;
    
    // объявление класса и его свойств
    class Worker {

        public $id;
        public $workerName;
        public $workerLastName;
        public $workerSalary;
        public $workers = [];

        // функция конструктор для свойств каждого нового объекта
        public function __construct(
            $id, 
            $workerName, 
            $workerLastName,
            $workerSalary
        ) {
            $this->salary = new Salary;
            $this->setId($id);
            $this->setWorkerName($workerName);
            $this->setWorkerLastName($workerLastName);
            $this->setSalary($workerSalary);
        }

        // ID
        public function setId($id) 
        {
            $this->id = $id;
        }

        public function getId()
        {
            return $this->id;
        }

        // WorkerName
        public function setWorkerName($workerName) 
        {
            $this->workerName = $workerName;
        }

        public function getWorkerName()
        {
            return $this->workerName;
        }

        // WorkerLastName
        public function setWorkerLastName($workerLastName)
        {
            $this->workerLastName = $workerLastName;
        }

        public function getWorkerLastName()
        {
            return $this->workerLastName;
        }

        // Salary
        public function setSalary($index)
        {
            $this->workerSalary = $this->salary->getSalaryAmt($index);
        }

        public function getSalary()
        {
            return $this->workerSalary;
        }

        // WorkerInfo
        public function getWorkerInfo()
        {
            return [
                'id' => $this->getId(),
                'name' => $this->getWorkerName(),
                'lastName' => $this->getWorkerLastName(),
                'salary' => $this->getSalary()
            ];
        }
    }

    // создание новых объектов класса Worker(Работники)
    $firstWorker = new Worker(1, 'David', 'Klorikyan', 0);
    $secondWorker = new Worker(2, 'Ivan', 'Nikolenko', 1);
    $thirdWorker = new Worker(3, 'Roman', 'Petrenko', 2);
    $fouthWorker = new Worker(4, 'Aziz', 'Azizov', 3);

    // добавление работников в массив list[] для каждой работы 
    $workFirst->list[] = $firstWorker;
    $workFirst->list[] = $secondWorker;
    $workFirst->list[] = $thirdWorker;
    
    $workSecond->list[] = $thirdWorker;
    $workSecond->list[] = $fouthWorker;

    $workThird->list[] = $firstWorker;
    $workThird->list[] = $thirdWorker;
    $workThird->list[] = $fouthWorker;
?>