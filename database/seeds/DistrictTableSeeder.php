<?php

use Illuminate\Database\Seeder;

class DistrictTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $district = new \App\District([
           
           'district' => 'Tangail'

       	]);
       $district->save();

        $district = new \App\District([
           
           'district' => 'Dhaka'

       	]);
       $district->save(); 
       $district = new \App\District([
           
           'district' => 'Dinajpur'

       	]);
       $district->save(); 

       $district = new \App\District([
           
           'district' => 'Rajshahi'

       	]);
       $district->save();
        $district = new \App\District([
           
           'district' => 'Khulna'

       	]);
       $district->save();
        $district = new \App\District([
           
           'district' => 'Barisal'

       	]);
       $district->save(); 

       $district = new \App\District([
           
           'district' => 'Norshingdi'

       	]);
       $district->save();
        $district = new \App\District([
           
           'district' => 'Vola'

       	]);
       $district->save();
        $district = new \App\District([
           
           'district' => 'Nator'

       	]);
       $district->save();
       
       
       

    }
}
