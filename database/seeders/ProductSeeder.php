<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>"mobile",
                'price'=>"5000",
                'description'=>"2 GB RAM | 32 GB ROM | Expandable Upto 512 GB
                16.56 cm (6.52 inch) HD+ Display
                8MP Dual Camera | 5MP Front Camera
                5000 mAh Lithium Polymer Battery
                Mediatek Helio A22 Processor, Upto 2.0 GHz Processor"                 
            ],
            [
                'name'=>"Refrigerator",
                'price'=>"6000",
                'description'=>"Good for couples and small families
                Linear Compressor
                 3Star : For Energy savings up to 20%
                Direct Cool : Economical, consumes less electricity, 
                requires manual defrosting"                
            ],
            [
                'name'=>"AC",
                'price'=>"7000",
                'description'=>" Enjoy pleasant and cool weather even during extreme summer with the Blue Star Split Inverter AC. 
                With pre-set mode this air conditioner is carefully designed to provide delightful temperature intuitively throughout the day. 
                The energy-efficient build of this AC not only delivers an incredible performance but also cuts down on the high power consumption. 
                Furthermore, the Anti Corrosive Blue Fins adapted by this AC, 
                ensures the durability of this appliance by acting against corrosion. 
                Additionally, this AC is crafted with copper tubes that ensures cool breeze and its superior performance"                
            ],
            [
                'name'=>"TV",
                'price'=>"8000",
                'description'=>"You can enjoy watching famous movies with your family on the ADSUN A-3210S/F 80 cm (32) HD-ready Smart LED TV.
                 Its resolution of 1366x768p delivers an engrossing viewing experience. 
                 Additionally this TV ensures smooth performance with a refresh rate of up to 60 Hz. 
                 Furthermore this frameless TV lets you see sharp, clear images from any part of the room,
                thanks to its wide viewing angle of up to 178 degrees and an A+ grade panel."                
            ],
            [
                'name'=>"Washing Machine",
                'price'=>"9000",
                'description'=>"Featuring a Pro Smart inverter motor, 
                the  Washing Machine provides enhanced cleaning while consuming less power."                
            ],
        ]);
    }
}
