<?php 
    // название пространства имен
    namespace Salary;

    // создание класса Salary(зарплата)
    class Salary {

        // свойство класса Salary - массив с возможными значениями
        public $salaryAmt = array(10000, 20000, 30000, 15000);

        // SalaryAmt
        // возвращает значение з/п из массива по индексу.  
        public function getSalaryAmt($index) 
        {
            return $this->salaryAmt[$index];
        }

    }
?>