<?php

use Illuminate\Database\Seeder;

class VehicleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $product=new App\Vehical([
        'vahical_name_with_year'=>'Honda FZ 2015',
        'imagepath1'=>"{{asset('images/image1.jpg'}}",
        'imagepath2'=>"{{asset('images/image1.jpg'}}",
            'imagepath3'=>"{{asset('images/image1.jpg'}}",
            'imagepath4'=>"{{asset('images/image1.jpg'}}",
            'imagepath5'=>"{{asset('images/image1.jpg'}}",
            'brand'=>"{{asset('images/image1.jpg'}}",
            'model_year'=>'2012',
            'condition'=>'Used',
            'transmission'=>'Manual',
            'model'=>'Honda FZ',
            'body_type'=>'Saloon',
            'fuel_type'=>'Petrol',
            'engine_capacity'=>'125cc',
            'mileage'=>'9,000 km',
            'price'=>'200000',
            'contact'=>'0712500892',
            'address'=>''

        ]);
    }
}
