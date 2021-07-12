<x-app-layout>
<!-- component -->
<div class="leading-loose max-w-4xl">
  <form class="mx-auto m-4 p-10 bg-white rounded shadow-xl">
    <p class="text-gray-800 font-medium">Order information</p>
    <div class="">
      <label class="block text-sm text-gray-00" for="">Select Product Decsription</label>
      <!-- Select product -->
        <select name="" id="" class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded">
            <option value="1">Amazon Fire TV Stick with Alexa Voice Remote</option>
            <option value="2">SMART RG</option>
            <option value="3">Cyber Power 12V,24W,7.2AMP HR BATTERY</option>
            <option value="4">A140 Set Top Boxes</option>
            <option value="4">5050 LIVE IPTV/OTT STB, W/1TB DVR, CE5310</option>
            <option value="4">Prosafe Plus 8 Port</option>
            <option value="4">TA401 1GE MICRO ONT</option>
            <option value="4">REMOTE CONTROL, WILLOW MODEL</option>
            <option value="4">NETGEAR AC1200 WiFi USB Adapter – 802.11AC Dual-Band Gagabit</option>
            <option value="4">SuperPod Tri-Band Whole Home Wifi System</option>
            <option value="4">452 FTTH Single Family Unit Outdoor ONT</option>
        </select>
    </div>
    <div class="inline-block mt-5 -mx-1 pl-1 w-1/2">
      <label class="block text-sm text-gray-600" for="cus_email">Quantity</label>
      <input class="w-1/2 px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email"  name="cus_email" type="text" required="" placeholder="Quantity" aria-label="Email">
    </div>
    <div class="mt-4">
      <button class="px-3 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Sumbit</button>
    </div>
  </form>
</div>
</x-app-layout>