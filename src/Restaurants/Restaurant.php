<?php
namespace Restaurants;

use FoodItems\FoodItem;
use Invoices\Invoice;
use Persons\Employyes\Employyes;

class Restaurant{
    protected array $menu;
    protected array $employees;

    public function __construct(array $menu, array $employees){
        $this->menu = $menu;
        $this->employees = $employees;
    }

    public function getMenu(): array{
        return $this->menu;
    }

    public function order(array $category): Invoice{

        $finalPrice  = 0;
        foreach($category as $menuItem => $number){
            $finalPrice += $this->menu[$menuItem]->price * $number;
        }

        return new Invoice($finalPrice, date("D M d, Y G:i"), random_int(1, 100));
    }
}
?>