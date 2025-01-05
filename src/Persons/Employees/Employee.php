<?php
namespace Persons\Employees;
use Persons\Person;


class Employee extends Person{
    protected int $employyeeId;
    protected float $salary;

    public function __construct(string $name, int $age, string $address, int $employyeeId, float $salary){
        parent:: __construct($name, $age, $address);
        $this->employyeeId = $employyeeId;
        $this->salary = $salary;
    }  
}
?>

