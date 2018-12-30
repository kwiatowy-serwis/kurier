<?php

use Illuminate\Database\Seeder;

class KurierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        foreach (range(0,10) as $item)
        {
            $faker = new Faker\Generator();
            $faker->addProvider(new Faker\Provider\Person($faker));

            $kurierModel = new \App\Kurier();
            $kurierModel->firstname = $faker->firstName;
            $kurierModel->lastname = $faker->lastName;
            $kurierModel->free = (int) rand(0, 1);
            $kurierModel->save();
        }

    }
}
