<?php

namespace App;

class Cart
{
	//items is array,with key is "$id"

	//danh sách các sản phẩm(items)-tổng số lượng all sản phẩm(totalQty)-tổng tiền all sp(totalPrice)
	public $items = null;
	public $totalQty = 0;
	public $totalPrice = 0;

	public function __construct($oldCart){
		if($oldCart){
			$this->items = $oldCart->items;
			$this->totalQty = $oldCart->totalQty;
			$this->totalPrice = $oldCart->totalPrice;
		}
	}

	public function add($item, $id){
		// if($item->promotion_price == 0){
		// 	$productInfo = ['qty'=>0, 'price' => $item->unit_price, 'item' => $item];
		// }
		// else{
		// 	$productInfo = ['qty'=>0, 'price' => $item->promotion_price, 'item' => $item];
		// }

		//thông tin của 1 sp trong giỏ hàng(items[productInfo])
		$productInfo = ['qty'=>0, 'price' => 0, 'item' => $item];
		if($this->items){
			if(array_key_exists($id, $this->items)){
				$productInfo = $this->items[$id];
			}
		}
		$productInfo['qty']++;
		if($item->promotion_price == 0){
			$productInfo['price'] = $item->unit_price * $productInfo['qty'];
		}
		else{
			$productInfo['price'] = $item->promotion_price * $productInfo['qty'];
		}
		$this->items[$id] = $productInfo;
		$this->totalQty++;
		//$this->totalPrice += $item->unit_price;
		if($item->promotion_price == 0){
			$this->totalPrice += $item->unit_price;
		}
		else{
			$this->totalPrice += $item->promotion_price;
		}
		
	}
	//xóa 1
	public function reduceByOne($id){
		$this->items[$id]['qty']--;
		$this->items[$id]['price'] -= $this->items[$id]['item']['price'];

		if($this->items[$id]['item']['promotion_price'] == 0){
			$unit_price= $this->items[$id]['item']['unit_price'];
		}
		else{
			$unit_price= $this->items[$id]['item']['promotion_price'];
		}
		$this->items[$id]['price'] -= $unit_price;

		$this->totalQty--;
		$this->totalPrice-=$unit_price;
		// $this->totalPrice -= $this->items[$id]['item']['price'];
		// if($item->promotion_price == 0){
		// 	$this->totalPrice -= $item->unit_price;
		// }
		// else{
		// 	$this->totalPrice -= $item->promotion_price;
		// }
		if($this->items[$id]['qty']<=0){
			unset($this->items[$id]);
		}
		
			
	}
	//xóa nhiều
	public function removeItem($id){
		$this->totalQty -= $this->items[$id]['qty'];
		$this->totalPrice -= $this->items[$id]['price'];
		unset($this->items[$id]);
	}
}
