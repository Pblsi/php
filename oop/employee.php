<?php
// calculate the employee salary

class Employee {

    public $id;
    public $name;
    public $workingHoursPerDay = 8;
    public $hourlyRate = "15";
    public $totalLeaveTaken;
    public $workingDays;
    
    function getSalaryAmount($totalDays) : int{
        // this is a special variable that is used to access class properties.
        $this->workingDays = $totalDays - $this->totalLeaveTaken;
        $salary = $this->workingDays * $this->workingHoursPerDay * $this->hourlyRate;
        return $salary;
        
    }

}

$emp1 = new Employee ();
$emp1->id = 101;
$emp1->name = "john smith";
$emp1->totalLeaveTaken = 4;
$salary = $emp1->getSalaryAmount(20);
echo "$emp1->name has worked for $emp1->workingDays days and taken $emp1->totalLeaveTaken leaves." . PHP_EOL;
echo "$emp1->name salary is $salary" . PHP_EOL;

?>