<?php
namespace Persons\Employees;

use FoodOrder\FoodOrder;
use Persons\Employees\Employee;

class Chef extends Employee{
    public function __construct(string $name, int $age, string $address, int $employyeeId, float $slary){
        parent:: __construct($name, $age, $address, $employyeeId, $slary);
    }

    public function prepareFood(FoodOrder $foodOrder): string{
        return $this->name." was cooking" .$foodOrder;
    }

}


?>