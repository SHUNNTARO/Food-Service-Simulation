<?php
namespace FoodOrder;

use Restaurants\Restaurant;

class FoodOrder {
    protected array $item;
    protected string $orderTime;

    public function __construct(array $item, string $orderTime){
        $this->item = $item;
        $this->orderTime = $orderTime;
    }
}
?>