<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Apple iPhone 15',
            'description' => 'Latest Apple smartphone with A17 chip',
            'price' => 1199.99,
            'image_url' => asset('images/products/AppleiPhone15.jpg'),
        ]);

        Product::create([
            'name' => 'Samsung Galaxy S24',
            'description' => 'Flagship Android phone with high-res camera',
            'price' => 999.99,
            'image_url' => asset('images/products/SamsungGalaxyS24.jpg'),
        ]);

        Product::create([
            'name' => 'Dell XPS 13',
            'description' => 'Ultra-thin laptop with Intel i7 processor',
            'price' => 1299.50,
            'image_url' => asset('images/products/DellXPS13.jpg'),
        ]);

        Product::create([
            'name' => 'Sony WH-1000XM5',
            'description' => 'Noise-cancelling wireless headphones',
            'price' => 399.99,
            'image_url' => asset('images/products/SonyWH-1000XM5.jpg'),
        ]);

        Product::create([
            'name' => 'Google Pixel 8',
            'description' => 'Latest Google smartphone with Tensor G3 chip',
            'price' => 899.99,
            'image_url' => asset('images/products/GooglePixel8.jpg'),
        ]);
    }
}
