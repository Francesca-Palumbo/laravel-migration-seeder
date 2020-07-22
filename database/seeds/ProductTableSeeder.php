<?php

use Illuminate\Database\Seeder;
use App\Product;
use Faker\Generator as Faker;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    // public function run()
    public function run(Faker $faker)
    {
        // $nuovo_prodotto = new Product();
        // // istanza, il singolo prodotto, la singola riga
        // $nuovo_prodotto->name = 'Giordano Bruno';
        // $nuovo_prodotto->description = "Se questa scienza che grandi vantaggi porterà all'uomo, non servirà all'uomo a comprendere se stesso, finirà per rigirarsi contro l'uomo";
        // $nuovo_prodotto->price = 1212.12;
        // $nuovo_prodotto->save();

        // questo è un array che abbiamo dentro prodottiRaccolta
        // config mi va a recuperare l'array che c'è dentro quel file
        // $dati_prodotti = config('prodottiRaccolta');
        // // e lo cicliamo
        // foreach ($dati_prodotti as $dati) {
        //     // creiamo un nuovo podotto, assegnamo le variabili e facciamo save
        //     // cambia la logica perchè non li inseriso più staticamente a mano
        //     $nuovo_prodotto = new Product();
        //     // 'nome' della variabile 'dati' (che è l'eemento corrente, quindi l'array che stiamo ciclando)
        //     // e dentro l'array ci sono le chiavi: nome, descrizione e prezzo
        //     $nuovo_prodotto->name = $dati['nome'];
        //     $nuovo_prodotto->description = $dati['descrizione'];
        //     $nuovo_prodotto->price = $dati['prezzo'];
        //     $nuovo_prodotto->save();
        //     // save mi scrive nel database
        //     // cosa abbiamo fatto? abbiamo creato un nuovo prodotto, ed abbiamo assegnato alle variabili di istanza di questo prodotto i valori dell'array
        //     // siamo dentro un ciclo, che esegue tante interazioni quanti sono gli elementi che ci sono dentro al file config.
        //     // per ogni interazione recupera un elemento dell'array, e scrive al database una riga con quei dati
        //
        // }
        for ($i=0; $i <10 ; $i++) {
            $nuovo_prodotto = new Product(); //istanza, il singolo prodotto,la singola riga
                // con sentence noi possiamo decidere quante parole
                $nuovo_prodotto->name = $faker->sentence(4);
                // con text possiamo andare a specificare quanti caratteri
                $nuovo_prodotto->description = $faker->text(100);
                // max decimal, min decimal e max
                $nuovo_prodotto->price = $faker->randomFloat(2, 10, 1000);
                $nuovo_prodotto->save();
                

        }
    }
}
