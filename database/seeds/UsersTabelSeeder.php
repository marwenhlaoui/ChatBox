<?php

use Illuminate\Database\Seeder;
use App\Model\User;
class UsersTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* demo */
        $demo = new User();
        $demo->name = "Demo User";
        $demo->email = "demo@user.com";
        $demo->password = bcrypt('demouser');
        $demo->save();

        /* test */
        $test = new User();
        $test->name = "Test User";
        $test->email = "test@user.com";
        $test->password = bcrypt('testuser');
        $test->save();
    }
}
