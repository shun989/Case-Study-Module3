<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    function index()
    {
        $cart = session('cart');
        return view('products.carts.show-cart', compact('cart'));
    }

    public function addToCart($productId)
    {
        $product = Product::findOrFail($productId);
        $oldCart = session()->get('cart');
        $newCart = new Cart($oldCart);
        $newCart->add($product);
        session()->put('cart', $newCart);

        return redirect()->back();
    }

    public function updateQuantityItem(Request $request, $productId)
    {
        $product = Product::findOrFail($productId);
        $oldCart = session()->get('cart');
        $newCart = new Cart($oldCart);
        $newCart->updateQuantity($product, $request->newQuantity);
        session()->put('cart', $newCart);

        $data = [
            'status' => 'success',
            'message' => 'update success',
            'cart' => session('cart')
        ];
        return response()->json($data);
    }

//    public function deleteCart(Request $request)
//    {
//        if ($request->id) {
//            $carts = session()->get('cart');
//            unset($carts[$request->id]);
//            session()->put('cart',$carts);
//            $carts = session()->get('cart');
//            $cartComponent = view('products.carts.list',compact('carts'))->render();
//            return response()->json(['list'=>$cartComponent,'code'=>200],200);
//        }
//    }

    public function deleteCartItem(Request $request, $id)
    {
        $oldCart = session('cart') ? session('cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->deleteCartItem($id);

        if (count($newCart->items) > 0) {
            $request->session()->put('cart', $newCart);
        }else {
            $request->session()->forget('cart');
        }
        return view('carts.list',compact('newCart'));
    }

}
