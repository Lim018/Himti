@extends('admin.layouts.app')

@section('title', 'Order Details')

@section('content')
<div class="max-w-6xl mx-auto">
    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Order #{{ $order->order_number }}</h1>
            <p class="text-gray-600">Order details and management</p>
        </div>
        <div class="flex items-center space-x-3">
            <!-- Print Invoice -->
            <button onclick="window.print()" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg font-medium transition-colors">
                <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path>
                </svg>
                Print Invoice
            </button>
            <a href="{{ route('admin.orders.index') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium transition-colors">
                <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Back to Orders
            </a>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Order Information -->
        <div class="lg:col-span-2 space-y-6">
            <!-- Order Status -->
            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-lg font-semibold text-gray-900">Order Status</h2>
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium 
                        {{ $order->status === 'pending' ? 'bg-yellow-100 text-yellow-800' : 
                           ($order->status === 'paid' ? 'bg-green-100 text-green-800' : 
                           ($order->status === 'processing' ? 'bg-blue-100 text-blue-800' : 
                           ($order->status === 'shipped' ? 'bg-purple-100 text-purple-800' : 
                           ($order->status === 'delivered' ? 'bg-indigo-100 text-indigo-800' : 
                           ($order->status === 'cancelled' ? 'bg-red-100 text-red-800' : 'bg-gray-100 text-gray-800'))))) }}">
                        {{ ucfirst($order->status) }}
                    </span>
                </div>
                
                <!-- Status Update Form -->
                <form action="{{ route('admin.orders.update-status', $order) }}" method="POST" class="flex items-center space-x-4">
                    @csrf
                    @method('PATCH')
                    <div class="flex-1">
                        <label for="status" class="block text-sm font-medium text-gray-700 mb-2">Update Status</label>
                        <select name="status" id="status" required
                                class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="pending" {{ $order->status === 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="paid" {{ $order->status === 'paid' ? 'selected' : '' }}>Paid</option>
                            <option value="processing" {{ $order->status === 'processing' ? 'selected' : '' }}>Processing</option>
                            <option value="shipped" {{ $order->status === 'shipped' ? 'selected' : '' }}>Shipped</option>
                            <option value="delivered" {{ $order->status === 'delivered' ? 'selected' : '' }}>Delivered</option>
                            <option value="cancelled" {{ $order->status === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                        </select>
                    </div>
                    <div class="pt-7">
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium transition-colors">
                            Update Status
                        </button>
                    </div>
                </form>
                
                <!-- Order Timeline -->
                <div class="mt-8">
                    <h3 class="text-md font-medium text-gray-900 mb-4">Order Timeline</h3>
                    <div class="flow-root">
                        <ul class="-mb-8">
                            <li>
                                <div class="relative pb-8">
                                    <div class="relative flex space-x-3">
                                        <div>
                                            <span class="h-8 w-8 rounded-full bg-blue-500 flex items-center justify-center ring-8 ring-white">
                                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                            <div>
                                                <p class="text-sm text-gray-500">Order created</p>
                                            </div>
                                            <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                                {{ $order->created_at->format('M d, Y g:i A') }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            
                            @if($order->paid_at)
                            <li>
                                <div class="relative pb-8">
                                    <div class="relative flex space-x-3">
                                        <div>
                                            <span class="h-8 w-8 rounded-full bg-green-500 flex items-center justify-center ring-8 ring-white">
                                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                            <div>
                                                <p class="text-sm text-gray-500">Payment received</p>
                                            </div>
                                            <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                                {{ $order->paid_at->format('M d, Y g:i A') }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Order Items -->
            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-lg font-semibold text-gray-900 mb-6">Order Items</h2>
                
                <div class="space-y-4">
                    @foreach($order->items as $item)
                    <div class="flex items-center space-x-4 p-4 border border-gray-200 rounded-lg">
                        <div class="flex-shrink-0">
                            <img class="w-16 h-16 rounded-lg object-cover" 
                                 src="{{ $item->product->featured_image ? asset('storage/' . $item->product->featured_image) : '/placeholder.svg?height=64&width=64' }}" 
                                 alt="{{ $item->product->name }}">
                        </div>
                        <div class="flex-1 min-w-0">
                            <h3 class="text-sm font-medium text-gray-900">{{ $item->product->name }}</h3>
                            <p class="text-sm text-gray-500">SKU: {{ $item->product->sku }}</p>
                            <p class="text-sm text-gray-500">Unit Price: Rp {{ number_format($item->price, 0, ',', '.') }}</p>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-medium text-gray-900">Qty: {{ $item->quantity }}</p>
                            <p class="text-sm font-medium text-gray-900">Rp {{ number_format($item->total, 0, ',', '.') }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                <!-- Order Total -->
                <div class="mt-6 pt-6 border-t border-gray-200">
                    <div class="flex justify-between items-center text-lg font-bold text-gray-900">
                        <span>Total Amount</span>
                        <span class="text-green-600">Rp {{ number_format($order->total_amount, 0, ',', '.') }}</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="space-y-6">
            <!-- Customer Information -->
            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-lg font-semibold text-gray-900 mb-6">Customer Information</h2>
                
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Name</label>
                        <p class="mt-1 text-sm text-gray-900">{{ $order->customer_name }}</p>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Email</label>
                        <p class="mt-1 text-sm text-gray-900">
                            <a href="mailto:{{ $order->customer_email }}" class="text-blue-600 hover:text-blue-800">
                                {{ $order->customer_email }}
                            </a>
                        </p>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Phone</label>
                        <p class="mt-1 text-sm text-gray-900">
                            <a href="tel:{{ $order->customer_phone }}" class="text-blue-600 hover:text-blue-800">
                                {{ $order->customer_phone }}
                            </a>
                        </p>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Delivery Address</label>
                        <p class="mt-1 text-sm text-gray-900 whitespace-pre-line">{{ $order->customer_address }}</p>
                    </div>
                </div>
            </div>

            <!-- Payment Information -->
            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-lg font-semibold text-gray-900 mb-6">Payment Information</h2>
                
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Payment Status</label>
                        <p class="mt-1">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $order->isPaid() ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                {{ $order->isPaid() ? 'Paid' : 'Pending' }}
                            </span>
                        </p>
                    </div>
                    
                    @if($order->payment_method)
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Payment Method</label>
                        <p class="mt-1 text-sm text-gray-900">{{ ucfirst(str_replace('_', ' ', $order->payment_method)) }}</p>
                    </div>
                    @endif
                    
                    @if($order->payment_id)
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Payment ID</label>
                        <p class="mt-1 text-sm text-gray-900 font-mono">{{ $order->payment_id }}</p>
                    </div>
                    @endif
                    
                    @if($order->paid_at)
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Paid At</label>
                        <p class="mt-1 text-sm text-gray-900">{{ $order->paid_at->format('F d, Y \a\t g:i A') }}</p>
                    </div>
                    @endif
                </div>
            </div>

            <!-- Order Summary -->
            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-lg font-semibold text-gray-900 mb-6">Order Summary</h2>
                
                <div class="space-y-3">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Order Number</span>
                        <span class="font-medium text-gray-900">#{{ $order->order_number }}</span>
                    </div>
                    
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Order Date</span>
                        <span class="font-medium text-gray-900">{{ $order->created_at->format('M d, Y') }}</span>
                    </div>
                    
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Items Count</span>
                        <span class="font-medium text-gray-900">{{ $order->items->count() }} item(s)</span>
                    </div>
                    
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Total Quantity</span>
                        <span class="font-medium text-gray-900">{{ $order->items->sum('quantity') }} pcs</span>
                    </div>
                    
                    <div class="pt-3 border-t border-gray-200">
                        <div class="flex justify-between">
                            <span class="text-base font-medium text-gray-900">Total Amount</span>
                            <span class="text-base font-bold text-green-600">Rp {{ number_format($order->total_amount, 0, ',', '.') }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-lg font-semibold text-gray-900 mb-6">Quick Actions</h2>
                
                <div class="space-y-3">
                    <a href="mailto:{{ $order->customer_email }}?subject=Order #{{ $order->order_number }}" 
                       class="w-full bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium transition-colors text-center block">
                        <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        Email Customer
                    </a>
                    
                    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $order->customer_phone) }}?text=Hello {{ $order->customer_name }}, regarding your order #{{ $order->order_number }}" 
                       target="_blank"
                       class="w-full bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg font-medium transition-colors text-center block">
                        <svg class="w-5 h-5 inline mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                        </svg>
                        WhatsApp Customer
                    </a>
                    
                    <button onclick="window.print()" class="w-full bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg font-medium transition-colors">
                        <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path>
                        </svg>
                        Print Invoice
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Print Styles -->
<style>
@media print {
    .no-print {
        display: none !important;
    }
    
    body {
        background: white !important;
    }
    
    .shadow {
        box-shadow: none !important;
    }
}
</style>
@endsection
