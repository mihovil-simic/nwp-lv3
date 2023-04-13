<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'jane.doe@example.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Bob Smith',
                'email' => 'bob.smith@example.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Alice Brown',
                'email' => 'alice.brown@example.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Mike Johnson',
                'email' => 'mike.johnson@example.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Sarah Williams',
                'email' => 'sarah.williams@example.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'David Lee',
                'email' => 'david.lee@example.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Emily Chen',
                'email' => 'emily.chen@example.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Tom Wilson',
                'email' => 'tom.wilson@example.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Olivia Garcia',
                'email' => 'olivia.garcia@example.com',
                'password' => bcrypt('password'),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}