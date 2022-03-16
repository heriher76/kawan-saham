<?php
  
use Illuminate\Database\Seeder;
use App\User;
   
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'admin@kawansaham.com',
                'is_admin'=>'1',
                'is_premium'=>'0',
               'password'=> bcrypt('password'),
            ],
            [
               'name'=>'User',
               'email'=>'user@kawansaham.com',
                'is_admin'=>'0',
                'is_premium'=>'0',
               'password'=> bcrypt('password'),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}