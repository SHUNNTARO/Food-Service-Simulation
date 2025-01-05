<?php
namespace Persons\Customers;
use Persons\Person;
use Restaurants\Restaurant;
use Invoices\Invoice;


class Customer extends Person {
    protected string $name;
    protected int $age;
    protected string $address;
    protected array $favoriteFoods; 

    public function __construct(string $name, int $age, string $address, array $favoriteFoods){
        $this->favoriteFoods = $favoriteFoods;

        parent:: __construct($name, $age, $address);
    }


    /*
    客があらかじめ食べたい料理のカテゴリーがお店のメニュにあるのかをチェック
    メニューにある料理と個数を配列として返す
    */
    public function availableForOrder(Restaurant $restaurant, array $foodCategories): array{
        $res = [];
        foreach($foodCategories as $item => $number){
            if(array_key_exists($item, $restaurant->getMenu())) {
                $res[$item] = $number;
            }
        }
        return $res;
    }

    public function order(Restaurant $restaurant): Invoice{
        $finalPrice = 0;
        $availableItems = $this->availableForOrder($restaurant, $this->favoriteFoods);

        foreach($availableItems as $availableItem => $number) {
            $menu = $restaurant->getMenu();
            $finalPrice += $menu[$availableItem] * $number;
        }
        return new Invoice($finalPrice, date("D M d, Y G:i"), random_int(1, 100));
    } 
}
?>