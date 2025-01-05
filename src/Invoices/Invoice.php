<?php
namespace Invoices;

class Invoice {
    protected float $finalPrice;
    protected string $orderTime;
    protected int $estimatedTimeInMinutes;

    public function __construct(float $finalPrice, string $orderTime, int $estimatedTimeInMinutes){
        $this->finalPrice = $finalPrice;
        $this->orderTime = $orderTime;
        $this->estimatedTimeInMinutes = $estimatedTimeInMinutes;
    }
    
    public function __toString():string{
        return "final price: ".$this->finalPrice.", ordered time: ".$this->orderTime." ,estimatedTimeInMinutes: ".$this->estimatedTimeInMinutes;
    }
 

}

?>