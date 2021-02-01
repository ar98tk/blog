<?php

use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::Create();

        $adminRole = Role::create(['name' => 'admin', 'display_name' => 'Administrator', 'description' => 'System Administrator', 'allowed_route' => 'admin']);
        $editorRole = Role::create(['name' => 'editor', 'display_name' => 'Supervisor', 'description' => 'System Supervisor', 'allowed_route' => 'admin']);
        $userRole = Role::create(['name' => 'user', 'display_name' => 'User', 'description' => 'Normal User', 'allowed_route' => null]);

        $admin = User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@blog.com',
            'mobile'=>'0123456789',
            'email_verified_at'=> Carbon::now(),
            'password'=> bcrypt('123456@2020'),
            'status' => 1
        ]);
        $admin->attachRole($adminRole);

        /*$editor = User::create([
            'name' => 'Editor',
            'username' => 'editor',
            'email' => 'editor@test.com',
            'mobile'=>'01278634620',
            'email_verified_at'=> Carbon::now(),
            'password'=> bcrypt('123456'),
            'status' => 1
        ]);
        $editor->attachRole($editorRole);

        $user1 = User::create([
            'name' => 'Abdelrahman Tarek',
            'username' => 'abdo',
            'email' => 'abdo@test.com',
            'mobile'=>'01278634624',
            'email_verified_at'=> Carbon::now(),
            'password'=> bcrypt('123456'),
            'status' => 1
        ]);
        $user1->attachRole($userRole);

        $user2 = User::create([
            'name' => 'Mohamed Mahmoud',
            'username' => 'hamada',
            'email' => 'hamada@test.com',
            'mobile'=>'01278634524',
            'email_verified_at'=> Carbon::now(),
            'password'=> bcrypt('123456'),
            'status' => 1
        ]);
        $user2->attachRole($userRole);

        $user3 = User::create([
            'name' => 'Abdelrahman Elnono',
            'username' => 'elnono',
            'email' => 'elnono@test.com',
            'mobile'=>'01278634224',
            'email_verified_at'=> Carbon::now(),
            'password'=> bcrypt('123456'),
            'status' => 1
        ]);
        $user3->attachRole($userRole);

        for ($i=0;$i<10;$i++){
            $user3 = User::create([
                'name' => $faker->name,
                'username' => $faker->userName,
                'email' => $faker->email,
                'mobile'=> '01' . random_int(100000000, 999999999),
                'email_verified_at'=> Carbon::now(),
                'password'=> bcrypt('123456'),
                'status' => 1
            ]);
            $user3->attachRole($userRole);
        }*/
    }
}
