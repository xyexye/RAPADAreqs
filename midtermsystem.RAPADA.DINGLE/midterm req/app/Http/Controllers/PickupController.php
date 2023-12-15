<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Order; // Import the Order model
use App\Models\OrderItem; // Import the OrderItem model
use DB;

class PickupController extends Controller
{
    public function pickup()
    {
        $user = auth()->user();
        
        // Check if the user has items in their cart.
        $cart = Cart::where('user_id', $user->id)->where('order_id', null)->get();

        if ($cart->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty.');
        }

        // Create a new order record in your database.
        $order = new Order();
        $order->user_id = $user->id;
        $order->order_number = $this->generateUniqueOrderNumber(); // Call the method to generate a unique order number.
        $order->payment_method = 'pickup'; // Set the payment method.
        $order->payment_status = 'Unpaid'; // Set the payment status.
        $order->status = 'new'; // Set the initial order status.
        $order->save();

        // Process and store order items.
        foreach ($cart as $item) {
            $product = Product::find($item->product_id);

            if ($product) {
                $orderItem = new OrderItem();
                $orderItem->order_id = $order->id;
                $orderItem->product_id = $product->id;
                $orderItem->price = $item->price;
                $orderItem->quantity = $item->quantity;
                $orderItem->save();
            }
        }

        // Clear the user's cart.
        $cart->update(['order_id' => $order->id]);

        // Redirect to a pickup confirmation or thank you page.
        return view('pickup.confirmation', ['order' => $order]);
    }

    // Implement a method to generate a unique order number.
    private function generateUniqueOrderNumber() {
        // Your logic to generate a unique order number.
        // You can use Str::random() or any other method that suits your needs.
        return 'ORD-' . strtoupper(Str::random(10));
    }
}
