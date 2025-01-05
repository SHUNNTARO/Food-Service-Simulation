<?php
namespace Persons\Chashiers;

use Persons\Person;
use Persons\Employees\Employee;
use Invoices\Invoice;
use Restaurants\Restaurant;
use FoodOrder\FoodOrder;

class Cashiers extends Employee {

    public function __construct(string $name, int $age, string $address, int $employyeeId, float $slary){
        parent:: __construct($name, $age, $address, $employyeeId, $slary);
    }

    public function generateOrder(array $category, Restaurant $restaurant):FoodOrder{
        return new FoodOrder($category, date("D M d, Y G:i"));
    }

    public function generateInvoice(FoodOrder $foodOrder): Invoice{
        $finalPrice=0;
        foreach($foodOrder as $foodItem => $price){
            $finalPrice += $foodItem * $price;
            return new Invoice($finalPrice, date("D M d, Y G:i"), random_int(1,100));
        }
    }
}
?>