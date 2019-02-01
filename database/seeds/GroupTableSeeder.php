<?php

use Illuminate\Database\Seeder;


class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $group = new \App\Group([
           
           'group' => 'A+ (A positive)'

       	]);
       $group->save();
        $group = new \App\Group([
           
           'group' => 'A- (A Negative)'

       	]);
       $group->save();
        $group = new \App\Group([
           
           'group' => 'B+ (B positive)'

       	]);
       $group->save();
        $group = new \App\Group([
           
           'group' => 'AB+ (AB positive)'

       	]);
       $group->save();
        $group = new \App\Group([
           
           'group' => 'AB- (AB negative)'

       	]);
       $group->save();
        $group = new \App\Group([
           
           'group' => 'O+ (O positive)'

       	]);
       $group->save();
        $group = new \App\Group([
           
           'group' => 'O- (O negative)'

       	]);
       $group->save();
    }
}
