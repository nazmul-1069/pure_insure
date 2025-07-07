<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Products;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $product_id = $request->product_id;
        $quantity = $request->quantity;
        $id = Crypt::decrypt($product_id);
        $product = Products::where('id',$id)->first();

        if($product->stock >= $quantity)
        {
            $total = Cart::count();
            if($total > 0)
            {

                $cart_items = Cart::content();
                $productAlredyExist = false;

                foreach($cart_items as $key => $item)
                {
                    if($item->id == $id)
                    {
                        $productAlredyExist = true;
                    }

                }

                if($productAlredyExist == false)
                {
                    // if($product->stock <= $quantity)
                    // {
                        Cart::add($id,$product->product_name,$quantity,$product->price);
                        $status = true;
                        $message = $product->product_name.' added in cart';
                    //}
                    //else
                    //{
                      //  $status = false;
                      //  $message = 'Product quantity is not available';
                    //}
                }
                else
                {
                    $status = false;
                    $message = $product->product_name.' already added in cart';
                }
            }
            else
            {
                //if($product->stock <= $quantity)
               // {
                    Cart::add($id,$product->product_name,$quantity,$product->price);
                    $status = true;
                    $message = $product->product_name.' added in cart';
                //}
                // else
                // {
                //     $status = false;
                //     $message = 'Product quantity is not available';
                // }
            }
        }
        else
        {
            $status = 2;
            $message = 'Product quantity is not available';
        }

        $cart_items = Cart::content();
        $total_item = count($cart_items);


        return response()->json([
            'status' => $status,
            'message' => $message,
            'total_item' => $total_item
        ]);

    }
    public function index()
    {
        $cart_items = Cart::content();
        //dd($cart_items);
        return view('front.cart',compact('cart_items'));
    }

    public function updateCart(Request $request)
    {
        $rowId = $request->rowid;
        $qty = $request->qty;


        Cart::update($rowId, $qty);

        $subTotal = Cart::subtotal();

        $message = 'Quantity Updated Successfully.';
        return response()->json([
            'status' => true,
            'sub_total' => $subTotal,
            'message' => $message
        ]);

    }

    public function itemRemove(Request $request)
    {
        $itemInfo = Cart::get($request->rowid);
        if($itemInfo == null)
        {
            $message = "Item not found in cart.";
            return response()->json([
                'status' => false,
                'message' => $message
            ]);
        }
        else
        {
            Cart::remove($request->rowid);
            $subTotal = Cart::subtotal();
            $message = "Item remove from cart successfully.";
            return response()->json([
                'status' => true,
                'sub_total' => $subTotal,
                'message' => $message
            ]);
        }
        //dd($request->rowid);
    }


}
