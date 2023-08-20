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
                'price' => '11,499',
                'description' => 'A fast and easy way to expand and accelerate the storage in a desktop PC with an AMD Ryzen™ processor.',
                'category' => 'Processor',
                'gallery' => 'https://cf.shopee.ph/file/sg-11134201-22100-dio3paweufiv4d',
            ],
            [
                'name' => 'Asus Tuf Gaming B550M-Plus',
                'price' => '10,399',
                'description' => 'AMD B550 (Ryzen AM4) micro ATX gaming motherboard with PCIe 4.0, dual M.2, 10 DrMOS power stages, 2.5 Gb Ethernet, HDMI, DisplayPort, SATA 6 Gbps, USB 3.2 Gen 2 Type-A and Type-C, and Aura Sync RGB lighting support',
                'category' => 'MotherBoard',
                'gallery' => 'https://www.makotekcomputers.com/cdn/shop/products/ASUS-TUF-GAMING-B550M-PLUS-WI-FI-II-AM4-MOTHERBOARD_530x@2x.jpg?v=1657238393',
            ],
            [
                'name' => 'KINGSTON FURY BEAST RGB 16GB 2X8GB',
                'price' => '3,099',
                'description' => 'Kingston FURY™ Beast DDR4 RGB1 delivers a boost of performance and style with speeds of up to 3733MT/s*, aggressive styling, and RGB lighting that runs the length of the module for smooth and stunning effects.',
                'category' => 'RAM',
                'gallery' => 'https://bermorzone.com.ph/wp-content/uploads/2022/09/KF552C40BBAK2-RGB-Philippines.webp',
            ],
            [
                'name' => 'ASUS ROG Loki SFX-L 750W Platinum',
                'price' => '10,799',
                'description' => 'Fully Modular Power Supply, 80+ Platinum, Lambda A Certified, 120mm PWM ARGB Fan, Aura Sync, ATX 3.0 Compatible, PCIe 5.0 Ready, 10 Year Warranty',
                'category' => 'PSU',
                'gallery' => 'https://gameone.ph/media/catalog/product/cache/7a2235b416a1900151232a782f707140/r/o/rog_loki_sfx-l_750w_platinum-9.jpg',
            ],
            [
                'name' => 'ASUS ROG Strix Helios GX601',
                'price' => '15,399',
                'description' => 'RGB Mid-Tower Tempered Glass, Aluminum Frame PC Case',
                'category' => 'Case',
                'gallery' => 'https://down-ph.img.susercontent.com/file/a605051cb75ac973201f5912f88f9ab5',
            ],
        ]);
    }
}
