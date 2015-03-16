<?php


use Illuminate\Database\Seeder;
use App\Sharp\User\User;

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(["login" => "admin", "email"=>"admin@test.com", "password" => Hash::make('admin'), "is_sharp_user"=>true]);
        User::create(["login" => "bob", "email"=>"bob@test.com", "password" => Hash::make('bob'), "is_sharp_user"=>true]);
    }

} 