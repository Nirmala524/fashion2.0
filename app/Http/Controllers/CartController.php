<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index(Request $request)
    {

        $customer_id = Session::get('customer_id');
        $input = [
            'user_id' => $customer_id,
            'product_id' => $request->product_id,
            'quantity' => $request->product_quantity
        ];
        if (Cart::create($input)) {
            return response()->json(['message' => 'success', 'status' => 200], 200);
        } else {
            return redirect('customlogin'); 
        }
    }


    public function update(Request $request)
    {
        $customerId = Session::get('customer_id');
        if (!$customerId) {
            return response()->json(['message' => 'Customer not authenticated'], 400);
        }
        $cart = json_decode($request->data);
        foreach ($cart as $item) {
            $cartItem = Cart::where('id', $item->product_id)->where('user_id', $customerId)->first();
            if (!$cartItem) {
                return response()->json(['message' => 'Cart item not found'], 404);
            }
            $cartItem->quantity = $item->quantity;
            $cartItem->save();
        }
        $updatedCart = Cart::where('user_id', $customerId)->get();
        return response()->json([
            'message' => 'Cart updated successfully!',
            'updated_cart' => $updatedCart
        ], 200);
    }


    public function remove($id)
    {
        $cart = Cart::find($id);
        if (isset($cart)) {
            $cart->delete();
            return response()->json(['message' => 'Cart Deleted Successfully!',], 200);
        } else {
            return response()->json(['message' => 'Cart item not found!',], 404);
        }
    }
}
