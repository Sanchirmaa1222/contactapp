<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies = [];

        foreach(range(1, 15) as $index){
            $company = [
                'name'=> $name = "Company $index",
                'address' =>"Address  $name",
                'website' =>"Website $name",
                'email' =>"Email $name",
                'created_at' =>now(),
                'updated_at' =>now()
            ];
            $companies[] = $company;
        }
        DB::table('companies')->insert($companies);
    }
}