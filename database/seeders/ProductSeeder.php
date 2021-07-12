<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->name = 'Amazon Fire TV Stick with Alexa Voice Remote';
        $product->save();

        $product = new Product();
        $product->name = 'SMART RG';
        $product->save();

        $product = new Product();
        $product->name = 'Cyber Power 12V,24W,7.2AMP HR BATTERYe';
        $product->save();

        $product = new Product();
        $product->name = 'A140 Set Top Boxes';
        $product->save();

        $product = new Product();
        $product->name = '5050 LIVE IPTV/OTT STB, W/1TB DVR, CE5310';
        $product->save();

        $product = new Product();
        $product->name = 'Prosafe Plus 8 Port';
        $product->save();

        $product = new Product();
        $product->name = 'TA401 1GE MICRO ONT';
        $product->save();

        $product = new Product();
        $product->name = 'REMOTE CONTROL, WILLOW MODEL';
        $product->save();

        $product = new Product();
        $product->name = 'NETGEAR AC1200 WiFi USB Adapter – 802.11AC Dual-Band Gagabit';
        $product->save();

        $product = new Product();
        $product->name = 'SuperPod Tri-Band Whole Home Wifi System';
        $product->save();

        $product = new Product();
        $product->name = '452 FTTH Single Family Unit Outdoor ONT';
        $product->save();

        $product = new Product();
        $product->name = 'Amazon Fire TV Stick with Alexa Voice Remote';
        $product->save();

    }
}
