<x-app-layout>
    <!-- component -->
    <div class="leading-loose max-w-7xl flex items-center mx-4 gap-4 mx-auto">
        <form action="{{ route('createOrder')}}" method="POST" class="mx-auto m-4 p-10 bg-white rounded shadow-xl w-1/2">
            @csrf
            <p class="text-gray-800 font-medium">Order information</p>
            <div class="">
                <label class="block text-sm text-gray-00" for="">Select Product Decsription</label>
                <!-- Select product -->
                <select name="product_id" id="" class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded">

                    <!-- Loop throught products -->
                    <!-- Get Product ID as value & Get the product name as "selectable item" -->
                    <!-- Use foreach loop -->
                    <option value="">Select Product</option>
                    @foreach($products as $product)
                    <option value="{{$product->id}}">{{$product->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="inline-block mt-5 -mx-1 pl-1 w-1/2">
                <label class="block text-sm text-gray-600" for="quantity">Quantity</label>
                <input class="w-1/2 px-2 py-2 text-gray-700 bg-gray-200 rounded" id="quantity" name="quantity"
                    type="text" required="" placeholder="Quantity" aria-label="quantity">
            </div>
            <div class="mt-4">
                <button class="px-3 py-1 text-white font-light tracking-wider bg-gray-900 rounded"
                    type="submit">Sumbit</button>
            </div>
        </form>


        <div class="block w-1/2">
            <table class="mx-auto bg-white shadow-md w-full border text-center table-auto whitespace-nowrap overflow-x-scroll">
                <thead>
                  <th class="border">Order ID</th>
                    <th class="border">Product Name</th>
                    <th class="border">Quantity</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                  @foreach ($orders as $order)
                  <tr>
                    <td class="border">{{$order->id}}</td>
                    <td class="border">{{$order->product->name}}</td>
                    <td class="border">{{$order->quantity}}</td>
                    <td class="bg-green-500 text-white p-1 border-white border-2"><a href="/order/{{$order->id}}">View</a></td>

                  </tr>
                  @endforeach
                
                </tbody>
            </table>
            <div class="w-full my-2">
              {{$orders->links()}}
            </div>

        </div>

    </div>
</x-app-layout>
