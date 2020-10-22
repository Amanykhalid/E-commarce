<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Iphone',
                'price'=>'255',
                'category'=>'mobile',
                'gallery'=>'https://images.unsplash.com/photo-1509741102003-ca64bfe5f069?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80',
                'descraption'=>'Hello To new mobile',
            ],
            [
                'name'=>'sammsong',
                'price'=>'3000',
                'category'=>'mobile',
                'gallery'=>'https://images.unsplash.com/photo-1551721434-8b94ddff0e6d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=401&q=80',
                'descraption'=>'Hello To new sammsong', 
            ],
            [
                'name'=>'hawawi',
                'price'=>'400',
                'category'=>'mobile',
                'gallery'=>'https://images.unsplash.com/photo-1545493399-220e3a4f5061?ixlib=rb-1.2.1&auto=format&fit=crop& w=400&q=80',
                'descraption'=>'Hello To new hawawi',
            ]
        ]
    );
    }
}
