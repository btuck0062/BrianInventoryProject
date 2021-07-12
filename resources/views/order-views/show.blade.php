<x-app-layout>
    <!-- component -->
    <div class="bg-white rounded leading-loose max-w-3xl mx-4 gap-4 mx-auto my-auto p-8 rounded-xl shadow-xl">
   <ul>
        <li><strong>Order ID:</strong> {{$order->id}}</li>
        <li><strong>Product Id:</strong> {{$order->product_id}}</li>
       <li><strong>Product Name:</strong> {{$order->product->name}}</li>
       <li><strong>Order Quantity:</strong> {{$order->quantity}}</li>
       <li><strong>Order Date:</strong> {{\Carbon\Carbon::parse($order->create_at)->format('m-d-Y')}}</li>
   </ul>
    </div>
</x-app-layout>
