<?php

use Illuminate\Database\Seeder;

class FlowerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $flowers = "anemon amarylis amarant aster azalia begonia dzwonek bergamotka jaskier kamelii goździk chryzantema kolombina koniczyna stokrotka stokrotka dalia szarotka pierwiosnka  naparstnica frezja gerbera stokrotka mieczyk hibiskus wrzos hiacynt ostrokrzew irys jaśmin ladys pantofel lawenda lilia nagietek majeranek mimoza narcyz orchidea brzoskwinia kwiat piwonia petunia różanecznik róże rozmaryn szałwia słonecznik  oset tymianek tulipan fiołek  cynia";

        $flowers = explode(" ", $flowers);

        foreach ($flowers as $flower)
        {
            if($flower == "" || is_null($flowers))
            {
                continue;
            }
            $flowerModel = new \App\Kurier();
            $flowerModel->name = $flower;
            $flowerModel->quantity = (int) rand(0, 100);
            $flowerModel->price = (int) rand(0, 100);
            $flowerModel->save();
        }
    }
}
