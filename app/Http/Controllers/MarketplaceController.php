<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MarketplaceController extends Controller
{
    public function index()
    {
        $featuredProducts = Product::active()
            ->featured()
            ->inStock()
            ->take(4)
            ->get();

        $products = Product::active()
            ->inStock()
            ->latest()
            ->paginate(12);

        return view('marketplace.index', compact('featuredProducts', 'products'));
    }

    public function show(Product $product)
    {
        if ($product->status !== 'active') {
            abort(404);
        }

        $relatedProducts = Product::active()
            ->inStock()
            ->where('id', '!=', $product->id)
            ->inRandomOrder()
            ->take(4)
            ->get();

        return view('marketplace.show', compact('product', 'relatedProducts'));
    }

    public function purchase(Request $request, Product $product)
    {
        $validator = Validator::make($request->all(), [
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email|max:255',
            'customer_phone' => 'required|string|max:20',
            'customer_address' => 'required|string',
            'quantity' => 'required|integer|min:1|max:' . $product->stock,
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $quantity = $request->quantity;
        $totalAmount = $product->price * $quantity;

        // Create order
        $order = Order::create([
            'customer_name' => $request->customer_name,
            'customer_email' => $request->customer_email,
            'customer_phone' => $request->customer_phone,
            'customer_address' => $request->customer_address,
            'total_amount' => $totalAmount,
            'status' => 'pending',
        ]);

        // Create order item
        OrderItem::create([
            'order_id' => $order->id,
            'product_id' => $product->id,
            'quantity' => $quantity,
            'price' => $product->price,
        ]);

        // Redirect to payment
        return redirect()->route('payment.process', $order);
    }
}
