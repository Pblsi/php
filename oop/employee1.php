<?php
// calculate the employee salary

class Employee {

    private $id;
    private $name;
    private $workingHoursPerDay = 8;
    private $hourlyRate = "15";
    private $totalLeaveTaken;
    private $workingDays;

    function __construct($id, $name, $totalLeaveTaken){

        $this->id = $id;
        $this->name = $name;
        $this->getTotalLeaveTaken = $totalLeaveTaken;
    }
    
    function getSalaryAmount($totalDays) : int{
        // this is a special variable that is used to access class properties.
        $this->workingDays = $totalDays - $this->totalLeaveTaken;
        $salary = $this->workingDays * $this->workingHoursPerDay * $this->hourlyRate;
        return $salary;
        
    }

    function getName(){
        return $this->name;
    }

    function getWorkingDays(){
        return $this->workingDays;
    }

    function getTotalLeaveTaken(){
        return $this->totalLeaveTaken;
    }

}

$emp1 = new Employee (101, " john smith", 4);
$salary = $emp1->getSalaryAmount(20);
echo $emp1->getName() . " has worked for " . $emp1->getWorkingDays() . 
" days and taken" . $emp1->getTotalLeaveTaken() . " leaves." . PHP_EOL; 
echo $emp1->getName() . " salary is $salary" . PHP_EOL;








$emp1 = new Employee (1, " jake smith", 3);
$salary = $emp1->getSalaryAmount(220);
echo $emp1->getName() . " has worked for " . $emp1->getWorkingDays() . 
" days and taken" . $emp1->getTotalLeaveTaken() . " leaves." . PHP_EOL; 
echo $emp1->getName() . " salary is $salary" . PHP_EOL;
?>