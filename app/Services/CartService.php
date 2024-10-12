<?php

namespace App\Services;

use App\Models\Product;
use App\Models\Cart;

class CartService
{
    public static function getItemsInCart($items)
    {
        $products = [];

        foreach($items as $item)
        {
            $p = Product::findOrFail($item->product_id);
                $owner = $p->shop->owner->select('name', 'email')->first()->toArray();//オーナー情報
                $values = array_values($owner); //連想配列の値を取得
                $keys = ['ownerName', 'email'];
                $ownerInfo = array_combine($keys, $values); // オーナー情報のキーを変更
        // foreach($items as $item){
        //     $p = Product::findOrFail($item->product_id);
        //     // $p->shop->owner の時点で返り値が Ownerモデルになり、
        //    //firstでつなげると毎回 id=1のOwnerが取得されていたので修正しています。
        //     $owner = $p->shop->owner; // ownerまで
        //     $ownerInfo = [
        //     'ownerName' => $owner->name,
        //     'email' -> $owner->email
        //    ];

                $product = Product::where('id', $item->product_id)
                ->select('id', 'name', 'price')->get()->toArray(); // 商品情報の配列

                $quantity = Cart::where('product_id', $item->product_id)
                ->select('quantity')->get()->toArray(); // 在庫数の配列

                $result = array_merge($product[0], $ownerInfo, $quantity[0]); // 配列の結合
                array_push($products, $result); //配列に追加
        }
        
        return $products;
    }
}