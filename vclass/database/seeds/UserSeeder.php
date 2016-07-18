<?php

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
        $users = [
            [
                'name'     => 'kevip',
                'email'    => 'kevip@vclass.com',
                'password' => 'kevip'
            ],
            [
                'name'     => 'larry',
                'email'    => 'larry@vclass.com',
                'password' => 'larry'
            ],
            [
                'name'     => 'luis_carepalo',
                'email'    => 'luis_carepalo@vclass.com',
                'password' => 'luis_carepalo'
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
