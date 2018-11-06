<?php
/**
 * Created by PhpStorm.
 * User: reza
 * Date: 06/11/18
 * Time: 09.11
 */
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
        // create 10 users using the user factory
        factory(App\User::class, 10)->create();
    }
}