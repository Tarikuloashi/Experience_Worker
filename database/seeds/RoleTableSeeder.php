<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  $roles=[
             [
                 'slug' => 'admin',
                 'name' => 'Admin',

             ],

             [
               'slug' => 'engineer',
               'name' => 'Engineer',
             ],

             [
               'slug' => 'user',
               'name' => 'User',
             ],




     ];

     foreach ($roles as $key=>$value){
      Role::create($value);
     }
}

}
