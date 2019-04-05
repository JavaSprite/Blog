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
        $users = factory(User::class)->times(50)->make();
        User::insert($users->makeVisible(['password', 'remember_token'])->toArray());

        $user = User::find(1);
        $user->name = '郑志强';
        $user->email = '779362963@qq.com';
        $user->password = bcrypt('20190222F&Q');
        $user->is_admin = true;
        $user->save();

        $user = User::find(2);
        $user->name = '邹方圆';
        $user->email = '1436925891@qq.com';
        $user->password = bcrypt('20190222F&Q');
        $user->is_admin = true;
        $user->save();
    }
}
