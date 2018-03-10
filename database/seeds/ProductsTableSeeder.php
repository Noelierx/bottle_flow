<?php

use App\Product;
use App\ProductType;
use App\MessageModifier;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MessageModifier::create([
            'field' => 'background-color',
            'value' => 'black'
        ]);

        MessageModifier::create([
            'field' => 'background-color',
            'value' => 'white'
        ]);

        MessageModifier::create([
            'field' => 'background-color',
            'value' => 'blue'
        ]);

        MessageModifier::create([
            'field' => 'color',
            'value' => 'black'
        ]);

        MessageModifier::create([
            'field' => 'background-color',
            'value' => 'white'
        ]);

        MessageModifier::create([
            'field' => 'background-color',
            'value' => 'blue'
        ]);

        foreach (range(1, 5) as $index) {
            $product = new Product([
                'reference' => str_random(8),
                'title' => str_random(15),
                'description' => str_random(280),
                'price' => random_int(1, 100),
            ]);

            $product->type()->associate(ProductType::create([
                'type' => str_random()
            ]));

            $product->save();

            $product->modifiers()->attach(MessageModifier::find($index));

            $product->save();
        }
    }
}
