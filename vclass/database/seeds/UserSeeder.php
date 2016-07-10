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
                'password' => \Hash::make('kevip')
            ],
            [
                'name'     => 'larry',
                'email'    => 'larry@vclass.com',
                'password' => \Hash::make('larry')
            ],
            [
                'name'     => 'luis_carepalo',
                'email'    => 'luis_carepalo@vclass.com',
                'password' => \Hash::make('luis_carepalo')
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
