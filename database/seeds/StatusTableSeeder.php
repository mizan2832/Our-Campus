<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $status = new \App\Status([
           
           'status' => 'Donate Blood'

       	]);

       $status->save();

         $status = new \App\Status([
           
           'status' => 'If Urgent,I Can Donate'

       	]);
       $status->save();

         $status = new \App\Status([
           
           'status' => 'Not Interested Yet, Donate In Future'

       	]);
       $status->save();
    }
}
