<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(User::class)->times(1)->make();
        User::insert($users->toArray());
        
        $user = User::find(1);
        $user->name = 'admin';
        $user->email = 'admin@admin.com';
        $user->is_admin = true;
        $user->password = bcrypt('123456');
        $user->save();
    }
}
