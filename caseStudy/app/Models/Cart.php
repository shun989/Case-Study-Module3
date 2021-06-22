<?php

namespace App\Models;



class Cart
{
    public $items = [];
    public $totalPrice = 0;
    public $totalQuantity = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalPrice = $oldCart->totalPrice;
            $this->totalQuantity = $oldCart->totalQuantity;
        }
    }

    public function add($product)
    {
        $storeItem = [
            'product'=> $product,
            'quantity'=> 0,
            'money' => 0,
        ];
        if (array_key_exists($product->id, $this->items)) {
          echo 'alert("sp da co trong gio hang")';
        }else{

            $storeItem['quantity'] += 1;
            $storeItem['money'] += $product->price;

//        $this->totalQuantity++;
//        $this->totalPrice += $product->price;
            $this->items[$product->id] = $storeItem;
        }

    }

    public function delete($product,$id)
    {
        $currentItem = $this->items[$product->id];
        if (array_key_exists($id, $this->items)) {
            unset($currentItem[$id]);
        }
        $this->items = $currentItem;
    }

    public function deleteCartItem($id)
    {
        $this->totalQuantity -= $this->items[$id]['quantity'];
        $this->totalPrice -= $this->items[$id]['price'];
        unset($this->items[$id]);
    }

    public function updateQuantity($product, $newQuantity)
    {
        $currentItemUpdate = $this->items[$product->id];

        $changeQuantity = $newQuantity - $currentItemUpdate['quantity'];
        $newQuantityProduct = $currentItemUpdate['quantity'] + $changeQuantity;
        $currentItemUpdate['price'] = $newQuantityProduct * $product->price;
        $currentItemUpdate['quantity'] = $newQuantityProduct;

        $this->items[$product->id] = $currentItemUpdate;

        $this->totalQuantity += $changeQuantity;
        $this->totalPrice += $changeQuantity * $product->price;
    }

}
