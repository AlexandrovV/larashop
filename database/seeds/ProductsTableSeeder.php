<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //laptops products
        $product = new Product();
        $product->brand = "Apple";
        $product->name = "MacBook Air A1932";
        $product->description = "Compatible with Apple Macbook Air 13 Inch with Retina Display 2018 Release Only. Not compatible with other MacBook model.";
        $product->category_id = 1;
        $product->price = 648500;
        $product->purchased = 75;
        $product->image_name = "macbook.jpg";
        $product->save();

        $product = new Product();
        $product->brand = "Dell";
        $product->name = "Inspiron 7000";
        $product->description = "13.3\" FHD Touchscreen Laptop Computer, AMD Ryzen 7 2700U up to 3.8GHz, 12GB DDR4, 512GB SSD, 802.11ac WiFi, Bluetooth 4.1, Type-C 3.1, HDMI, Backlit Keyboard, Windows 10";
        $product->category_id = 1;
        $product->price = 293500;
        $product->purchased = 25;
        $product->image_name = "dell_inspiron.jpg";
        $product->save();

        $product = new Product();
        $product->brand = "MSI";
        $product->name = "GP63 Leopard-428";
        $product->description = "15.6\" 120 Hz FHD GTX 1070 8 GB VRAM i7-8750H 16GB RAM 128GB SSD 1TB HDD Windows 10 Home";
        $product->category_id = 1;
        $product->price = 549999;
        $product->purchased = 30;
        $product->image_name = "msi_leopard.jpg";
        $product->save();

        //headphones products
        $product = new Product();
        $product->brand = "Apple";
        $product->name = "AirPods";
        $product->description = "White";
        $product->category_id = 2;
        $product->price = 76799;
        $product->purchased = 50;
        $product->image_name = "airpods.png";
        $product->save();

        $product = new Product();
        $product->brand = "BeatsX";
        $product->name = "Earphones";
        $product->description = "Satin Silver";
        $product->category_id = 2;
        $product->price = 37200;
        $product->purchased = 60;
        $product->image_name = "beatsx.jpg";
        $product->save();

        $product = new Product();
        $product->brand = "Bose";
        $product->name = "SoundLink";
        $product->description = "Around-ear wireless headphones II Black";
        $product->category_id = 2;
        $product->price = 85000;
        $product->purchased = 30;
        $product->image_name = "bose_soundlink.jpg";
        $product->save();

        $product = new Product();
        $product->brand = "Xiaomi";
        $product->name = "Mi Piston Pro";
        $product->description = "In-Ear Headphones Pro Dynamic + Balanced Armature Hybrid Drivers with Remote and Mic, Silver";
        $product->category_id = 2;
        $product->price = 8200;
        $product->purchased = 40;
        $product->image_name = "xiaomi_headphones.jpg";
        $product->save();

        //smartphones products
        $product = new Product();
        $product->brand = "Apple";
        $product->name = "iPhone XS";
        $product->description = "Gold, 64GB, 5.8-inch Super Retina display (OLED) with HDR";
        $product->category_id = 3;
        $product->price = 395000;
        $product->purchased = 45;
        $product->image_name = "iphone_xs.jpg";
        $product->save();

        $product = new Product();
        $product->brand = "Xiaomi";
        $product->name = "MI Mix 3";
        $product->description = "(128GB, 6GB) 6.39\" Display, Dual SIM 4G LTE GSM Unlocked Multi-Functional Magnetic Slider Smartphone w/Wireless Charging Pad (Black)";
        $product->category_id = 3;
        $product->price = 200000;
        $product->purchased = 65;
        $product->image_name = "xiaomi_mi_mix3.jpg";
        $product->save();

        $product = new Product();
        $product->brand = "Samsung";
        $product->name = "Galaxy S9+";
        $product->description = "Dual SIM Smartphone - Midnight Black - GSM Only - International Version";
        $product->category_id = 3;
        $product->price = 278500;
        $product->purchased = 50;
        $product->image_name = "samsung_galaxy_s9.jpg";
        $product->save();
    }
}
