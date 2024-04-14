<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        User::create([
        
            'name' => 'Raju Kumar',
            'phone_number' => '1234554321',
            'photo' => null,
            'membership' => 'gold',
        ]);
        User::create([
            
            'name' => 'Akshay yadav',
            'phone_number' => '1234554321',
            'photo' => null,
            'coin_balance' => 8900,
            'membership' => 'gold',
        ]);
        User::create([
          
            'name' => 'Sani',
            'phone_number' => '1234554321',
            'photo' => null,
            'coin_balance' => 8900,
            'membership' => 'gold',
        ]);
        User::create([
           
            'name' => 'Pappu',
            'phone_number' => '1234554321',
            'photo' => null,
            'coin_balance' => 8900,
            'membership' => 'gold',
        ]);
        // $user = User::create([
        //     'name' => 'Akshay Kumar',
        //     'phone_number' => '1234554321',
        //     'photo' => null,
        //     'coin_balance' => 8900,
        //     'membership' => 'gold',

        //     'name' => 'Tiger',
        //     'phone_number' => '0987654321',
        //     'photo' => null,
        //     'coin_balance' => 8808,
        //     'membership' => 'silver',

        //     'name' => 'Govinda',
        //     'phone_number' => '0987656789',
        //     'photo' => null,
        //     'coin_balance' => 8848,
        //     'membership' => 'bronze',

        //     'name' => 'Tiger',
        //     'phone_number' => '0987654321',
        //     'photo' => null,
        //     'coin_balance' => 8808,
        //     'membership' => 'silver',
        // ]);
       
        
      

    }
}
