<?php

use Illuminate\Database\Seeder;
use App\Model\Categoria;
class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          Categoria::create([
            'nome' => 'Penitente',
        ]);
            Categoria::create([
            'nome' => 'Maneiro - Pau',
        ]);

         Categoria::create([
            'nome' => 'Penitenciária',
        ]);
    }
}
