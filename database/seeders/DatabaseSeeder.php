<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\ClientData;
use App\Models\User;
use App\Models\UserData;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(20)
            ->has(UserData::factory(1), 'data')
            ->create();
        Client::factory(20)
            ->has(ClientData::factory(1), 'data')
            ->create();
    }
}
