<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(10)->create();

        $user = User::find(1);
        $user->name = "ELLa123";
        $user->email = "313097973@qq.com";
        $user->save();

        $user = User::find(2);
        $user->name = "System";
        $user->email = "553792575@qq.com";
        $user->save();

        $user = User::find(3);
        $user->name = "Summer";
        $user->email = "Summer@example.com";
        $user->save();
    }
}
