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
    public function run(): void
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'AMD Ryzen™ 7 5700X',
                'price' => '11499',
                'description' => 'A fast and easy way to expand and accelerate the storage in a desktop PC with an AMD Ryzen™ processor.',
                'category' => 'Processor',
                'gallery' => 'https://cf.shopee.ph/file/sg-11134201-22100-dio3paweufiv4d',
            ],
            [
                'name' => 'Asus Tuf Gaming B550M-Plus',
                'price' => '10399',
                'description' => 'AMD B550 (Ryzen AM4) micro ATX gaming motherboard with PCIe 4.0, dual M.2, 10 DrMOS power stages, 2.5 Gb Ethernet, HDMI, DisplayPort, SATA 6 Gbps, USB 3.2 Gen 2 Type-A and Type-C, and Aura Sync RGB lighting support',
                'category' => 'MotherBoard',
                'gallery' => 'https://ph-live-01.slatic.net/p/bca7cf1a325627d4c43600d3ea5dc270.jpg',
            ],
            [
                'name' => 'KINGSTON FURY BEAST RGB 16GB 2X8GB',
                'price' => '3099',
                'description' => 'Kingston FURY™ Beast DDR4 RGB1 delivers a boost of performance and style with speeds of up to 3733MT/s*, aggressive styling, and RGB lighting that runs the length of the module for smooth and stunning effects.',
                'category' => 'RAM',
                'gallery' => 'https://bermorzone.com.ph/wp-content/uploads/2022/09/KF552C40BBAK2-RGB-Philippines.webp',
            ],
            [
                'name' => 'ASUS ROG Loki SFX-L 750W Platinum',
                'price' => '10799',
                'description' => 'Fully Modular Power Supply, 80+ Platinum, Lambda A Certified, 120mm PWM ARGB Fan, Aura Sync, ATX 3.0 Compatible, PCIe 5.0 Ready, 10 Year Warranty',
                'category' => 'PSU',
                'gallery' => 'https://gameone.ph/media/catalog/product/cache/7a2235b416a1900151232a782f707140/r/o/rog_loki_sfx-l_750w_platinum-9.jpg',
            ],
            [
                'name' => 'ASUS ROG Strix Helios GX601',
                'price' => '15399',
                'description' => 'RGB Mid-Tower Tempered Glass, Aluminum Frame PC Case',
                'category' => 'Case',
                'gallery' => 'https://down-ph.img.susercontent.com/file/a605051cb75ac973201f5912f88f9ab5',
            ],

            [
                'name' => 'AMD Ryzen 5 5600 4.4GHz 6 Core',
                'price' => '7995',
                'description' => 'Dominate your favorite games with the AMD Ryzen™ 5 5600. Featuring 6 cores, 12 threads, boost clocks of up to 4.4GHz2 and 35MB of total cache, upgrade to the award-winning performance of “Zen 3.”1',
                'category' => 'Processor',
                'gallery' => 'https://dynaquestpc.com/cdn/shop/products/AMDRYZEN556004.4GHZ6COREPROCESSOR_grande.jpg?v=1650855603',
            ],

            [
                'name' => 'Razer Viper 8',
                'price' => '2250',
                'description' => 'Razer Viper 8 KHZ Ambidextrous Esports Gaming Mouse',
                'category' => 'Mouse',
                'gallery' => 'https://down-ph.img.susercontent.com/file/34913313809bf17ca0c358ab780038ad',
            ],
            
            [
                'name' => 'RAZER Huntsman Mini 60%',
                'price' => '6995',
                'description' => 'Optical Gaming Keyboard Linear Red Switch',
                'category' => 'Mouse',
                'gallery' => 'https://tejarra-media.s3.amazonaws.com/7464/item_XXL_132167109_5339a9666c073.jpg',
            ],






        ]);
    }
}
