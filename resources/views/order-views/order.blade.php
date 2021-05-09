<x-app-layout>
<!-- component -->
<div class="leading-loose max-w-2xl">
  <form class="mx-auto m-4 p-10 bg-white rounded shadow-xl">
    <p class="text-gray-800 font-medium">Order information</p>
    <div class="">
      <label class="block text-sm text-gray-00" for="">Product Serial Number</label>
      <!-- Select product -->
        <select name="" id="" class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded">
            <option value="1">1234</option>
            <option value="2">1234</option>
            <option value="3">1234</option>
            <option value="4">1234</option>
        </select>
    </div>
    <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
      <label class="block text-sm text-gray-600" for="cus_email">Quantity</label>
      <input class="w-1/2 px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email"  name="cus_email" type="text" required="" placeholder="Quantity" aria-label="Email">
    </div>
    <div class="mt-4">
      <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Changed This Button Order</button>
    </div>
  </form>
</div>
</x-app-layout>