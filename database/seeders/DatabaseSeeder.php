<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ContactSeeder;
use Database\Seeders\CompanySeeder;
use App\Models\Company;
use App\Models\Contact;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         Company::factory(10)->hasContact(10)->count(10)->create();
    }

}
